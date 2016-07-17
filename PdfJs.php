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
    public $url=null;

    public $width = '100%';

    public $height = '500px';

    public $options= [];

    public function run()
    {
      if(!array_key_exists('style',$this->options)){
        $this->options['style'] = 'border:solid 2px #736d6d; width:'.$this->width.'; height:'.$this->height.';';
      }
      return $this->render('viewer',[
        'options' => $this->options,
        'url' => $this->url
      ]);
    }
}
