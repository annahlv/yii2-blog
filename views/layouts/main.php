<?php
use yii\helpers\Url;
?>
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\PublicAsset;

//AppAsset::register($this);
PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/blog/web/index.php"><img src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2F4.bp.blogspot.com%2F-Hgy7QOoIcVc%2FVUJvH-Cwy5I%2FAAAAAAAAAKA%2FLEyH9Mpp34E%2Fs1600%2FFresh-Approach-HFHY-Logo-Feb-2012.png&f=1" height="40px" alt="logo"></a>
                
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <div class="i_con">
                    <ul class="nav navbar-nav text-uppercase">
                        <!--<li>
                            <form method="get">
                            <input type="search" placeholder="Найти" name="q" value="<?=isset($_GET['q']) ? CHtml::encode($_GET['q']) : '' ; ?>" />
                            <input type="submit" value="поиск" />
                            </form>
                        </li>-->
                        <li>
                            <a href="/blog/web/index.php">Главная</a>
                        </li>
                        <li>
                            <a href="<?= Url::toRoute(['site/about']);?>">О нас</a>
                        </li>
                        <li>
                            <a href="<?= Url::toRoute(['site/category', 'id'=>5]);?>">Рецепты</a>
                        </li>
                        <?php if(Yii::$app->user->isGuest):?>                                          
                            <li id="entry"><a href="<?= Url::toRoute(['auth/login'])?>">Вход</a></li>
                            <li id="entry"><a href="<?= Url::toRoute(['auth/signup'])?>">Регистрация</a></li>
                        <?php else: ?>

                            <li><a href="<?= Url::toRoute(['admin/default/index'])?>">Профиль</a></li>
                            <li id="entry"><a href="<?= Url::toRoute(['/auth/logout'])?>">Выйти</a></li>

                            
                        <?php endif;?>
                    </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>

<?= $content ?>

<!--footer start-->
<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    <div class="about-img"><img src="public/images/logo2.png" alt=""></div>
                    <div class="about-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed voluptua. At vero eos et
                        accusam et justo duo dlores et ea rebum magna text ar koto din.
                    </div>
                    
                </aside>
            </div>

            <div class="col-md-4">
                <aside class="footer-widget">
                    <div class="custom-post">
                        <div>
                            <a href="#"><img src="public/images/footer-img.png" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="text-uppercase">Спасибо, что посетили наш сайт :)</a>
                            
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">&copy; 2019 Головань Анна <a href="#">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
