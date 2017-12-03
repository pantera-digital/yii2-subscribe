<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 12/3/17
 * Time: 8:52 PM
 */

namespace pantera\subscribe\widget;

use pantera\subscribe\models\Subscribe;
use pantera\subscribe\SubscribeAsset;
use yii\base\Widget;
use yii\helpers\Url;

class SubscribeWidget extends Widget
{
    /* @var string Акшион в форме подписки */
    public $action;

    public function run()
    {
        parent::run();
        $model = new Subscribe();
        return $this->render('index', [
            'model' => $model,
            'action' => $this->action,
        ]);
    }

    public function init()
    {
        parent::init();
        if (is_null($this->action)) {
            $this->action = Url::to(['/subscribe/default/index']);
        }
        SubscribeAsset::register($this->view);
    }
}