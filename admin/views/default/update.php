<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model pantera\subscribe\models\Subscribe */

$this->title = 'Обновить';
$this->params['breadcrumbs'][] = ['label' => 'Подписчики', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscribe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
