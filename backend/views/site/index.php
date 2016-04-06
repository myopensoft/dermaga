<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Dashboard');
?>
<div class="site-index">
<pre>
<?php print_r(Yii::$app->user->identity->roles); ?>
</pre>
</div>
