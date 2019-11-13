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
        //'css/registration.css',
        //'css/authorization.css',
        'css/site.css',
        'css/contact.css',
        'css/font.css',
        'css/normalize.css',
        'css/style.css',
        'css/jquery.fancybox.min.css',
        'css/footer.css',
        'css/header.css',
        'css/personalAccount.css',
        'css/createOrder.css',
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
