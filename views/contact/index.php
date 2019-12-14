<?php

/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<div class="contacts wrap padd">
    <h1>Контакты</h1>
    <?php $form = ActiveForm::begin(['options' => ['class' => '']]); ?>
    <?=$form->field($model, 'name')?>
    <?=$form->field($model, 'email')->input('email')?>
    <?=$form->field($model, 'comment')->textarea(['rows' => 5])?>
    <?=Html::submitButton('Отправить', [])?>
    <?php ActiveForm::end(); ?>
</div>
