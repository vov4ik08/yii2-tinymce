<?php
/**
 * Created by PhpStorm.
 * User: vov4ik08
 * Date: 25.02.14
 * Time: 10:35
 */

namespace Apollo;


use yii\web\AssetBundle;

class TinyMceAssets extends AssetBundle {

    public $sourcePath = '@vendor/apollo/yii2-tinymce/assets';

    public $css = [


    ];
    /**
     * @inheritdoc
     */
    public $js = [
        'tinymce.min.js'


    ];
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',

    ];
} 