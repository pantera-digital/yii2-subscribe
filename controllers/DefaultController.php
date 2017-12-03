<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 12/3/17
 * Time: 8:52 PM
 */

namespace pantera\subscribe\controllers;

use pantera\subscribe\models\Subscribe;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

class DefaultController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = new Subscribe();
        $model->load(Yii::$app->request->post());
        if (Yii::$app->request->post('ajax')) {
            $model->validate();
            return $model->getErrors();
        }
        if ($model->save()) {
            return [
                'status' => 'success',
            ];
        } else {
            return [
                'status' => 'error',
            ];
        }
    }
}
