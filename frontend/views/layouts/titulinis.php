<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\SiteAsset;
use common\widgets\Alert;

SiteAsset::register($this);
$this->registerJsFile('/js/titulinis.js');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header col-md-2 col-sm-3">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= Url::to(['site/index']);?>"><img src="/images/BasicLogo.png" alt="logo" width="55px"><span class="logo">Pažintys<br>Anglijoje</span></a>
            </div>
            <div class="collapse navbar-collapse text-center" id="navbar-collapse-1">
                <div class="col-md-7 col-sm-9 col-xs-12 nav-wrap">
                    <ul class="nav navbar-nav">
                        <li><a href="#flat01"  class="page-scroll">Pradžia</a></li>
                        <li><a href="#apie" class="page-scroll">Apie mus</a></li>
                        <li><a href="#nariai" class="page-scroll">Nariai</a></li>
                        <li><a href="#privalumai" class="page-scroll">Privalumai</a></li>
                        <li><a href="#atsiliepimai" class="page-scroll">Atsiliepimai</a></li>
                    </ul>
                </div>
                <div class="social-media hidden-sm hidden-xs col-md-3">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <?= $content ?>

    <footer class="dark-bg">
        <div class="container"style="text-align: center;">
            <h1></h1>

            <div class="row" >
                <div class="col-md-3 vcenter">
                    <img src="/images/BasicLogo.png" alt="logo" width="40%">
                    <p class="c-mini">Pažintys <span style="font-weight: 700;">Norvegijoje</span></p>
                </div><!--
            --><div class="col-md-6 vcenter">
                    <img src="/images/BasicLogo.png" alt="logo" width="40%">

                    <p class="c">&copy; Pažintys <span style="font-weight: 700;">Anglijoje</span> <?= date('Y') ?></p>
                </div><!--
            --><div class="col-md-3 vcenter">
                    <img src="/images/BasicLogo.png" alt="logo" width="40%">
                    <p class="c-mini">Pažintys <span style="font-weight: 700;">Danijoje</span></p>
                </div>
            </div>

        </div>
    </footer>
</div>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
