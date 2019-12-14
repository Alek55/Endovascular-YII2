<?php

namespace app\controllers;
use app\models\Contact;


use yii\web\Controller;

class ContactController extends Controller {

    public function actionIndex() {
        $this->view->title = 'Контакты';
        $model = new Contact();
        return $this->render('index', ['model' => $model]);
    }

}