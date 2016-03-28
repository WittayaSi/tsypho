<?php
/* @var $this \yii\web\View */
/* @var $content string */

//use Yii;
use yii\helpers\Html;
use app\assets\MaterialAsset;
use yii\widgets\Breadcrumbs;

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
        <div class="container">
            <?=
            Breadcrumbs::widget([
                'encodeLabels' => false,
                'homeLink' => [
                    'label' => '<i class="fa fa-home"></i> หน้าแรก',
                    'url' => Yii::$app->homeUrl,
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
        </div>
        <div class="container-fluid">
            <div style="margin-top: -10px;margin-bottom: 0px">
                <?php require_once('content.php') ?>  
            </div>
        </div>

        <footer class="navbar navbar-default" style="margin-bottom: 0px;height: 200px">

            <div class="container" style="margin-top: 20px">
                <p style="text-align: center">401 หมู่ 2 ตำบลแม่ต้าน อำเภอท่าสองยาง จังหวัดตาก 63150</p>
                <p style="text-align: center">055-589116</p>
                <p style="text-align: center">ลิขสิทธิ์ &copy; ๒๕๕๙ <br>งานเทคโนโลยีสารสนเทศสำนักงานสาธารณสุขอำเภอท่าสองยาง</p>
                <hr>
                <p style="text-align: center;font-size: 10px">&copy; Create by || Mr.Wittaya Siriporn</p>
            </div>
            <div class="pull-right">
                <!-- Histats.com  START  (standard)-->
                <script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
                <a href="http://www.histats.com" target="_blank" title="hit tracker" ><script  type="text/javascript" >
                    try {
                        Histats.start(1, 3389948, 4, 408, 270, 55, "00011111");
                        Histats.track_hits();
                    } catch (err) {
                    }
                    ;
                    </script></a>
                <noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3389948&101" alt="hit tracker" border="0"></a></noscript>
                <!-- Histats.com  END  -->
            </div>
        </footer>

        <a class="back-to-top to-top" id="back-to-top" href="#">
            <i class="fa fa-angle-up"></i>
        </a>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
