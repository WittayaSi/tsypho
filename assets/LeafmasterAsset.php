<?php


namespace app\assets;

use yii\web\AssetBundle;

class LeafmasterAsset extends AssetBundle{
    public $sourcePath='@themes/leafmaster';
    public $baseUrl = '@web';
    
    public $css=[
        'css/base.css',
    ];
    public $js=[
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        
    ];  
}
