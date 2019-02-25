<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach ($pages as $one): ?>
            <div class="col-lg-6">
                <h2><?= $one->site_name ?></h2>

                <iframe src="//<?=$one->site_name ?>" frameborder="0" width="90%" height="400px">

                </iframe>

            </div>

            <?php endforeach; ?>
        </div>

    </div>
    <?= \yii\widgets\LinkPager::widget([
        'pagination' => $pagination,

    ]); ?>
    <hr>

</div>
