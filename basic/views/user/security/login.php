<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use dektrium\user\models\LoginForm;
use dektrium\user\widgets\Connect;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module $module
 */

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>


<div class="site-login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="jumbotron row align-items-center h-100 ml-auto">
                                    <img src="http://3fcampus.tau.edu.tr/uploads/cms/pr.tau/5566_4_th.png">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h1 text-gray-900 mb-4">Giriş</h1>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php $form = ActiveForm::begin([
                                                'id' => 'login-form',
                                                'enableAjaxValidation' => true,
                                                'enableClientValidation' => false,
                                                'validateOnBlur' => false,
                                                'validateOnType' => false,
                                                'validateOnChange' => false,
                                            ]) ?>

                                            <?php if ($module->debug): ?>
                                                <?= $form->field($model, 'login', [
                                                    'inputOptions' => [
                                                        'autofocus' => 'autofocus',
                                                        'class' => 'form-control',
                                                        'tabindex' => '1'
                                                    ]
                                                ])->dropDownList(LoginForm::loginList());
                                                ?>

                                            <?php else: ?>

                                                <?= $form->field($model, 'login',
                                                    ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control', 'tabindex' => '1']]
                                                );
                                                ?>

                                            <?php endif ?>

                                            <?php if ($module->debug): ?>
                                                <div class="alert alert-warning">
                                                    <?= Yii::t('user', 'Password is not necessary because the module is in DEBUG mode.'); ?>
                                                </div>
                                            <?php else: ?>
                                                <?= $form->field(
                                                    $model,
                                                    'password',
                                                    ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2']])
                                                    ->passwordInput()
                                                    ->label(
                                                        Yii::t('user', 'Password')
                                                        . ($module->enablePasswordRecovery ?
                                                            ' (' . Html::a(
                                                                Yii::t('user', 'Forgot password?'),
                                                                ['/user/recovery/request'],
                                                                ['tabindex' => '5']
                                                            )
                                                            . ')' : '')
                                                    ) ?>
                                            <?php endif ?>

                                            <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '3']) ?>

                                            <?= Html::submitButton(
                                                Yii::t('user', 'Sign in'),
                                                ['class' => 'btn btn-primary btn-block', 'tabindex' => '4']
                                            ) ?>

                                            <?php ActiveForm::end(); ?>
                                        </div>
                                    </div>
                                    <?php if ($module->enableConfirmation): ?>
                                        <p class="text-center">
                                            <?= Html::a(Yii::t('user', 'Didn\'t receive confirmation message?'), ['/user/registration/resend']) ?>
                                        </p>
                                    <?php endif ?>
                                    <?php if ($module->enableRegistration): ?>
                                        <p class="text-center">
                                            <?= Html::a(Yii::t('user', 'Don\'t have an account? Sign up!'), ['/user/registration/register']) ?>
                                        </p>
                                    <?php endif ?>
                                    <?= Connect::widget([
                                        'baseAuthUrl' => ['/user/security/auth'],
                                    ]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>