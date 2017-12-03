<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 12/3/17
 * Time: 11:31 PM
 */

namespace pantera\subscribe;

use yii\web\AssetBundle;

class SubscribeAsset extends AssetBundle
{
    public $sourcePath = '@pantera/subscribe/assets';
    public $js = [
        'js/script.js',
    ];
    public $depends = [
        'pantera\subscribe\LaddaAsset',
        'pantera\subscribe\GrowlAsset',
    ];
}