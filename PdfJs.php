<?php

namespace yiiassets\pdfjs;

/**
 * PdfJs Widget
 * @author Sathit Seethaphon <dixonsatit@gmail.com>
 */
class PdfJs extends \yii\base\Widget
{
    public function run()
    {
        PdfJsAsset::register($this->getView());
        return $this->render('viewer');
    }
}
