<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use app\models\Information;

$this->title = 'สำนักงานสาธารณสุขอำเภอท่าสองยาง';
?>


<div class="container well fadeInBlock">
    <div class="row">
        <div class="col-sm-3">
            <?php require_once('sidebar.php') ?>
        </div>
        <div class="col-sm-9">
            <div class="site-index">

                <div style="text-align: center">
                    <h3><i class="fa fa-tags"></i> แจ้งด่วน</h3>
                </div> 
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <?php
                $data = Information::find()->where(['id' => Information::find()->max('id')])->one();
                ($data['pic_name'] != NULL) ? $img_name = $data['pic_name'] : $img_name = 'noimage.jpg';
                ?>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="" id="info">
                            <center>
                                <img src="<?= Yii::getAlias('@web') ?>/img/uploads/<?= $img_name ?>" height="65%" width="65%">
                            </center>
                            <div align="right">
                                <a class="btn btn-success btn-block btn-lg" href="<?= Url::to(['/site/information-view', 'id' => $data['id']]) ?>" style="margin-bottom: -10px">อ่าน..... &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container well fadeInBlock" style="margin-top: -10px">

    <div class="row">
        <!-- Start Activity -->

        <div class="col-sm-6">
            <div>
                <h3><i class="fa fa-users"></i> กิจกรรม</h3>
            </div> 
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-6 col-lg-6">

                    <img src="<?= Yii::getAlias('@web') ?>/img/img_test_new.jpg" style="width: 100%;height: 100%">
                    <div class="blog-date" style="height: 30%;width: 30%">
                        <p class="day">7</p>
                        <p class="monthyear">มี.ค.2559</p>
                    </div>
                    <p>สสจ.ตาก จัดประชุมการตรวจสอบข้อมูลบัญชีของหน่</p>
                    <p class="pull-right"><a href="#" class="btn btn-success btn-xs">อ่าน... >></a></p>
                </div>
                <div class="ccol-sm-6 col-xs-6 col-lg-6">
                    <img src="<?= Yii::getAlias('@web') ?>/img/img_test_new.jpg" style="width: 100%;height: 100%">
                    <p>สสจ.ตาก จัดประชุมการตรวจสอบข้อมูลบัญชีของหน่วยบริการในสำนักงานสาธารณสุขจังหวัดตาก</p>
                    <p class="pull-right"><a href="#" class="btn btn-success btn-xs">อ่าน... >></a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-6 col-lg-6">
                    <img src="<?= Yii::getAlias('@web') ?>/img/img_test_new.jpg" style="width: 100%;height: 100%">
                    <p>สสจ.ตาก จัดประชุมการตรวจสอบข้อมูลบัญชีของหน่วยบริการในสำนักงานสาธารณสุขจังหวัดตาก</p>
                    <p class="pull-right"><a href="#" class="btn btn-success btn-xs">อ่าน... >></a></p>
                </div>
                <div class="col-sm-6 col-xs-6 col-lg-6">
                    <img src="<?= Yii::getAlias('@web') ?>/img/img_test_new.jpg" style="width: 100%;height: 100%">
                    <p>สสจ.ตาก จัดประชุมการตรวจสอบข้อมูลบัญชีของหน่วยบริการในสำนักงานสาธารณสุขจังหวัดตาก</p>
                    <p class="pull-right"><a href="#" class="btn btn-success btn-xs">อ่าน... >></a></p>
                </div>
            </div>
        </div>
        <!-- End Activity -->

        <!-- Start news -->
        
        <?php
            
        ?>
        
        <div class="col-sm-6">
            <h3><i class="fa fa-newspaper-o"></i> ข่าวล่าสุด</h3>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <?php
            for ($i = 0; $i <= 5; $i++) {
                ?>
                <div class="font_news ">
                    <div class="media hvr-bounce-to-right" id="box-lastnews" style="margin-bottom: 10px;width: 100%">
                        <span class="pull-left">
                            <img src="<?= Yii::getAlias('@web') ?>/img/img_test_new.jpg" class="img-responsive img_news" style="max-width: 120px">
                        </span>
                        <div class="media-body" style="padding: 10px;">
                            สสจ.ตาก จัดประชุมการตรวจสอบข้อมูลบัญชีของหน่วยบริการในสำนักงานสาธารณสุขจังหวัดตาก
                        </div>
                        <font class="pull-right" style="font-size: 12px;padding-right: 5px">
                        24 มี.ค. 2559 10:17:53
                        </font>
                    </div>
                </div>
                <?php
            }
            ?>
            <a href="#" class="btn btn-success pull-right">ดูทั้งหมด <i class="fa fa-angle-double-right"></i></a>
        </div>
        <!-- End news -->
    </div>
</div>



<div class="container well fadeInBlock" style="margin-top: -10px;">
    <!-- Data Center -->

    <div>
        <h3><i class="fa fa-database"></i> งานข้อมูล</h3>
    </div> 
    <div class="progress">
        <div class="progress-bar"></div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h4>อำเภอ</h4>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>

            <div class="row">
                <div class="col-sm-offset-2 col-sm-4 col-xs-6 col-lg-4">
                    <a href="#" target="_blank" style="text-decoration: none">
                        <div class="hvr-grow-rotate" style="width: 100%">
                            <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                                <div class="img-wrapper">
                                    <img src="<?= Yii::getAlias('@web') ?>/img/database/dhdc.jpg" class="img-responsive" style="height: 100px">
                                </div>
                                <p class="detail" style="font-weight: bold;font-size: 20px; margin-top: -10px">DHDC</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 col-lg-4">
                    <a href="#" target="_blank" style="text-decoration: none">
                        <div class="hvr-grow-rotate" style="width: 100%">
                            <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                                <div class="img-wrapper">
                                    <img src="<?= Yii::getAlias('@web') ?>/img/database/qof.jpg" class="img-responsive" style="height: 100px">
                                </div>
                                <p class="detail" style="font-weight: bold;font-size: 20px; margin-top: -10px">QOF</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <h4>จังหวัด</h4>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-6 col-lg-4">
                    <a href="http://www.takis.takpho.go.th" target="_blank" style="text-decoration: none">
                        <div class="hvr-grow-rotate" style="width: 100%">
                            <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                                <div class="img-wrapper">
                                    <img src="<?= Yii::getAlias('@web') ?>/img/database/takis.jpg" class="img-responsive" style="height: 100px">
                                </div>
                                <p class="detail" style="font-weight: bold;font-size: 20px; margin-top: -10px">TAKIS</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 col-lg-4">
                    <a href="http://www.thic.takpho.go.th" target="_blank" style="text-decoration: none">
                        <div class="hvr-grow-rotate" style="width: 100%">
                            <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                                <div class="img-wrapper">
                                    <img src="<?= Yii::getAlias('@web') ?>/img/database/takic.jpg" class="img-responsive" style="height: 100px">
                                </div>
                                <p class="detail" style="font-weight: bold;font-size: 20px; margin-top: -10px">TAKIC</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 col-lg-4">
                    <a href="http://hdcservice.moph.go.th/" target="_blank" style="text-decoration: none">
                        <div class="hvr-grow-rotate" style="width: 100%">
                            <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                                <div class="img-wrapper">
                                    <img src="<?= Yii::getAlias('@web') ?>/img/database/hdc-logo.jpg" class="img-responsive" style="height: 100px">
                                </div>
                                <p class="detail" style="font-weight: bold;font-size: 20px; margin-top: -10px">HDC</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Data Center -->



<!-- Another Website -->
<div class="container well fadeInBlock" style="margin-top: -10px">
    <div>
        <h3><i class="fa fa-th"></i> เว็บไซต์ที่เกี่ยวข้อง</h3>
    </div> 
    <div class="progress">
        <div class="progress-bar"></div>
    </div>
    <!-- first row -->
    <div class="row">
        <div class="col-sm-3 col-xs-6 col-lg-3 col-md-6">
            <a href="http://www.moph.go.th/" target="_blank" style="text-decoration: none">
                <div class="hvr-grow" style="width: 100%">
                    <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                        <div class="img-wrapper">
                            <img src="<?= Yii::getAlias('@web') ?>/img/another/img_moph.jpg" class="img-responsive" style="height: 100px">
                        </div>
                        <p class="detail" style="font-weight: bold;font-size: 15px; margin-top: -10px">โรงพยาบาลท่าสองยาง</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 col-lg-3 col-md-6">
            <a href="http://www.tako.moph.go.th/" target="_blank" style="text-decoration: none">
                <div class="hvr-grow" style="width: 100%">
                    <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                        <div class="img-wrapper">
                            <img src="<?= Yii::getAlias('@web') ?>/img/another/img_tak.jpg" class="img-responsive" style="height: 100px">
                        </div>
                        <p class="detail" style="font-weight: bold;font-size: 15px; margin-top: -10px">สำนักงานสาธารณสุขจังหวัดตาก</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 col-lg-3 col-md-6">
            <a href="http://www.thasongyang.com" target="_blank" style="text-decoration: none">
                <div class="hvr-grow" style="width: 100%">
                    <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                        <div class="img-wrapper">
                            <img src="<?= Yii::getAlias('@web') ?>/img/another/img_tsyhos.jpg" class="img-responsive" style="height: 100px">
                        </div>
                        <p class="detail" style="font-weight: bold;font-size: 15px; margin-top: -10px">โรงพยาบาลท่าสองยาง</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 col-lg-3 col-md-6">
            <a href="http://203.157.203.2/takmoph/cooper/index.php" target="_blank" style="text-decoration: none">
                <div class="hvr-grow" style="width: 100%">
                    <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                        <div class="img-wrapper">
                            <img src="<?= Yii::getAlias('@web') ?>/img/another/img_sk.jpg" class="img-responsive" style="height: 100px">
                        </div>
                        <p class="detail" style="font-weight: bold;font-size: 15px; margin-top: -10px">สหกรณ์ออมสินสาธารณสุขตาก</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- End First Row -->

    <!-- Second Row -->
    <div class="row">
        <div class="col-sm-3 col-xs-6 col-lg-3 col-md-6">
            <a href="http://www.tako.moph.go.th/borderhealth/" target="_blank" style="text-decoration: none">
                <div class="hvr-grow" style="width: 100%">
                    <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                        <div class="img-wrapper">
                            <img src="<?= Yii::getAlias('@web') ?>/img/another/img_border.jpg" class="img-responsive" style="height: 100px">
                        </div>
                        <p class="detail" style="font-weight: bold;font-size: 15px; margin-top: -10px">เครือข่ายชายแดน</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 col-lg-3 col-md-6">
            <a href="http://203.157.203.22/archives/" target="_blank" style="text-decoration: none">
                <div class="hvr-grow" style="width: 100%">
                    <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                        <div class="img-wrapper">
                            <img src="<?= Yii::getAlias('@web') ?>/img/another/img_doc.jpg" class="img-responsive" style="height: 100px">
                        </div>
                        <p class="detail" style="font-weight: bold;font-size: 15px; margin-top: -10px">ระบบงานสารบรรณ สสจ.ตาก</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 col-lg-3 col-md-6">
            <a href="http://op.nhso.go.th/op/" target="_blank" style="text-decoration: none">
                <div class="hvr-grow" style="width: 100%">
                    <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                        <div class="img-wrapper">
                            <img src="<?= Yii::getAlias('@web') ?>/img/another/img_oppp.jpg" class="img-responsive" style="height: 100px">
                        </div>
                        <p class="detail" style="font-weight: bold;font-size: 15px; margin-top: -10px">OPPP</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 col-lg-3 col-md-6">
            <a href="http://www.tako.moph.go.th/meeting_system/" target="_blank" style="text-decoration: none">
                <div class="hvr-grow" style="width: 100%">
                    <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                        <div class="img-wrapper">
                            <img src="<?= Yii::getAlias('@web') ?>/img/another/img_meeting.jpg" class="img-responsive" style="height: 100px">
                        </div>
                        <p class="detail" style="font-weight: bold;font-size: 15px; margin-top: -10px">รายงานประชุม กวป.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- End Second Row -->


</div>
</div>
<!-- End Another Website -->