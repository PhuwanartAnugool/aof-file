<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RscTimeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rsc Times';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-time-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rsc Time', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
