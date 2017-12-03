<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 12/3/17
 * Time: 11:31 PM
 */

namespace pantera\subscribe;

use yii\web\AssetBundle;

class GrowlAsset extends AssetBundle
{
    public $sourcePath = '@bower/growl';
    public $css = [
        'stylesheets/jquery.growl.css',
    ];
    public $js = [
        'javascripts/jquery.growl.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}