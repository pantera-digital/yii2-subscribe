<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 12/3/17
 * Time: 11:31 PM
 */

namespace pantera\subscribe;

use yii\web\AssetBundle;

class LaddaAsset extends AssetBundle
{
    public $sourcePath = '@bower/ladda/dist';
    public $css = [
        'ladda.min.css',
    ];
    public $js = [
        'spin.min.js',
        'ladda.min.js',
        'ladda.jquery.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}