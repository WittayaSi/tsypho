<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container well">
    <h3><i class="fa fa-info-circle fa-lg"></i> จัดการระบบ</h3>
    <div class="progress">
        <div class="progress-bar"></div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="brn btn-danger btn-lg" style="text-align: center">
                <h2><i class="glyphicon glyphicon-user"></i> จัดการผู้ใช้</h2>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="brn btn-success btn-lg" style="text-align: center">
                <a href="<?= Url::to(['information/index']) ?>" style="text-decoration: none"><font color="white">
                    <h2><i class="glyphicon glyphicon-bullhorn"></i> ประชาสัมพันธ์</h2>
                </a>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="brn btn-info btn-lg" style="text-align: center">
                <a href="<?= Url::to(['news/index']) ?>" style="text-decoration: none"><font color="white">
                    <h2><i class="glyphicon glyphicon-exclamation-sign"></i> ข่าวสาร</h2>
                </a>
            </div>
        </div>
    </div>
    <br>
    <!-- 2nd row -->
    <div class="row">
        <div class="col-sm-4">
            <div class="brn btn-success btn-lg" style="text-align: center">
                <a href="<?= Url::to(['express-news/index']) ?>" style="text-decoration: none"><font color="white">
                    <h2><i class="glyphicon glyphicon-bullhorn"></i> ข่าวด่วน</h2>
                </a>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="brn btn-info btn-lg" style="text-align: center">
                <a href="<?= Url::to(['news/index']) ?>" style="text-decoration: none"><font color="white">
                    <h2><i class="glyphicon glyphicon-exclamation-sign"></i> ข่าวสาร</h2>
                </a>
            </div>
        </div>
    </div>

<!--    <code><?= __FILE__ ?></code>-->
</div>
