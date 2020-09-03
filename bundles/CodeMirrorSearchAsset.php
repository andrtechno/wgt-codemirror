<?php

namespace panix\ext\codemirror\bundles;

use panix\ext\codemirror\CodeMirrorBundle;

/**
 * Class CodeMirrorSearchAsset
 * @package panix\engine\assets
 */
class CodeMirrorSearchAsset extends CodeMirrorBundle
{

    public $js = [
        'addon/search/search.js',
        'addon/search/searchcursor.js',
        'addon/search/jump-to-line.js'

    ];

    public $depends = [
        'panix\ext\codemirror\bundles\CodeMirrorAsset',
        'panix\ext\codemirror\bundles\CodeMirrorDialogAsset',
    ];
}
