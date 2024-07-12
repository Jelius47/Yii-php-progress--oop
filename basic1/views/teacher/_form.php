<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Modules;

/** @var yii\web\View $this */
/** @var app\models\Teacher $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(['id'=>'teacherForm']); ?>

   

    <?php $data=Modules::find()->all(); echo $form->field($model, 'moduleCode')->dropDownList(ArrayHelper::map($data,'moduleCode',function($data){
        return $data["moduleCode"]." -".$data["moduleName"];

    }),['id'=>'moduleCode','prompt'=>'select module code'])?>

   

    <?= $form->field($model, 'notesFromLec')->textarea(['id'=> 'notes','rows' => 6]) ?>

   

   

    <div class="form-group">
        <?= Html::submitButton('Initiate', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
