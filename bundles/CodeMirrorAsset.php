<?php

namespace panix\ext\codemirror\bundles;

/**
 * Class CodeMirrorAsset
 * @package panix\engine\assets
 */
class CodeMirrorAsset extends CodeMirrorBundle
{

    public $js = [
        'lib/codemirror.js',
        //'mode/htmlmixed/htmlmixed.js',
        //'mode/clike/clike.js',
        'addon/selection/active-line.js'
    ];

    public $css = [
        'lib/codemirror.css',
    ];
}
