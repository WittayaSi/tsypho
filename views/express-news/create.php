<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ExpressNews */

$this->title = 'Create Express News';
$this->params['breadcrumbs'][] = ['label' => 'Express News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="express-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
