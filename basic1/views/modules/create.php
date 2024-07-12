<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Modules $model */

$this->title = Yii::t('app', 'Create Modules');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modules-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
