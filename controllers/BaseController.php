<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class BaseController extends Controller {

    public function __construct($id, $module=null, array $config = [])
    {
        parent::__construct($id, $module, $config);

        if (Yii::$app->session->has('language')) Yii::$app->language = Yii::$app->session->get('language');
        else if($lang = Yii::$app->request->cookies->has('language')) {
            if(Yii::$app->request->cookies->get('language') == 'ru') Yii::$app->language = 'ru';
            else if(Yii::$app->request->cookies->get('language') == 'en') Yii::$app->language = 'en';
        }
    }

}