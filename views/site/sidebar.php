<?php

use yii\bootstrap\Html;
?>
<div class="site-index">

    <div class="body-content">
        <h3 style="text-align: center">ผู้บริหาร</h3>
        <div class="progress">
            <div class="progress-bar"></div>
        </div>
        <div id="both" class="well">
            <div align="center">
                <?= Html::img(Yii::getAlias('@web') . '/img/cheif.jpg', ['width' => '200']); ?>
            </div><br>
            <h4 align="center">นายประเสริฐ สอนเจริญทรัพย์</h4>
            <h5 align="center">สาธารณสุขอำเภอท่าสองยาง</h5>
        </div>
    </div>
</div>

