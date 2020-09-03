Widget CodeMirror
===========
Widget for Yii Framework 2.0 to use [CodeMirror](https://codemirror.net/)

[![Latest Stable Version](https://poser.pugx.org/panix/wgt-codemirror/v/stable)](https://packagist.org/packages/panix/wgt-codemirror)
[![Total Downloads](https://poser.pugx.org/panix/wgt-codemirror/downloads)](https://packagist.org/packages/panix/wgt-codemirror)
[![Monthly Downloads](https://poser.pugx.org/panix/wgt-codemirror/d/monthly)](https://packagist.org/packages/panix/wgt-codemirror)
[![Daily Downloads](https://poser.pugx.org/panix/wgt-codemirror/d/daily)](https://packagist.org/packages/panix/wgt-codemirror)
[![Latest Unstable Version](https://poser.pugx.org/panix/wgt-codemirror/v/unstable)](https://packagist.org/packages/panix/wgt-codemirror)
[![License](https://poser.pugx.org/panix/wgt-codemirror/license)](https://packagist.org/packages/panix/wgt-codemirror)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer require --prefer-dist panix/wgt-codemirror "*"
```

or add

```
"panix/wgt-codemirror": "*"
```

to the require section of your `composer.json` file.



### Configuration

| Опция  | Тип | Описание |
| --- | :---: | --- |
| `theme` | string | Тема |
| `base` | string | text/html |


### Examaple
```php
<?php
    echo $form->field($model, 'code')->widget(CodeMirrorTextArea::class, [
        // options
    ]);
 ?>

