<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= yii\helpers\Html::img('@web/img/user-icon.png',['class'=>'img-circle']);?>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->fullname ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    //['label' => Yii::t('app', 'Action Menu'), 'options' => ['class' => 'header']],
                    //['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    //['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => Yii::t('app', 'Access Menu'),
                        'icon' => 'fa fa-rocket',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'Dashboard'), 'icon' => 'fa fa-dashboard', 'url' => ['/user/index'],],
                            ['label' => Yii::t('app', 'E-Status'), 'icon' => 'fa fa-search', 'url' => ['/estatus/index'],],
                            ['label' => Yii::t('app', 'Application List'), 'icon' => 'fa fa-flash', 'url' => ['/application/index'],],
                            ['label' => Yii::t('app', 'Payment Receipt'), 'icon' => 'fa fa-dollar', 'url' => ['/receipt/index'],],
                            ['label' => Yii::t('app', 'E-Promosi'), 'icon' => 'fa fa-bullhorn', 'url' => ['/epromosi/index'],],
                            ['label' => Yii::t('app', 'Withdrawal'), 'icon' => 'fa fa-share', 'url' => ['/withdrawal/index'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'User Account Menu'),
                        'icon' => 'fa fa-user-secret',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'Profile'), 'icon' => 'fa fa-user', 'url' => ['/user/profile'],],
                            ['label' => Yii::t('app', 'Change Password'), 'icon' => 'fa fa-lock', 'url' => ['/user/password'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
