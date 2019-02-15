<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hosts */

$this->title = $model->site_name;
$this->params['breadcrumbs'][] = ['label' => 'Hosts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);


?>
<div class="hosts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'site_name',
            'host_admin_panel',
            'host_admin_user',
            'host_admin_pwd',
            'ftp_address',
            'ftp_user',
            'ftp_password',
            'site_admin_user',
            'site_admin_pwd',
            'site_bd_name',
            'site_bd_user',
            'site_bd_pwd',
            'site_email:email',
            'site_email_pwd:email',
            [
                    'attribute'=>'File',
                'format'=>'raw',
                'value' => function($model)
                {
                    if($model->inc_file !=null){
                        return
                            Html::a('Download file', ['hosts/download', 'id' => $model->id],['class' => 'btn btn-primary']);
                    }
                        else{
                            return 'not exist!';
                        }

                }
            ]
        ],
    ]) ?>

</div>
