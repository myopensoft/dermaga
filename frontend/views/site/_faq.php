<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= Html::encode($model->question) ?></h3>
    </div>
    <div class="panel-body">
    <?= HtmlPurifier::process($model->answer) ?> 
    </div>
</div>