<?php

namespace panix\ext\codemirror\bundles;
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

    public $sourcePath = __DIR__.'/../assets/twig';
    public $js = [
        'twig.js',

    ];

    public $depends = [
        'panix\ext\codemirror\bundles\CodeMirrorAsset',
    ];
}
