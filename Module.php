<?php

namespace yii2assets\pdfjs;

/**
 * pdfjs module definition class
 * @author Sathit Seethaphon <dixonsatit@gmail.com>
 */
class Module extends \yii\base\Module
{
    public $buttons = [];
    public $waterMark = false;

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'yii2assets\pdfjs\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $waterMarkDefault = [
          'text'=>'',
          'alpha'=>'0.5',
          'color'=>'red'
        ];

        if($this->waterMark!==false && is_array($this->waterMark)){
          $this->waterMark = array_merge($waterMarkDefault,$this->waterMark);
        }else{
          $this->waterMark = $waterMarkDefault;
        }


        $this->buttons = array_merge([
          'presentationMode' => true,
          'openFile' => true,
          'print' => true,
          'download' => true,
          'viewBookmark' => true,
          'secondaryToolbarToggle'=> true
        ], $this->buttons);

        // custom initialization code goes here
    }
}
