<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url
?>
<div class="alert alert-success navbar-fixed-top" style="background: #0f8888">
    <div class="container" style="margin-top: -7px">
        สำนักงานสาธารณสุขอำเภอท่าสองยาง
        <?php
        if (Yii::$app->user->isGuest) {
            ?>
            <a href="<?= Url::to(['/site/login']) ?>" class="pull-right" style="text-decoration: none"><i class="glyphicon glyphicon-log-in"></i> Sign In</a>
            <?php
        } else {
            ?>
            <a href="<?= Url::to(['/site/logout']) ?>" class="pull-right" style="text-decoration: none" data-method='POST'><i class="glyphicon glyphicon-log-out"></i> Sign Out(<?= Yii::$app->user->identity->username; ?>)</a>
            <?php
        }
        ?>
    </div>
</div>

<?php
Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])
?>

<?php
NavBar::begin([
    'brandLabel' => '<p><img src=' . Yii::getAlias('@web') . '/img/logo.png width="50px" style="margin-top: -10px"></p>',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-success navbar-fixed-top',
        'style' => 'margin-top: 35px',
    ],
]);

$about_items[] = ['label' => '<i class="fa fa-tags fa-lg"></i> ประวัติความเป็นมา', 'url' => ['site/history']];
$about_items[] = ['label' => '<i class="fa fa-tags fa-lg"></i> พันธกิจ', 'url' => ['site/mission']];
$about_items[] = ['label' => '<i class="fa fa-tags fa-lg"></i> บุคลากร', 'url' => ['site/personal']];


$menu_items[] = ['label' => '<i class="fa fa-home fa-lg"></i> หน้าแรก', 'url' => ['/site/index']];
$menu_items[] = ['label' => '<i class="fa fa-bookmark fa-lg"></i> เกี่ยวกับสำนักงาน', 'items' => $about_items];


if (!Yii::$app->user->isGuest) {
    //if (Yii::$app->user->identity->role == '1') {
        $menu_items[] = ['label' => '<i class="fa fa-lock fa-lg"></i> ข่าวสาร/ประชาสัมพันธ์', 'url' => ['/site/admin']];
    //}
}

$menu_items[] = ['label' => '<i class="fa fa-phone-square fa-lg"></i> ติดต่อ', 'url' => ['/site/contact']];
//$menu_items[] = ['label' => '<i class="fa fa-info-circle fa-lg"></i> เกี่ยวกับ', 'url' => ['/site/dev']];

echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-left'],
    'encodeLabels' => false,
    'items' => [['label' => 'สสอ.ท่าสองยาง']],
]);

echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'encodeLabels' => false,
    'items' => $menu_items,
]);
NavBar::end();
?>

<?php
Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])
?>
