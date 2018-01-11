<?php

use pantera\subscribe\models\Subscribe;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel pantera\subscribe\models\admin\SubscribeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Подписчики';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscribe-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'email:email',
            [
                'attribute' => 'created_at',
                'value' => function (Subscribe $model) {
                    return Yii::$app->formatter->asDatetime($model->created_at);
                },
                'options' => [
                    'style' => 'width: 250px;'
                ],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}{delete}',
                'options' => [
                    'style' => 'width: 50px;'
                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
