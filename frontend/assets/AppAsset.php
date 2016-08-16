<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/app.css',
        'css/AppMedia.css',
        'css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600'
    ];
    public $js = [
        'js/html5shiv.js',
        'js/AppLayout.js',
        'js/jquery.scrollTo.js',
        //'js/smoothscroll.js',
        //'js/npm.js',
        'js/bootstrap.min.js',
        'owl-carousel/owl.carousel.js',
        '/js/lt.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_END
    ];
}
