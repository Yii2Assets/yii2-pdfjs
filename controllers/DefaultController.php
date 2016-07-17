<?php

namespace yii2assets\pdfjs\controllers;

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
        return $this->render('index');
    }
}
