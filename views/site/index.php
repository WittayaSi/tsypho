<?php
/* @var $this yii\web\View */

$this->title = 'สำนักงานสาธารณสุขอำเภอท่าสองยาง';
?>


<div class="container well">
    <div class="row">
        <div class="col-sm-3">
            <?php require_once('sidebar.php') ?>
        </div>
        <div class="col-sm-9">
            <div class="site-index">

                <div>
                    <h3><i class="fa fa-newspaper-o"></i> ประชาสัมพันธ์</h3>
                </div> 
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 0%"></div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <h2>Heading</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>

                        <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
                    </div>
                    <div class="col-sm-6">
                        <h2>Heading</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>

                        <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- menu and news -->
<div class="container well" style="margin-top: -15px">

    <div class="row">
        <div class="col-sm-6">
            <h3><i class="fa fa-th-large"></i> เมนู</h3>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>

            <div class="row">
                
            </div>
        </div>

        <div class="col-sm-6">
            <h3><i class="fa fa-newspaper-o"></i> ข่าวล่าสุด</h3>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </div>
</div>
<!-- End menu and news -->

<!-- Data Center -->
<div class="container well" style="margin-top: -15px">
    <div>
        <h3><i class="fa fa-database"></i> Data Center</h3>
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
                <div class="col-sm-offset-2 col-sm-4">
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
                <div class="col-sm-4">
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

        <div class="bottom-line"></div>
        <div class="col-sm-6">
            <h4>จังหวัด</h4>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <div class="row">
                <div class="col-sm-4">
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
                <div class="col-sm-4">
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
                <div class="col-sm-4">
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
<div class="container well" style="margin-top: -15px">
    <div>
        <h3><i class="fa fa-th"></i> เว็บไซต์ที่เกี่ยวข้อง</h3>
    </div> 
    <div class="progress">
        <div class="progress-bar"></div>
    </div>
    <!-- first row -->
    <div class="row">
        <div class="col-sm-3">
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
        <div class="col-sm-3">
            <a href="http://123.242.165.136/?module=file&pages=list_file_other&cate_file_id=22" target="_blank" style="text-decoration: none">
                <div class="hvr-grow" style="width: 100%">
                    <div class="container-card" style="max-height: 150px;text-align: center" id="menu-hover">
                        <div class="img-wrapper">
                            <img src="<?= Yii::getAlias('@web') ?>/img/another/img_ttak.jpg" class="img-responsive" style="height: 100px">
                        </div>
                        <p class="detail" style="font-weight: bold;font-size: 15px; margin-top: -10px">เขตพัฒนาเศรษฐกิจพิเศษตาก</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3">
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
        <div class="col-sm-3">
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
    </div>
    <!-- End First Row -->
    
    <!-- Second Row -->
    <div class="row">
        <div class="col-sm-3">
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
        <div class="col-sm-3">
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
        <div class="col-sm-3">
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