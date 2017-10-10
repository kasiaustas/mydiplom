<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/bootstrap.min.css',
        'css/tiltEffect.css',
        'css/main.css',
    ];
    public $js = [
        //'ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
       // 'js/bootstrap.min.js',
        'js/gsap.js',
        //'js/jquery.js',
        //'js/jquery.scrollUp.min.js',
        'js/jquery_cookie.js',
        'css/tiltEffect.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
