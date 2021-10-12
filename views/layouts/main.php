<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'ReserveCar Samrong Hospital',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    //['label' => 'Home', 'url' => ['/site/index']],
                    // ['label' => 'ระบบจองรถศูนย์ยานพาหนะ', 'url' => ['/event/index'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'ระบบจองรถศูนย์ยานพาหนะ', 'url' => ['/event/index']],
             //       ['label' => 'รายละเอียดการจอง', 'url' => ['/event/view']],
            //        [
           // 'label' => 'OPD',
            //'items' => [
                 ['label' => 'รายละเอียดการจองรถ', 'url' => ['/eventreport/index'], 'visible' => !Yii::$app->user->isGuest],
             //    ['label' => 'Adj RW', 'url' => 'http://localhost/datacenter/web/index.php?r=chart%2Fchart7'],
             //    ['label' => 'Refer Out', 'url' => 'http://localhost/datacenter/web/index.php?r=chart%2Fchart5'],
             //    ['label' => 'Refer In', 'url' => 'http://localhost/datacenter/web/index.php?r=chart%2Fchart11'],
             //    ['label' => '10 อันดับ Refer รายโรค', 'url' => 'http://localhost/datacenter/web/index.php?r=chart%2Fchart2'],
             //    ['label' => '10 อันดับโรค OPD', 'url' => 'http://localhost/datacenter/web/index.php?r=chart%2Fchart6'],
             //    ['label' => 'จำนวนผู้ป่วย เวร BD (16.00-20.00)', 'url' => 'http://localhost/datacenter/web/index.php?r=chart%2Fchart8'],
             //    ['label' => 'OP Visit', 'url' => 'http://localhost/datacenter/web/index.php?r=chart%2Fchart14'],
                 //'<li class="divider"></li>',
                 //'<li class="dropdown-header">Dropdown Header</li>',
                 //['label' => 'Level 1 - Dropdown B', 'url' => '#'],
            //],
       // ],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();

        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="text-center">
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        ออกแบบและพัฒนาโดย นายภูวนารถ อนุกูล นักวิชาการคอมพิวเตอร์ปฏิบัติการ โรงพยาบาลสำโรง  &copy;
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
