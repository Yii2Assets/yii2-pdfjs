<?php

namespace yii2assets\pdfjs;
use Yii;
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

    public $options = [];

    public $buttons = [];

    public function init()
    {
        parent::init();
        $buttons = Yii::$app->getModule('pdfjs')->buttons;
        $this->buttons = array_merge($buttons,$this->buttons);
        $this->getView()->registerJsFile(Yii::$app->assetManager->getPublishedUrl('@yii2assets/pdfjs/assets').'/yii2-pdfjs.js');
    }

    public function run()
    {
      if(!array_key_exists('style',$this->options)){
        $this->options['style'] = 'border:solid 2px #404040; width:'.$this->width.'; height:'.$this->height.';';
      }
      return $this->render('viewer',[
        'options' => $this->options,
        'url' => $this->url,
        'buttons'=>$this->buttons,
        'id'=>$this->id
      ]);
    }
}
