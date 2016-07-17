Yii2 PDFJS
==========
Yii2 PDFJS bundle of [PDF.js](https://mozilla.github.io/pdf.js/) plugin. PDF.js Portable Document Format (PDF) viewer

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2assets/yii2-pdfjs "*"
```

or add

```
"yii2assets/yii2-pdfjs": "*"
```

to the require section of your `composer.json` file.

Config
-----

```php
'modules'=>[
  'pdfjs' => [
       'class' => '\yii2assets\pdfjs\Module',
   ],
],
```

Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use yii\helpers\Url;
<?= \yii2assets\pdfjs\PdfJs::widget([
  'url'=> Url::base().'/downloads/pdfjs.pdf'
]); ?>
```

use in modal

```php
use yii\bootstrap\Modal;
use yii\helpers\Url;

Modal::begin([
    'header' => '<h2>Hello world</h2>',
    'toggleButton' => ['label' => 'click me'],
]);

echo \yii2assets\pdfjs\PdfJs::widget([
  'url' => Url::base().'/downloads/manualStart_up.pdf'
]);

Modal::end();

```

use in fullscreen

```
http://app-url/index.php?r=pdfjs&file=download/pdfjs.pdf
```
