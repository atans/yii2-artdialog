Yii2 artdialog asset
===================
[Artdialog](https://github.com/aui/artDialog) for yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer atans/yii2-artdialog "*"
```

or add

```
"atans/yii2-artdialog": "*"
```

to the require section of your `composer.json` file.


Usage
-----

[Artdialog Official Docs](http://aui.github.io/artDialog/doc/index.html)

```php
<?php
// views/site/index.php

use atans\artdialog\ArtdialogAsset;
  
ArtdialogAsset::register($this);

$js = <<< JS
var d = dialog({
    title: "Yii2 Artdialog",
    content: "Hello World!"
}).show();
JS;

// register your javascript
$this->registerJs($js);