<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hosts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hosts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hosts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'site_name',
            'host_admin_panel',
            'host_admin_user',
            'host_admin_pwd',
            [
                    'attribute'=>'File',
                'format'=>'raw',
                'value' => function($model)
                {
                    if($model->inc_file !=null){
                        return
                            Html::a('Download file', ['hosts/download', 'id' => $model->id],['class' => 'link']);
                    }
                        else{
                            return 'not exist!';
                        }

                }
            ],
            //'ftp_address',
            //'ftp_user',
            //'ftp_password',
            //'site_admin_user',
            //'site_admin_pwd',
            //'site_bd_name',
            //'site_bd_user',
            //'site_bd_pwd',
            //'site_email:email',
            //'site_email_pwd:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
