<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cr $model */

$this->title = 'Update Cr: ' . $model->crId;
$this->params['breadcrumbs'][] = ['label' => 'Crs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->crId, 'url' => ['view', 'crId' => $model->crId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
