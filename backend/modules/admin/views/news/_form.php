<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model common\models\NewsBlog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-blog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'publiched_at')->widget(
        DateControl::classname(),
        [
            'type'=>DateControl::FORMAT_DATE,
            'displayFormat' => 'dd.MM.yyyy',
            'saveFormat' => 'yyyy-MM-dd H:i:s',
            'ajaxConversion'=>false,
            'widgetOptions' => [
                'pluginOptions' => [
                    'autoclose' => true
                ]
            ]
        ]);
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['maxlength' => true, 'rows' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
