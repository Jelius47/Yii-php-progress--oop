<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Modules;

/** @var yii\web\View $this */
/** @var app\models\Student $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

  

    <?php $data=Modules::find()->all(); echo $form->field($model, 'moduleCode')->dropDownList(ArrayHelper::map($data,'moduleCode',function($data){
        return $data["moduleCode"]." -".$data["moduleName"];

    }),['id'=>'moduleCode','prompt'=>'select module code'])?>
 

   

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Sign'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>



