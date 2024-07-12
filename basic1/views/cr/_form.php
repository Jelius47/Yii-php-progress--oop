<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Cr $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'crId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notesBycr')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
