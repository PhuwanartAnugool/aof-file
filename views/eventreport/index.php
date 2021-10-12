<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventreportSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Eventreports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventreport-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
            'panel' => [
                'before' => ' '
            ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            'place_seminar',
            'create_date',
            'timeGoback.time',
             'unit_people',
            // 'date_request',
             'who_request',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
