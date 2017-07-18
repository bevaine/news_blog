<?php

use yii\helpers\Html;
use yii\grid\GridView;
use nill\widgetapn\Widgetapn;
use yii\bootstrap\Carousel;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новостной Блог';
$this->params['breadcrumbs'][] = $this->title;

foreach(\common\models\NewsBlog::find()->all() as $one){
    $items[] =  [
        'content' => Html::img(\yii\helpers\Url::toRoute(['/img/background.jpg']),['width' => '100%']),
        'caption' => '<h2>'.$one->title.'</h2><h3>'.$one->content.'</h3><h6>('.$one->publiched_at.')</h6>',
        'options' => [
            'style' => 'height:500px;',
            'class' => 'carousel slide',
            'data-interval' => '3000'
        ],
        'controls' => [
            '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
            '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
        ]
    ];
}
?>
<div class="news-blog-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <? //Html::a('Create News Blog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="row">
        <?php echo Carousel::widget([
            'items' => $items,
            'options' => [
                'style' => 'width:100%; margin:0 auto;' // Задаем ширину контейнера
            ]
        ]);
        ?>
    </div>

<!--    --><?//= GridView::widget([
//        'dataProvider' => $dataProvider,
//        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//            [
//                'attribute' => "user_id",
//                'value' => function($model) { return $model->user->username; },
//                'header' => "Имя"
//            ],
//            'title',
//            'content',
//            'publiched_at',
//            //['class' => 'yii\grid\ActionColumn'],
//        ],
//    ]);
    ?>
</div>
