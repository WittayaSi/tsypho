<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container well">
    <div>
        <h3><i class="fa fa-database"></i> กิจกรรม</h3>
    </div> 
    <div class="progress">
        <div class="progress-bar"></div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <img src="<?= Yii::getAlias('@web') ?>/img/img_test_new.jpg" style="width: 100%;height: 100%">
            <div class="blog-date">
                <p class="day">7</p>
                <p class="monthyear">มี.ค.2559</p>
            </div>
            <p>สสจ.ตาก จัดประชุมการตรวจสอบข้อมูลบัญชีของหน่</p>
            <p class="pull-right"><a href="#" class="btn btn-success btn-xs">อ่าน... >></a></p>
        </div>
        <div class="col-sm-3">
            <img src="<?= Yii::getAlias('@web') ?>/img/img_test_new.jpg" style="width: 100%;height: 100%">
            <div class="blog-date">
                <p class="day">7</p>
                <p class="monthyear">มี.ค.2559</p>
            </div>
            <p>สสจ.ตาก จัดประชุมการตรวจสอบข้อมูลบัญชีของหน่วยบริการในสำนักงานสาธารณสุขจังหวัดตาก</p>
            <p class="pull-right"><a href="#" class="btn btn-success btn-xs">อ่าน... >></a></p>
        </div>
        <div class="col-sm-3">
            <img src="<?= Yii::getAlias('@web') ?>/img/img_test_new.jpg" style="width: 100%;height: 100%">
            <div class="blog-date">
                <p class="day">7</p>
                <p class="monthyear">มี.ค.2559</p>
            </div>
            <p>สสจ.ตาก จัดประชุมการตรวจสอบข้อมูลบัญชีของหน่วยบริการในสำนักงานสาธารณสุขจังหวัดตาก</p>
            <p class="pull-right"><a href="#" class="btn btn-success btn-xs">อ่าน... >></a></p>
        </div>
        <div class="col-sm-3">
            <img src="<?= Yii::getAlias('@web') ?>/img/img_test_new.jpg" style="width: 100%;height: 100%">
            <div class="blog-date">
                <p class="day">7</p>
                <p class="monthyear">มี.ค.2559</p>
            </div>
            <p>สสจ.ตาก จัดประชุมการตรวจสอบข้อมูลบัญชีของหน่วยบริการในสำนักงานสาธารณสุขจังหวัดตาก</p>
            <p class="pull-right"><a href="#" class="btn btn-success btn-xs">อ่าน... >></a></p>
        </div>
    </div>
</div>
