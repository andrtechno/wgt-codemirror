<?php

namespace panix\engine\assets\codemirror;

use panix\engine\Html;
use Yii;
use yii\helpers\Json;
use yii\web\HttpException;
use yii\widgets\InputWidget;

class CodeMirrorTextArea extends InputWidget
{
    public $clientOptions = [];
    public $mode;
    public $base = 'text/html';
    public $theme = 'idea';
    public function run()
    {


        $view = $this->getView();
        $asset = CodeMirrorAsset::register($view);
        if(file_exists($asset->basePath.'/theme/'.$this->theme.'.css')){
            $view->registerCssFile($asset->baseUrl.'/theme/'.$this->theme.'.css');
        }else{
            throw new HttpException(500,'codemirror theme not found.');
        }


        CodeMirrorTwigAsset::register($view);
        CodeMirrorMultiplexAsset::register($view);
        CodeMirrorXmlAsset::register($view);
        if($this->mode){
            $this->clientOptions['mode']['name']=$this->mode;
        }

        if(!isset($this->clientOptions['lineNumbers'])){
            $this->clientOptions['lineNumbers']=true;
        }
        if(!isset($this->clientOptions['styleActiveLine'])){
            $this->clientOptions['styleActiveLine']=true;
        }
        if(!isset($this->clientOptions['matchBrackets'])){
            $this->clientOptions['matchBrackets']=true;
        }
        if(!isset($this->clientOptions['theme'])){
            $this->clientOptions['theme']=$this->theme;
        }

        $this->clientOptions['mode']['base']=$this->base;
        $clientOptions = Json::encode($this->clientOptions); //{mode:{name: "twig", base: "text/html"}
        $js = <<<EOP
        
      var editor = CodeMirror.fromTextArea(document.getElementById("{$this->options['id']}"), $clientOptions);

EOP;
        $view->registerJs($js);


        if ($this->hasModel())
            return Html::activeTextarea($this->model, $this->attribute, $this->options);
        else
            return Html::textarea($this->name, $this->value, $this->options);
    }

}