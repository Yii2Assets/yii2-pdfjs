<?php

namespace yiiassets\pdfjs;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * PdfJs Asset bundle
 * @author Sathit Seethaphon <dixonsatit@gmail.com>
 */
class PdfJsAsset extends AssetBundle
{
    public $sourcePath = '@yiiassets/pdfjs/assets';

    public $js = [
        'web/compatibility.js',
        'web/l10n.js',
        'build/pdf.js',
        'web/debugger.js',
        'web/viewer.js'
    ];

    public $jsOptions  = [
      'position'=> View::POS_HEAD
    ];

    public $css = [
        'web/viewer.css'
    ];
}
 ?>
