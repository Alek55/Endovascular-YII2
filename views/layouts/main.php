<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php $this->registerCsrfMetaTags() ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title><?= Html::encode($this->title) ?> | РНО Эндоваскулар</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<main>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Регистрация</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="loginInput">Логин *</label>
                            <input type="text" class="form-control" id="loginInput" placeholder="Логин">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль *</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                        </div>
                        <div class="form-group">
                            <label for="lasNameInput">Фамилия *</label>
                            <input type="text" class="form-control" id="lasNameInput" placeholder="Фамилия">
                        </div>
                        <div class="form-group">
                            <label for="nameInput">Имя *</label>
                            <input type="text" class="form-control" id="nameInput" placeholder="Имя">
                        </div>
                        <div class="form-group">
                            <label for="secondNameInput">Отчество</label>
                            <input type="text" class="form-control" id="secondNameInput" placeholder="Отчество">
                        </div>
                        <div class="form-group">
                            <label for="emailInput">E-mail</label>
                            <input type="email" class="form-control" id="emailInput" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="countrySelect">Страна *</label>
                            <select class="form-control" id="countrySelect">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="citySelect">Город *</label>
                            <select class="form-control" id="citySelect">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phoneInput">Телефон</label>
                            <input type="text" class="form-control" id="phoneInput" placeholder="Телефон">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="infoCheck" checked>
                            <label class="form-check-label" for="infoCheck">Согласен на получение информационных рассылок</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="answersCheck" checked>
                            <label class="form-check-label" for="answersCheck">Уведомления об ответах</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="societyCheck">
                            <label class="form-check-label" for="societyCheck">Член Общества</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="dataCheck">
                            <label class="form-check-label" for="dataCheck">Согласие на обработку персональных данных *</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                        <br>
                        <small>Нажимая на кнопку "Зарегистрироваться", вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</small>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <header class="header wrap">
        <div class="header__slider">
            <div class="header__logo-content">
                <a href="/"><img class="header__logo" src="/images/logo.png" alt=""></a>
                <?php if(Yii::$app->language == 'ru') { ?>
                    <h1 class="header__logo-text">Российское научное общество специалистов по рентгенэндоваскулярной диагностике и лечению</h1>
                <?php } elseif(Yii::$app->language == 'en') { ?>
                    <h1 class="header__logo-text">The Russian Scientific Society of Endovascular Therapies</h1>
                <?php } ?>
            </div>
            <div class="header__arhive">
                <h2 class="header__title"> TCT RUSSIA 2019 </h2>
                <p class="header__description">XXI Московский международный конгресс по эндоваскулярной хирургии 20 – 22 июня Москва</p>
                <a href="" class="header__link">Архив мероприятий Общества</a>
                <div class="header__dots">
                    <span class="header__point active-point"></span>
                    <span class="header__point"></span>
                    <span class="header__point"></span>
                </div>
            </div>
        </div>
        <div class="header__menu padd">
            <div class="header__menu-content">
                <ul>
                    <?php if(Yii::$app->language == 'en') { ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="drowdown-news">News</a>
                            <div class="dropdown-menu" aria-labelledby="drowdown-news">
                                <a class="dropdown-item" href="<?=Url::to(['news/all-news']); ?>">All news</a>
                                <a class="dropdown-item" href="<?=Url::to(['news/society']); ?>">Society</a>
                                <a class="dropdown-item" href="<?=Url::to(['news/industry']); ?>">Industry</a>
                                <a class="dropdown-item" href="<?=Url::to(['news/events']); ?>">Events</a>
                                <a class="dropdown-item" href="<?=Url::to(['news/medicine']); ?>">Medicine</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="drowdown-communication">Communication</a>
                            <div class="dropdown-menu" aria-labelledby="drowdown-communication">
                                <a class="dropdown-item" href="#">New</a>
                                <a class="dropdown-item" href="#">Interesting</a>
                                <a class="dropdown-item" href="#">Forum</a>
                                <a class="dropdown-item" href="#">Create</a>
                                <a class="dropdown-item" href="#">Search</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#">Events</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="dropdown-society">Society</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-society">
                                <a class="dropdown-item" href="#">About society</a>
                                <a class="dropdown-item" href="#">Regulation</a>
                                <a class="dropdown-item" href="#">Board member</a>
                            </div>
                        </li>
                        <li>
                            <a href="#">Contacts</a>
                        </li>
                    <?php } else { ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="drowdown-news">Новости</a>
                            <div class="dropdown-menu" aria-labelledby="drowdown-news">
                                <a class="dropdown-item" href="<?=Url::to(['news/all-news']); ?>">Все новости</a>
                                <a class="dropdown-item" href="<?=Url::to(['news/society']); ?>">Общество</a>
                                <a class="dropdown-item" href="<?=Url::to(['news/industry']); ?>">Индустрия</a>
                                <a class="dropdown-item" href="<?=Url::to(['news/events']); ?>">Мероприятия</a>
                                <a class="dropdown-item" href="<?=Url::to(['news/medicine']); ?>">Медицина</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="drowdown-communication">Общение</a>
                            <div class="dropdown-menu" aria-labelledby="drowdown-communication">
                                <a class="dropdown-item" href="#">Новое</a>
                                <a class="dropdown-item" href="#">Интересное</a>
                                <a class="dropdown-item" href="#">Форум</a>
                                <a class="dropdown-item" href="#">Создать</a>
                                <a class="dropdown-item" href="#">Поиск</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" >Мероприятия</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="dropdown-society">Общество</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-society">
                                <a class="dropdown-item" href="#">Об обществе</a>
                                <a class="dropdown-item" href="#">Устав</a>
                                <a class="dropdown-item" href="#">Члены правления</a>
                            </div>
                        </li>
                        <li>
                            <a href="#">Контакты</a>
                        </li>
                    <?php } ?>
                </ul>
                <div class="header__search"></div>
            </div>
            <div class="header__lk">
                <div class="header__lang dropdown">
                    <?php if(Yii::$app->language == 'en') { ?>
                        <a class="header__lang-item eng dropdown-toggle" href="#" data-toggle="dropdown" id="dropdown-lang">ENG</a>
                    <?php } else if(Yii::$app->language == 'ru') { ?>
                        <a class="header__lang-item rus dropdown-toggle" href="#" data-toggle="dropdown" id="dropdown-lang">RUS</a>
                    <?php } ?>
                    <div class="dropdown-menu" aria-labelledby="dropdown-lang">
                        <?php if(Yii::$app->language == 'en') { ?>
                            <a class="dropdown-item rus" href="<?=Url::to(['site/set-language?language=ru']);?>">RUS</a>
                        <?php } else if(Yii::$app->language == 'ru') { ?>
                            <a class="dropdown-item eng" href="<?=Url::to(['site/set-language?language=en']);?>">ENG</a>
                        <?php } ?>
                    </div>
                </div>
                <a data-toggle="modal" data-target="#exampleModalCenter" href="#" class="header__auth">Личный кабинет</a>
            </div>
        </div>
    </header>

    <?= $content ?>

    <div class="mobile">
        <div class="mobile__content wrap">
            <h1 class="mobile__title">Мобильное приложение</h1>
            <div class="mobile__link">
                <a target="_blank" class="mobile__app-store" href="#"><img src="/images/app-store.jpg" alt=""></a>
                <a target="_blank" class="mobile__goole-play" href="#"><img src="/images/google-play.jpg" alt=""></a>
            </div>
        </div>
    </div>
    <div class="sponsors wrap padd">
        <h1 class="sponsors__title">Титульные программные спонсоры</h1>
        <div class="sponsors__imgs">
            <a target="_blank" href="#"><img src="/images/abbot.png" alt=""></a>
            <a target="_blank" href="#"><img src="/images/cardiomedics.png" alt=""></a>
        </div>
    </div>
    <footer class="footer wrap padd">
        <address class="footer__address">Секретариат Правления Москва, 119119. Ленинский проспект, д. 42, к.1 <a href="#">Показать на карте</a></address>
        <div class="footer__contacts">
            <p class="footer__phone"><a href="tel:74959387387">+7 (495) 938-73-87</a></p>
            <p class="footer__email"><a href="mailto:info@endovascular.ru">info@endovascular.ru</a></p>
        </div>
        <p class="footer__end">© 2002–2019 Российское научное общество специалистов по рентгенэндоваскулярной диагностике и лечению, <a
                    href="#">карта сайта</a></p>
    </footer>
</main>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
