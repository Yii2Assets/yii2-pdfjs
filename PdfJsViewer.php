<?php

namespace yiiassets\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\base\Widget;
use yii\helpers\Html;

class PdfJsViewer extends Widget {

    public $url;

    public function init()
  	{
      	parent::init();
  	}

     public function run(){

      return Html::tag('iframe','',[
        'src'=>$this->url
      ]);

    }
}
