<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Contact extends Model {

    public $name;
    public $email;
    public $comment;
    public $date_request;

    public function attributeLabels() {
        if(Yii::$app->language == 'ru') {
            return [
                'name' => 'Имя',
                'email' => 'Email',
                'comment' => 'Комментарий',
            ];
        }
        else {
            return [
                'name' => 'Name',
                'email' => 'Email',
                'comment' => 'Comment',
            ];
        }
    }

    public function rules() {
        return [
            [['name', 'email'], 'required', 'message' => 'Заполните поле'],
            ['email', 'email', 'message' => 'Неверный формат email'],
            ['name', 'string', 'max' => 255],
            ['email', 'string', 'max' => 127],
            [['comment', 'date_request'], 'safe']
        ];
    }

}