<?php

namespace panix\engine\assets\codemirror;

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
        'panix\engine\assets\codemirror\CodeMirrorAsset',
    ];
}
