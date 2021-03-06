<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ExpressNews */

$this->title = 'Update Express News: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Express News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container well">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
