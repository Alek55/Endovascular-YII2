<?php

namespace app\controllers;


use yii\web\Controller;

class NewsController extends Controller {

    public function actionAllNews() {
        $this->view->title = 'Все новости';



        return $this->render('all-news');
    }

}