<?php

namespace yii2assets\pdfjs\controllers;

use Yii;
use yii\web\Controller;

/**
 * Default controller for the `pdfjs` module
 * @author Sathit Seethaphon <dixonsatit@gmail.com>
 */
class DefaultController extends Controller
{
    public $layout = 'main';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $buttons = Yii::$app->getModule('pdfjs')->buttons;
        $waterMark = Yii::$app->getModule('pdfjs')->waterMark;
        if(Yii::$app->request->getIsPost()){

          $widgitButtonConfig =  Yii::$app->request->post();
          if(isset(Yii::$app->request->csrfParam)){
            unset($widgitButtonConfig[Yii::$app->request->csrfParam]);
          }

          foreach ($widgitButtonConfig as $key => $value) {
            $widgitButtonConfig[$key] = trim($value) == '0' ? false:true;
          }
          $buttons = array_merge($buttons,$widgitButtonConfig);
        }

        return $this->render('index',[
          'buttons'=>$buttons,
          'waterMark'=>$waterMark
        ]);
    }
}
