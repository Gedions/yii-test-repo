<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ClassTable $model */

$this->title = $model->class_id;
$this->params['breadcrumbs'][] = ['label' => 'Class Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="class-table-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'class_id' => $model->class_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'class_id' => $model->class_id], [
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
            'class_id',
            'class_name',
        ],
    ]) ?>

</div>
