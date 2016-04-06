<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
$this->context->layout = 'main-blank';
?>
<!-- Main content -->
<section class="content">

    <div class="error-page">
        <h2 class="headline text-info"><i class="fa fa-warning text-yellow"></i></h2>

        <div class="error-content">
            <h3><?= $name ?></h3>

            <p>
                <?= nl2br(Html::encode($message)) ?>
            </p>
            <p>
                <?= Yii::t('app', 'The above error occurred while the Web server was processing your request.
                Please contact us if you think this is a server error. Thank you.
                Meanwhile, you may <a href="{homeUrl}">return to dashboard</a> or try using the search
                form.', [
                    'homeUrl' => Yii::$app->homeUrl,
                ]); ?>
            </p>

        </div>
    </div>

</section>
