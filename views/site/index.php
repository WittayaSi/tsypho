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
            <h3>เมนู</h3>
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
            <h3>ข่าวล่าสุด</h3>
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
