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
                        'label' => Yii::t('app', 'Action Menu'),
                        'icon' => 'fa fa-rocket',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'Dashboard'), 'icon' => 'fa fa-dashboard', 'url' => ['/action/index'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Administration Menu'),
                        'icon' => 'fa fa-user-secret',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'Dashboard'), 'icon' => 'fa fa-dashboard', 'url' => ['/site/index'],],
                            [
                                'label' => Yii::t('app', 'Manage User'),
                                'icon' => 'fa fa-users',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('app', 'List Users'), 'icon' => 'fa fa-circle-o', 'url' => ['/user/index'],],
                                    ['label' => Yii::t('app', 'New User'), 'icon' => 'fa fa-user-plus', 'url' => ['/user/create'],],
                                ],
                            ],
                            [
                                'label' => Yii::t('app', 'Manage Role'),
                                'icon' => 'fa fa-key',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('app', 'List Roles'), 'icon' => 'fa fa-circle-o', 'url' => ['/role/index'],],
                                    ['label' => Yii::t('app', 'New Role'), 'icon' => 'fa fa-plus-square-o', 'url' => ['/role/create'],],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
