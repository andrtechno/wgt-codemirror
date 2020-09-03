<?php

namespace panix\engine\assets\codemirror;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CodeMirrorTwigAsset
 * @package panix\engine\assets
 */
class CodeMirrorTwigAsset extends AssetBundle
{
    public $jsOptions = [
        'position' => View::POS_END
    ];

    public $sourcePath = __DIR__.'/twig';
    public $js = [
        'twig.js',

    ];

    public $depends = [
        'panix\engine\assets\codemirror\CodeMirrorAsset',
    ];
}
