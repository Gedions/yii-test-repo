<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ClassTable $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="class-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'class_id')->textInput() ?>

    <?= $form->field($model, 'class_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
