<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Eventreport */

$this->title = 'Update Eventreport: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Eventreports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eventreport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
