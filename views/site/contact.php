<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'ติดต่อ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container well">
    <h3><i class="fa fa-phone-square fa-lg"></i> ติดต่อเรา</h3>
    <div class="progress">
        <div class="progress-bar"></div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <ul class="list-group well" style="height: 400px">
                <li class="list-group-item" style="text-align: center"><h3>สำนักงานสาธารณสุขอำเภอท่าสองยาง</h3></li>
                <li class="list-group-item" style="font-size: 15px;text-align: center">
                    <i class="fa fa-home fa-2x"></i> ที่อยู่ :: 401 หมู่ 2 ต.แม่ต้าน อ.ท่าสองยาง จ.ตาก 63150</li>
                <li class="list-group-item col-sm-offset-3" style="font-size: 15px">
                    <i class="fa fa-phone-square fa-2x"></i> โทรศัพท์ :: 055-589116</li>
                <li class="list-group-item col-sm-offset-3" style="font-size: 15px">
                    <i class="fa fa-fax fa-2x"></i> แฟกซ์ :: 055-589116</li>
                <li class="list-group-item col-sm-offset-3" style="font-size: 15px">
                    <i class="fa fa-envelope fa-2x"></i> อีเมลล์ :: it_tsy_ph@hotmail.com</li>
                <li class="list-group-item col-sm-offset-3" style="font-size: 15px">
                    <i class="fa fa-facebook-square fa-2x"></i> 
                    <a href="https://www.facebook.com/groups/192188887491010/" style="text-decoration: none" target="_blank">facebook :: บุคลากรสังกัด สสอ.ท่าสองยาง</a></li>

            </ul>
        </div>
        <div class="col-sm-6">
            <?php
            require 'google_map.php';
            ?>
        </div>
    </div>

    <div class="well" style="margin-top: 25px">

        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success" align="center" style="height: 50px">
                ขอบคุณ เราจะทำการติดต่อกลับโดยด่วน
            </div>

        <?php else: ?>

            <div class="alert alert-success">
                <p align="center"> 
                    ติดต่อเราทาง Email
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput()->label('ชื่อ - สกุล') ?>

                    <?= $form->field($model, 'email')->label('อีเมลล์') ?>

                    <?= $form->field($model, 'subject')->label('เรื่อง') ?>

                    <?= $form->field($model, 'body')->textArea(['rows' => 6])->label('รายละเอียด') ?>

                    <?=
                    $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ])->label('Code ยืนยัน')
                    ?>

                    <div class="form-group" align="center">
                        <?= Html::submitButton('ส่งข้อมูล', ['class' => 'btn btn-primary btn-block', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>

        <?php endif; ?>
    </div>
</div>
