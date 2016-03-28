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
class MaterialAsset extends AssetBundle {

    public $sourcePath = '@themes/material';
    public $baseUrl = '@web';
    public $css = [
        'css/material-wfont.min.css',
        'css/material.css',
        'css/ripples.min.css',
        'css/style.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
        //'css/font-awesome.css',
        'css/card-css.css',
        'css/hover.css',
        'css/fadeIn.css',
        'css/animate.css',
        'css/back_to_top.css'
    ];
    public $js = [
        'js/material.min.js',
        'js/ripples.min.js',
        'js/scroll_down.js',
        'js/smoothscroll.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
