<?php

use yii\helpers\Html;
use yii\grid\GridView;
use nill\widgetapn\Widgetapn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новостной Блог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-blog-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <? //Html::a('Create News Blog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => "user_id",
                'value' => function($model) { return $model->user->username; },
                'header' => "Имя"
            ],
            'title',
            'content',
            'publiched_at',
            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
