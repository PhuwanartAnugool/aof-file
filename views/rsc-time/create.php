<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RscTime */

$this->title = 'Create Rsc Time';
$this->params['breadcrumbs'][] = ['label' => 'Rsc Times', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-time-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
