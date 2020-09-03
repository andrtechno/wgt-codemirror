<?php

namespace panix\engine\assets\codemirror;

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
        'panix\engine\assets\codemirror\CodeMirrorAsset',
    ];
}
