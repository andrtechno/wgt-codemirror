<?php

namespace panix\ext\codemirror\bundles;

use panix\ext\codemirror\CodeMirrorBundle;

/**
 * Class CodeMirrorDialogAsset
 * @package panix\engine\assets
 */
class CodeMirrorDialogAsset extends CodeMirrorBundle
{

    public $js = [
        'addon/dialog/dialog.js',
    ];
    public $css = [
        'addon/dialog/dialog.css',
    ];

    public $depends = [
        'panix\ext\codemirror\bundles\CodeMirrorAsset',
    ];
}
