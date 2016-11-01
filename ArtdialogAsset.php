<?php

namespace atans\artdialog;

use yii\web\AssetBundle;

class ArtdialogAsset extends AssetBundle
{
    public $sourcePath = '@vendor/atans/yii2-artdialog';
    public $css = [
        'css/ui-dialog.css',
    ];
    public $js = [
        'js/dialog.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
