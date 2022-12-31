<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ClassTable $model */

$this->title = 'Update Class Table: ' . $model->class_id;
$this->params['breadcrumbs'][] = ['label' => 'Class Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->class_id, 'url' => ['view', 'class_id' => $model->class_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="class-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
