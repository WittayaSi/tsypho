<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'รายละเอียด';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container well">
    <h3><i class="fa fa-navicon"></i> รายละเอียด ประชาสัมพันธ์ </h3>
    <div class="progress">
        <div class="progress-bar"></div>
    </div>

    <div>
        <h4>เรื่อง :: <?= $model['title'] ?></h4><br>

        <div class="row">
            <center>
                <img class="col-sm-8 col-sm-offset-2" src="<?= Yii::getAlias('@web') ?>/img/uploads/<?= $model['pic_name'] ?>" height="50%" width="50%">
            </center>
        </div>
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
            </div>
        </div>

    </div>
    <hr>
    <div class="pull-right">
        <i class="fa fa-calendar"></i> <?= $model['created_at'] ?>
    </div>
    <br>
</div>
