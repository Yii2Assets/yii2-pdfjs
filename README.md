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


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use yii\helpers\Url;
<?= \yii2assets\pdfjs\PdfJs::widget([
  'url'=> Url::base().'/downloads/pdfjs.pdf'
]); ?>```
