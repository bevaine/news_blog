<?php

use yii\helpers\Html;
use yii\grid\GridView;
use nill\widgetapn\Widgetapn;
use yii\bootstrap\Carousel;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="news-blog-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'publiched_at',
            [
                'attribute' => 'user_id',
                'value' => function($model) {return $model->user->username;}

            ],
            'title',
            'content',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}'
            ],
        ],
    ]); ?>
</div>
