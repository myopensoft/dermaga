<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">DMG</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?= yii\helpers\Html::img('@web/img/user-icon.png',['class'=>'user-image']);?>
                        <span class="hidden-xs"><?=Yii::$app->user->identity->fullname ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?= yii\helpers\Html::img('@web/img/user-icon.png',['class'=>'img-circle']);?>

                            <p>
                                <?=Yii::$app->user->identity->fullname ?>
                                <small><?= Yii::t('app','Last Login: ') . Yii::$app->user->identity->lastlogin ?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!--
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </li>
                        -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <?= Html::a(
                                    Yii::t('app', 'Profile'),
                                    ['/user/profile'],
                                    ['class' => 'btn btn-info btn-flat']
                                ) ?>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    Yii::t('app', 'Sign out'),
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-warning btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>
