<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/registration.css',
        'css/authorization.css',
        'css/site.css',
        'css/fonts.css',
        'css/normalize.css',
        'css/style.css',
        'css/jquery.fancybox.min.css',
        'https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,500,700&display=swap&subset=cyrillic',

    ];
    public $js = [
        'js/jquery.fancybox.min.js',
        'js/main.js',
    ];
    public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
];

}

