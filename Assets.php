<?php
namespace sangroya\ckeditor5;
use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $sourcePath = '@backend/web/js/ckeditor';
    public $css = [
    ];

    public $js = [
        'ckeditor.js',
        'ckeditor-collection.js'
    ];

    public $depends = [
    ];
}
