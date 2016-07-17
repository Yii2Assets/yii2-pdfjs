Yii2 PDFJS
==========
Yii2 PDFJS bundle of [PDF.js](https://mozilla.github.io/pdf.js/) plugin. PDF.js Portable Document Format (PDF) viewer

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yiiassets/yii2-pdfjs "*"
```

or add

```
"yiiassets/yii2-pdfjs": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use yii\helpers\Url;
<?= \dixonsatit\pdfjs\PdfJs::widget([
  'url'=> Url::base().'/downloads/pdfjs.pdf'
]); ?>```
