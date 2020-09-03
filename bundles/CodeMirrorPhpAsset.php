<?php

namespace panix\ext\codemirror\bundles;

/**
 * Class CodeMirrorPhpAsset
 * @package panix\engine\assets
 */
class CodeMirrorPhpAsset extends CodeMirrorBundle
{

    public $js = [
        'mode/php/php.js',
        'mode/htmlmixed/htmlmixed.js',
        'mode/clike/clike.js',
        'mode/javascript/javascript.js',
        'mode/xml/xml.js',
        'mode/css/css.js',
        'addon/selection/active-line.js'
    ];

    public $depends = [
        'panix\ext\codemirror\bundles\CodeMirrorAsset',
        'panix\ext\codemirror\bundles\CodeMirrorSearchAsset',
    ];
}
