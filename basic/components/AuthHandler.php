<?php

namespace app\components;


use app\models\User;
use Yii;
use yii\authclient\ClientInterface;
use yii\helpers\ArrayHelper;

/**
 * AuthHandler handles successful authentication via Yii auth component
 */
class AuthHandler {

    /**
     * @var ClientInterface
     */
    private $client;
    public $rememberMe = true;

    public function __construct(ClientInterface $client) {
        $this->client = $client;
    }

    public function handle() {
        $attributes = $this->client->getUserAttributes();
        $email = ArrayHelper::getValue($attributes, 'email');
        $id = ArrayHelper::getValue($attributes, 'id');
        $nickname = ArrayHelper::getValue($attributes, 'login');

        /* @var Auth $auth */
        if (Yii::$app->user->isGuest) {
            // signup
            if (in_array(explode('@', $email)[1], \yii::$app->params['allowDomain'])) {
                $auth = User::find()->where(['email' => $email])->one();
                if ($email !== null && User::find()->where(['email' => $email])->exists()) {
                    if ($auth->googleID) {
                        Yii::$app->user->login($auth, $this->rememberMe ? 3600 * 2 : 0);
                    } else {
                        $googleIDSave = User::findOne($auth->id);
                        $googleIDSave->googleID = $id;
                        if ($googleIDSave->update()) {
                            Yii::$app->user->login($auth, $this->rememberMe ? 3600 * 2 : 0);
                        } else {
                            Yii::$app->session->set('loginFail', [
                                Yii::t('app', '{client} hesabı  kaydedilemiyor. Hatalar: {errors}', [
                                    'client' => $this->client->getTitle(),
                                    'errors' => json_encode($googleIDSave->getErrors()),
                                ]),
                            ]);
                        }
                    }
                } else {
                    $password = Yii::$app->security->generateRandomString(6);
                    $user = new User([
                        'username' => explode('@', $email)[0],
                        'github' => $nickname,
                        'email' => $email,
                        'googleID' => $id,
                        'password' => $password,
                        'status' => 10, //giriş onayı öğrenilmesi lazım. ilk kayıt 
                    ]);
                    $user->generateAuthKey();
                    $user->generatePasswordResetToken();

                    $transaction = User::getDb()->beginTransaction();

                    if ($user->save()) {
                        if ($user->save()) {
                            $transaction->commit();
                            Yii::$app->user->login($user, $this->rememberMe ? 3600 * 2 : 0);
                        } else {
                            Yii::$app->session->set('loginFail', [
                                Yii::t('app', '{client} hesabı  kaydedilemiyor. Hatalar: {errors}', [
                                    'client' => $this->client->getTitle(),
                                    'errors' => json_encode($auth->getErrors()),
                                ]),
                            ]);
                        }
                    } else {
                        Yii::$app->session->set('loginFail', [
                            Yii::t('app', '{client} hesabı  kaydedilemiyor. Hatalar: {errors}', [
                                'client' => $this->client->getTitle(),
                                'errors' => json_encode($user->getErrors()),
                            ]),
                        ]);
                    }
                }
            } else {
                Yii::$app->session->set('loginFail', [
                    "Öğrenci Mail Adresiniz İle Giriş Yapınız", 
                ]);
                
                return Yii::$app->getResponse()->redirect('1888');
            }
        } else {
            return Yii::$app->getResponse()->redirect('dashboard/');
            
        }
    }

    /**
     * @param User $user
     */
    private function updateUserInfo(User $user) {
        $attributes = $this->client->getUserAttributes();
        $github = ArrayHelper::getValue($attributes, 'login');
        if ($user->github === null && $github) {
            $user->github = $github;
            $user->save();
        }
    }

}
