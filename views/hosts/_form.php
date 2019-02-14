<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hosts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hosts-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'site_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_admin_panel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_admin_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_admin_pwd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ftp_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ftp_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ftp_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_admin_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_admin_pwd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_bd_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_bd_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_bd_pwd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_email_pwd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'files')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
