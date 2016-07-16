<?php

namespace yiiassets\pdfjs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

/**
 * PdfJs Widget
 * @author Sathit Seethaphon <dixonsatit@gmail.com>
 */
class PdfJs extends \yii\base\Widget
{
    public $url;

    public $options=['style'=>'border:solid 2px #736d6d;width:100%;min-height:500px;'];

    public function run()
    {
      return $this->render('viewer',[
        'options'=>$this->options
      ]);
    }
}
