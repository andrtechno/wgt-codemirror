<?php

namespace panix\ext\codemirror\bundles;

use panix\ext\codemirror\CodeMirrorBundle;

/**
 * Class CodeMirrorXmlAsset
 * @package panix\engine\assets
 */
class CodeMirrorMultiplexAsset extends CodeMirrorBundle
{

    public $js = [
        'addon/mode/multiplex.js',
    ];

    public $depends = [
        'panix\ext\codemirror\bundles\CodeMirrorAsset',
    ];
}
