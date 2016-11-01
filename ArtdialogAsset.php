<?php

namespace atans\artdialog;

use yii\web\AssetBundle;

class ArtdialogAsset extends AssetBundle
{
    public $sourcePath = '@vendor/atans/yii2-artdialog/assets';
    public $css = [
        'css/ui-dialog.css',
    ];
    public $js = [
        'js/dialog.js',
        'js/dialog-plus.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
