<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Cr $model */

$this->title = $model->crId;
$this->params['breadcrumbs'][] = ['label' => 'Crs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cr-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'crId' => $model->crId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'crId' => $model->crId], [
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
            'crId',
            'notesBycr:ntext',
        ],
    ]) ?>

</div>
