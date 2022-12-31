<?php

use frontend\models\ClassTable;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ClassTableSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Class Tables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-table-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Class Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'class_id',
            'class_name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ClassTable $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'class_id' => $model->class_id]);
                 }
            ],
        ],
    ]); ?>


</div>
