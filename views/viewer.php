<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
?>

 <?= Html::tag('iframe','',ArrayHelper::merge([
        'src'=>Url::to(['/pdfjs','file'=>'pwd.pdf'])
     ],$options));
  ?>
