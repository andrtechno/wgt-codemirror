<?php

namespace panix\ext\codemirror\bundles;

use panix\ext\codemirror\CodeMirrorBundle;

/**
 * Class CodeMirrorXmlAsset
 * @package panix\engine\assets
 */
class CodeMirrorXmlAsset extends CodeMirrorBundle
{

    public $js = [
        'mode/xml/xml.js',
    ];

    public $depends = [
        'panix\ext\codemirror\bundles\CodeMirrorAsset',
    ];
}
