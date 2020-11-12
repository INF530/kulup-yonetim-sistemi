<?php


namespace app\controllers;
use app\models\KulupKayit;
use app\models\Kulupler;
use MongoDB\BSON\TimestampInterface;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\mutex\RetryAcquireTrait;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

//Base URL Route
class KulupController extends \yii\web\Controller
{



    public function actionKulupKayit(){

        $model = Yii::createObject(KulupKayit::class);

        if ($model->load(Yii::$app->request->post())  &&  $model->validate()){
                return $model->kulup_id. '  '. $model->ogr_role;

        }

        return $this->render('kulup_kayit', [
            'model' => $model,
            'kulupIds' => Kulupler::find()
        ]);

    }

    
    /*
   * Fonksiyon adi "action" ile baslamali ve actiondan sonra yazilan kisim hangi url'e gidilmesini istiyorsak ona gore yazilmali
   * Orn: actionRegister = /kulup/register-kulup
   */
    public function actionRegisterKulup($name= "Nusret")
    {
        $username = $name;
        $pass = "hello World";

        $db =  Yii::$app->db;
        Yii::$app->response->format = Response::FORMAT_JSON;
        $things = $db->createCommand("SELECT * FROM  faculty")->queryAll();

        return $things;


//        return $this->render("register", [
//            'usr' => $username,
//            'ps' => $pass
//
//        ]);


    }

}