<?php

use app\models\ExpressNews;
use yii\helpers\Url;
?>
<div class="site-index">


    <?php
    $model = ExpressNews::find()->orderBy(['id' => SORT_DESC])->limit(3)->all();
    if (!empty($model)) {
        $id1 = $model['0']['id'];
        $title1 = $model['0']['title'];
        $detial1 = $model['0']['detial'];
        $date1 = $model['0']['updated_at'];

        $id2 = $model['1']['id'];
        $title2 = $model['1']['title'];
        $detial2 = $model['1']['detial'];
        $date2 = $model['1']['updated_at'];

        $id3 = $model['2']['id'];
        $title3 = $model['2']['title'];
        $detial3 = $model['2']['detial'];
        $date3 = $model['2']['updated_at'];
    } else {
        $id1 = "";
        $title1 = "";
        $detial1 = "";
        $date1 = "";

        $id2 = "";
        $title2 = "";
        $detial2 = "";
        $date2 = "";

        $id3 = "";
        $title3 = "";
        $detial3 = "";
        $date3 = "";
    }

    //Yii::$app->thaiFormatter->locale = "th_TH";
    $thai_date1 = Yii::$app->thaiFormatter->asDatetime($date1, 'medium');
    $thai_date2 = Yii::$app->thaiFormatter->asDatetime($date2, 'medium');
    $thai_date3 = Yii::$app->thaiFormatter->asDatetime($date3, 'medium');
    ?>

    <div class="well" style="margin-top: 2px">
        <div class="container">
            <div class="carousel slide" data-ride="carousel" id="news-slider" style="margin-top: -20px;margin-bottom: -20px">
                <div class="carousel-inner">
                    <div class="item active" style="color: #B00000">
                        <i class="fa fa-fire"></i> ประกาศด่วน <?= $thai_date1; ?> 
                        <a href="<?= Url::to(['site/express-news-view', 'id' => $id1]) ?>" class="btn btn-danger btn-xs">
                            อ่าน...<i class="fa fa-angle-double-right"></i>
                        </a>
                        <p style="margin-top: -10px"><?= $title1; ?></p>
                    </div>
                    <div class="item" style="color: #B00000">
                        <i class="fa fa-fire"></i> ประกาศด่วน <?= $thai_date2; ?>
                        <a href="<?= Url::to(['site/express-news-view', 'id' => $id2]) ?>" class="btn btn-danger btn-xs">
                            อ่าน...<i class="fa fa-angle-double-right"></i>
                        </a>
                        <p style="margin-top: -10px"><?= $title2; ?></p>
                    </div>
                    <div class="item" style="color: #B00000">
                        <i class="fa fa-fire"></i> ประกาศด่วน <?= $thai_date3; ?>
                        <a href="<?= Url::to(['site/express-news-view', 'id' => $id3]) ?>" class="btn btn-danger btn-xs">
                            อ่าน...<i class="fa fa-angle-double-right"></i>
                        </a>
                        <p style="margin-top: -10px"><?= $title3; ?></p>
                    </div>
                </div>
                <a href="#news-slider" class="left carousel-control" style="background: transparent" data-slide="prev">
                    <span class="icon-prev" aria-hidden="true"></span>
                </a>
                <a href="#news-slider" class="right carousel-control" style="background: transparent" data-slide="next">
                    <span class="icon-next" aria-hidden="true"></span>
                </a>
            </div>
        </div>

    </div>
</div>

