<?php

use app\models\Cr;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CrSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Crs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cr-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('New message by Cr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'crId',
            'notesBycr:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Cr $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'crId' => $model->crId]);
                 }
            ],
        ],
    ]); ?>


</div>
