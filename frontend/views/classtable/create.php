<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ClassTable $model */

$this->title = 'Create Class Table';
$this->params['breadcrumbs'][] = ['label' => 'Class Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
