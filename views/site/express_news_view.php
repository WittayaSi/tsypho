<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'ประกาศด่วน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container well">
    <h3><i class="fa fa-navicon"></i> ประกาศด่วน </h3>
    <div class="progress">
        <div class="progress-bar"></div>
    </div>

    <div>
        <h4>เรื่อง :: <?= $model['title'] ?></h4><br>
        <center>
            <?php
            if (!empty($model['pic_name'])) {
                ?>
                <img src="<?= Yii::getAlias('@web') ?>/img/uploads/express_news/<?= $model['pic_name'] ?>" height="50%" width="50%">
                <?php
            }
            ?>
        </center>
        <br>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <?php
                $str = $model['detial'];
                $detial_arr[] = explode("\n", $str)
                ?>
                <?php
                $count = count($detial_arr['0']);
                //print_r($detial_arr);
                //return;
                for ($i = 0; $i < $count; $i++) {
                    $text = $detial_arr['0'][$i];
                    if ($i == 0) {
                        echo "<p style='text-indent: 50px'>" . $text . "</p>";
                    } else {
                        echo "<p>" . $text . "</p>";
                    }
                }
                ?>
                <br>
                เอกสารที่เกี่ยวข้อง : : 
                <a href="<?= Yii::getAlias('@web') ?>/img/uploads/express_news/<?= $model['link'] ?>">
                <?php
                if($model['link']){
                    echo $model['link'];
                }
                ?>
                </a>
            </div>
        </div>

    </div>
    <hr>
    <div class="pull-right">
        <i class="fa fa-calendar"></i> <?= $model['created_at'] ?>
    </div>
    <br>
</div>
