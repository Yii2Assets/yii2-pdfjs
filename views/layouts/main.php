<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
use yii2assets\pdfjs\PdfJsAsset;
$bundle = PdfJsAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--
Copyright 2012 Mozilla Foundation

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

Adobe CMap resources are covered by their own copyright but the same license:

    Copyright 1990-2015 Adobe Systems Incorporated.

See https://github.com/adobe-type-tools/cmap-resources
-->
<html dir="ltr" mozdisallowselectionprint moznomarginboxes>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google" content="notranslate">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PDF.js viewer</title>
    <!-- This snippet is used in production (included from viewer.html) -->
    <link rel="resource" type="application/l10n" href="<?=$bundle->baseUrl?>/web/locale/locale.properties"/>
    <script type="text/javascript">
    var WORKER_URL = "<?=$bundle->baseUrl?>/build/pdf.worker.js";
    </script>
<?php $this->head() ?>
</head>
<body tabindex="1" class="loadingInProgress">
<?php $this->beginBody() ?>
  <?=$content?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
