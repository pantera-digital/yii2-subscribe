<?php

namespace pantera\subscribe\admin;

use yii\base\Module;

class BackendModule extends Module
{
    /* @var array Массив ролей для доступа к админской части */
    public $permissions = ['@'];
}