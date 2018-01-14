<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 12/3/17
 * Time: 9:00 PM
 */

use pantera\subscribe\models\Subscribe;
use yii\helpers\Html;
use yii\web\View;
use yii\bootstrap\ActiveForm;

/* @var $this View */
/* @var $model Subscribe */
/* @var $action string */
?>
<div class="subscribe-widget">
    <div class="h4">Подписаться на рассылку</div>
    <?php $form = ActiveForm::begin([
        'id' => 'subscribe-form',
        'action' => $action,
        'enableClientScript' => false,
    ]) ?>
        <?php $button = Html::submitButton(Html::tag('span', 'Подписаться', [
            'class' => 'ladda-label',
        ]), [
            'class' => 'btn btn-primary ladda-button',
            'data-style' => 'zoom-in',
        ]) ?>
        <?= $form->field($model, 'email', [
            'inputTemplate' => '<div class="input-group">{input}<span class="input-group-btn">' . $button . '</span></div>'
        ])->textInput([
            'placeholder' => 'Ваш e-mail',
            'type' => 'email',
        ])->label(false)->error(false) ?>
    <div class="hint">Рассылаем интересные новости и выгодные акции</div>
    <?php ActiveForm::end() ?>
</div>