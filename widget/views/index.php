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
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Subscribe */
/* @var $action string */
?>

<?php $form = ActiveForm::begin([
    'id' => 'subscribe-form',
    'action' => $action,
    'enableClientScript' => false,
]) ?>
    <div class="inner">
        <div class="form-group form-group-actions inner__r">
            <?= Html::submitButton(Html::tag('span', 'Подписаться', [
                'class' => 'ladda-label',
            ]), [
                'class' => 'btn btn-darkred ladda-button',
                'data-style' => 'zoom-in',
            ]) ?>
        </div>
        <?= $form->field($model, 'email', [
            'options' => [
                'class' => 'form-group form-group-actions inner__l',
            ],
        ])->textInput([
            'placeholder' => 'E-mail',
            'type' => 'email',
        ])->label(false)->error(false) ?>
    </div>
<?php ActiveForm::end() ?>