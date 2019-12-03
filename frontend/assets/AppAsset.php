<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/contact.css',
        'css/fonts.css',
        'css/normalize.css',
        'css/style.css',
        'css/jquery.fancybox.min.css',
        'css/footer.css',
        'css/header.css',
        'css/personalAccount.css',
        'css/createOrder.css',
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
