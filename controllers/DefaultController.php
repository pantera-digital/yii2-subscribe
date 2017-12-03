<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 12/3/17
 * Time: 8:52 PM
 */

namespace pantera\subscribe\controllers;

use pantera\subscribe\FrontendModule;
use pantera\subscribe\models\Subscribe;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

class DefaultController extends Controller
{
    /* @var FrontendModule */
    public $module;

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
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return [
                'status' => 'success',
                'style' => 'notice',
                'message' => $this->module->successMessage,
            ];
        } else {
            return [
                'status' => 'error',
                'style' => 'error',
                'message' => current($model->getFirstErrors()),
            ];
        }
    }
}
