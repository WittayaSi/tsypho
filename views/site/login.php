<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php
Modal::begin([
    'id' => 'modal_login',
    'header' => '<h3><center>Login</center></h3>',
    'size' => 'modal-sm',
    'closeButton' => false
]);
?>
<div class="site-login">

    <p align="center">Please fill out the following fields to login</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => '{label}<div class="col-lg-12">{input}</div>',
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <div class="form-group">
            <div class="col-lg-12">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
</div>
<?php
Modal::end();
?>
