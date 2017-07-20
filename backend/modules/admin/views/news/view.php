<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\NewsBlog */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-blog-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (!Yii::$app->user->isGuest) {
            echo Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
        }
        ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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
            //'id',
            'publiched_at',
            [
                'attribute' => 'user_id',
                'value' => function($model) {return $model->user->username;}

            ],
            'title',
            'content',

        ],
    ]) ?>

</div>
