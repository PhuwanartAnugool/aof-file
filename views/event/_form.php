<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\RscTime;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place_seminar')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'create_date')->widget(
            DatePicker::className(), [
        // inline too, not bad
        'inline' => false,
        'language' => 'th',
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>

    <?=
    $form->field($model, 'time_goback')->dropdownList(
            ArrayHelper::map(RscTime::find()->all(), 'id', 'time'), [
        'prompt' => 'กรุณาเลือกเวลาไป-กลับ'
    ]);
    ?>

    <?= $form->field($model, 'unit_people')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'date_request')->widget(
            DatePicker::className(), [
        // inline too, not bad
        'inline' => false,
        'language' => 'th',
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>

    <?= $form->field($model, 'who_request')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
