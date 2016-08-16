<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\growl\Growl;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

$avatar = \frontend\models\Misc::getAvatar(Yii::$app->user->id, '_th1');

foreach (Yii::$app->session->allFlashes as $k => $v) {
    if($k == 'success') {
        echo Growl::widget([
            'type' => Growl::TYPE_SUCCESS,
            'title' => Yii::t('app', 'Puiku!'),
            'icon' => 'glyphicon glyphicon-ok-sign',
            'body' => $v,
            'showSeparator' => true,
            'delay' => 0,
            'pluginOptions' => [
                'placement' => [
                    'from' => 'top',
                    'align' => 'right',
                ]
            ]
        ]);
    }elseif($k == 'warning'){
        echo Growl::widget([
            'type' => Growl::TYPE_WARNING,
            'title' => Yii::t('app', 'Dėmesio!'),
            'icon' => 'glyphicon glyphicon-exclamation-sign',
            'body' => $v,
            'showSeparator' => true,
            'delay' => 0,
            'pluginOptions' => [
                'placement' => [
                    'from' => 'top',
                    'align' => 'right',
                ]
            ]
        ]);
    }
}
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
    <nav class="navigacija">

        <div class="pages">
            <ul class="list-unstyled">
                <li><a href="#flat01"><i class="fa fa-th"></i> Siena</a></li>
                <li><a href="<?= Url::to(['app/users']); ?>"><i class="fa fa-users"></i> Nariai</a></li>
                <li><a href="#nariai"><i class="fa fa-thumbs-up"></i> Taip ar Ne</a></li>
            </ul>

            <a class="Tmenu">
                <i class="fa fa-bars"></i>
            </a>

        </div>


        <div class="wrap-logo">
            <a class="" href="<?= Url::to(['app/index']); ?>">
                <img src="/images/BasicLogoGood.png" alt="logo" width="30px">
                <span class="logo">Pažintys<br>Anglijoje</span>
            </a>
        </div>

        <div class="pages personal">
            <ul class="list-unstyled">
                <li><a href="#flat01"><i class="fa fa-comments"></i> Žinutės</a></li>
                <li><a href="#apie"><i class="fa fa-heart"></i> Pamėgti</a></li>
                <?php if($avatar): ?>
                    <li><a class="Tprofile avatar img"><img src="<?= $avatar ?>" width="35px"></a></li>
                <?php else: ?>
                    <li><a class="Tprofile avatar"><span class="fa fa-user"></span></a></li>
                <?php endif; ?>
                <!--<li><a href="<?/*= Url::to(['site/logout']); */?>" class="page-scroll">atsijungt</a></li>-->
            </ul>
            <?php if($avatar): ?>
                <a class="avatar img"><img src="<?= $avatar ?>" width="34px"></a>
            <?php else: ?>
                <a href="#nariai" class="Tprofile avatar"><span class="fa fa-user"></span></a>
            <?php endif; ?>

        </div>
        
    </nav>

    <div id="menu">
        <ul class="list-unstyled">
            <li><a href="#">Siena</a></li>
            <li><a href="<?= Url::to(['app/users']); ?>">Nariai</a></li>
            <li><a href="#">Taip ar Ne</a></li>
            <li><a href="#">Žinutės</a></li>
            <li><a href="#">Pamėgti</a></li>
        </ul>
    </div>

    <div id="profile">
        <ul class="list-unstyled">
            <li><a href="<?= Url::to(['app/profile']); ?>">Profilis</a></li>
            <li><a href="<?= Url::to(['site/logout']); ?>">Atsijungti</a></li>
        </ul>
    </div>

    <nav class="navbar navbar-second navbar-static-top hidden-xs">
        <div class="navbar-header col-md-2 col-sm-3">
        </div>
        <div class="collapse navbar-collapse text-center" id="navbar-collapse-1">
            <div class="col-md-7 col-sm-9 col-xs-12 nav-wrap">



            </div>
            <div class="social-media hidden-sm hidden-xs col-md-3">

            </div>
        </div>
    </nav>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?= $content ?>
    </div>
</div>

<footer class="dark-bg" style="margin-top: 60px;">
    <div class="container">
        <div class="row" >
            <div class="col-md-4 vcenter">

                <div class="row">
                    <div class="col-xs-6 vcenter">
                        <img src="/images/BasicLogo.png" alt="logo" width="100%" style="">
                    </div><!--

                    --><div class="col-xs-6 vcenter" style="padding-left: 0px;">
                        <div class="info">
                            <a>DUK</a>
                            <a>Pagalba</a>
                            <a>Naudojimosi nuostatai</a>
                            <a>Taisykles</a>
                            <a>Slapukų politika</a>
                        </div>
                    </div>

                </div>


                <p class="c">&copy; Pažintys <span style="font-weight: 700;">Anglijoje</span> <?= date('Y') ?></p>
            </div><!--


            --><div class="col-md-offset-6 col-md-2 vcenter other">

                <p class="c-mini">
                    <span>Pažintys <b>Norvegijoje</b></span>
                    <img src="/images/BasicLogo.png" alt="logo" width="68px" height="auto">
                </p>

                <p class="c-mini">
                    <span>Pažintys <b>Danijoje</b></span>
                    <img src="/images/BasicLogo.png" alt="logo" width="68px" height="auto">
                </p>

            </div>
        </div>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
