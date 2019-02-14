<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HostsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hosts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'site_name') ?>

    <?= $form->field($model, 'host_admin_panel') ?>

    <?= $form->field($model, 'host_admin_user') ?>

    <?= $form->field($model, 'host_admin_pwd') ?>

    <?php // echo $form->field($model, 'ftp_address') ?>

    <?php // echo $form->field($model, 'ftp_user') ?>

    <?php // echo $form->field($model, 'ftp_password') ?>

    <?php // echo $form->field($model, 'site_admin_user') ?>

    <?php // echo $form->field($model, 'site_admin_pwd') ?>

    <?php // echo $form->field($model, 'site_bd_name') ?>

    <?php // echo $form->field($model, 'site_bd_user') ?>

    <?php // echo $form->field($model, 'site_bd_pwd') ?>

    <?php // echo $form->field($model, 'site_email') ?>

    <?php // echo $form->field($model, 'site_email_pwd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
