<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta name="yandex-verification" content="cdf9a0a3c7a81c02" />
    <meta name="google-site-verification" content="jfhKnt9D8AxOkX266h1BVaxf-GeXqDqNtNwtBGyCDo4" />
    <meta property="og:image" content="http://megadacha21.ru/image/circle-one.png"/>
    <meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1251">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Мегадача, благоустройство территории, ландшафтный дизайн, расчёт сметы, аренда техники, материалы, перевозки, Мегадача21, megadacha21, Чувашия">
    <meta name="description" content="Компания «МегаДача» предлагает разработку ландшафтного дизайна, проектирование, благоустройство, озеленение территории.
    Компания располагает собственной спецтехникой, обеспечивает поставку посадочного материала, выполняет создание новых садов, их обслуживание, профессиональный уход за ними.">
    <link rel="shortcut icon" href="/image/favicon.ico" type="image/x-icon" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div id="header" class="navbar navbar-whtie" role="navigation"> <!-- navbar-fixed-top -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="sr-only">Навигация</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="menu" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#menu">Главная</a></li>
                <li><a href="#portfolio">Портфолио</a></li>
                <li><a href="#market">Магазин</a></li>
                <li><a href="#rent">Аренда</a></li>
                <li><a href="#reviews">Отзывы</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
        </div>
    </div>

    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>

<?php
Modal::begin([
    'id' => 'order-modal',
    'header' => '<h1>Заказать звонок</h1>',
    'footer' => 'Закрыть',
]);
     ActiveForm::begin([
         'id' => 'order-form',
         'action' => ['/site/order'],
         'class' => "form-group",
         ]);
     echo Html::textInput('name', '', ['class' => 'form-control mb-1', 'placeholder' => 'Имя', 'required' => true]);

     echo Html::textInput('phone', '', ['class' => 'form-control', 'placeholder' => 'Телефон', 'required' => true]);
?>
    <div class="form-group mt-2">
        <?= Html::submitButton('Заказать', ['class' => 'btn btn-primary', 'name' => 'order-button']) ?>
    </div>
<?php
    ActiveForm::end();
    Modal::end();
?>

<footer class="footer">
    <div class="navbar navbar-whtie" role="navigation"> <!-- navbar-fixed-top -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer">
                <span class="sr-only">Навигация</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="footer" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#menu">Главная</a></li>
                <li><a href="#portfolio">Портфолио</a></li>
                <li><a href="#market">Магазин</a></li>
                <li><a href="#rent">Аренда</a></li>
                <li><a href="#reviews">Отзывы</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
