<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
$url =  Url::to(['/pdfjs','file'=>Url::to($url)]);
$this->registerJs('
  $("#pdfjs-form-'.$id.'").submit();
  $("#pdfjs-'.$id.'").css("background-color","#404040");
');
?>

<?php $form = ActiveForm::begin([
    'id'=>'pdfjs-form-'.$id,
    'options' => [
      'class' => 'form-horizontal',
      'target'=> 'pdfjs-'.$id
    ],
    'action'=>$url
]) ?>
<?php foreach ($buttons as $btn => $value):?>
<?= $value == false ? Html::hiddenInput($btn,0) : null;?>
<?php endforeach; ?>
<?php ActiveForm::end() ?>

 <?= Html::tag('iframe','',ArrayHelper::merge([
        'id'=>'pdfjs-'.$id,
        'name'=>'pdfjs-'.$id
     ],$options));
  ?>
