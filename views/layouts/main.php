<?php
/* @var $this \yii\web\View */
/* @var $content string */

//use Yii;
use yii\helpers\Html;
use app\assets\MaterialAsset;

//use app\assets\AppAsset;
//use app\assets\LeafmasterAsset;
//AppAsset::register($this);
MaterialAsset::register($this);
//LeafmasterAsset::register($this);
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
        <div class="container-fluid">
            <?php require_once('navigation.php') ?> 
        </div>
        <?php require_once('image_slide.php') ?>
        <?php require_once('notification.php') ?>
        <div class="container-fluid">
            <div style="margin-top: -15px;margin-bottom: 100px">
                <?php require_once('content.php') ?>  
            </div>
        </div>

        <footer class="navbar navbar-default" style="margin-bottom: 0px;height: 200px">
            <div class="container" style="margin-top: 20px">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
