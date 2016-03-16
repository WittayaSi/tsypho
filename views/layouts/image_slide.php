<?php
//print_r(Yii::getAlias('@web'));
//return;
?>

<div class="" style="margin-top: 2px">
    <div class="carousel slide" data-ride="carousel" id="image-slider" style="width: 100%">
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?= Yii::getAlias('@web')?>/img/slide1.jpg" alt="ทรงพระเจริญ" width="100%">
            </div>
            <div class="item">
                <img src="<?= Yii::getAlias('@web')?>/img/slide2.jpg" alt="สสอ.ท่าสองยาง" width="100%">
<!--                <div class="carousel-caption">
                    <h4>title</h4>
                    <p>test image</p>
                </div>-->
            </div>
        </div>
        <a href="#image-slider" class="left carousel-control" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
        </a>
        <a href="#image-slider" class="right carousel-control" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
        </a>
    </div>
</div>

