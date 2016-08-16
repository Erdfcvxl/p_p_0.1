<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class SiteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/plugins.css',
        'css/titulinis.css',
        'css/media.css',
        'css/effects.css',
        'css/font-awesome.min.css',
        'owl-carousel/owl.carousel.css',
        'owl-carousel/owl.transitions.css',
        'owl-carousel/owl.theme.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600'
    ];
    public $js = [
        'js/html5shiv.js',
        'js/parallax.min.js',
        'js/jquery.scrollTo.js',
        //'js/smoothscroll.js',
        //'js/npm.js',
        'js/bootstrap.min.js',
        'owl-carousel/owl.carousel.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
