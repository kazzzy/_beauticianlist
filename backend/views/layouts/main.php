<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Collapse;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div id="wrapper">
        <?php
            NavBar::begin([
                'brandLabel' => 'Administration panel',
                'brandUrl' => Yii::$app->homeUrl,
                'renderInnerContainer' => false,
                'containerOptions' =>[
                    'class' => 'navbar-header pull-right'
                ],
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                    'role' => 'navigation'
                ],
            ]);
            $menuItems = [];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => '<i class="fa fa-fw fa-user"></i>'.Yii::$app->user->identity->username,
                    'dropDownCaret' => '<b class="caret"></b>',
                    'items' => [
                        ['label' => '<i class="fa fa-fw fa-user"></i> Profile', 'url' => '#'],
                        [
                            'label' => '<i class="fa fa-fw fa-power-off"></i> Log Out',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ],
                    ],
                ];
            }


            echo Nav::widget([
                'options' => ['class' => 'nav navbar-right top-nav'],
                'items' => $menuItems,
                'encodeLabels' => false,
            ]);

            $sideMenuItems = [
                [
                    'label' => '<i class="fa fa-fw fa-dashboard"></i> Dashboard',
                    'url' => ['/site/index'],
                ],
                [
                    'label' => '<i class="fa fa-fw fa-table"></i> Manage Technician',
                    'url' => ['/technician/index'],
                ],
                [
                    'label' => '<i class="fa fa-fw fa-table"></i> Manage Consumer',
                    'url' => ['/consumer/index'],
                ],
                [
                    'label' => '<i class="fa fa-fw fa-wrench"></i> Admin Settings',
                    'url' => ['/site/settings'],
                ]

            ];

            if (!Yii::$app->user->isGuest){
                echo Nav::widget([
                    'options' => ['class' => 'nav navbar-nav side-nav'],
                    'items' => $sideMenuItems,
                    'encodeLabels' => false,
                ]);
            }

            NavBar::end();
        ?>
        <?= $content ?>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
