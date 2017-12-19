# yii2-subscribe

## Установка
Предпочтительно через composer:
```
composer require pantera-digital/yii2-subscribe "dev-kid"
```
Или добавьте в composer.json
```
"pantera-digital/yii2-subscribe": "dev-kid"
```

## Backend
```
'modules' => [
    'subscribe' => [
        'class' => \pantera\subscribe\admin\BackendModule::className(),
        'permissions' => ['admin'],
    ],
],
```
Параметр permissions принимает массив ролей которым доступно управление подписчиками

## Frontend 
```
'modules' => [
    'subscribe' => [
        'class' => \pantera\subscribe\FrontendModule::className(),
        'successMessage' => 'Спасибо подписка оформленна успешно!',
    ],
],
```
Параметр successMessage принимает строку которая будет показана пользователю после подписки

## Миграции
```
php yii migrate/up --migrationPath=@pantera/subscribe/migrations
```

## Использование виджета
```
<?php

use pantera\subscribe\widget\SubscribeWidget;

<?= SubscribeWidget::widget() ?>
```
или
```
<?= \pantera\subscribe\widget\SubscribeWidget::widget() ?>
```

##### Настройка
у виджета есть только один параметр
```
action
```
отвечает за action формы подписки

дефолтное значение
```
Url::to(['/subscribe/default/index'])
```
