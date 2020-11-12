<?php

use app\models\KulupKayit;
use app\models\KulupKayitQuery;
use app\models\Kulupler;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KulupKayit */
/* @var $form ActiveForm */
?>
<div class="Kulup_Kayit">

    <?php $form = ActiveForm::begin(); ?>

        <?php $kulup_names = Kulupler::find()->select(['name'])->indexBy('name')->column();
              $kulup_ids = Kulupler::find()->select(['name'])->indexBy('id')->column();
        print_r($kulup_ids);

        ?>

        <?= $form->field($model, 'kulup_id')->dropDownList($kulup_ids) ?>
        <?= $form->field($model, 'ogr_role')->dropDownList($kulup_names) ?>

    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Kulup_Kayit -->
