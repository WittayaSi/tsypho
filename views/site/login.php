<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
//use yii\bootstrap\ActiveForm;
use kartik\form\ActiveForm;
use yii\bootstrap\Modal;



$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<?php
Modal::begin([
    'id' => 'modal_login',
    'header' => '<h3><center><i class="fa fa-users"></i> User Login</center></h3>',
    'size' => 'modal-md',
    'closeButton' => false
]);
?>
<br>
<div class="site-login">
    
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => '{label}<div class="col-lg-12">{input}</div>',
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
        <?= $form->field($model, 'username',
                [
                    'addon' => [
                        'prepend' => ['content'=>'Username'],
                        'append' => ['content'=>'<i class="fa fa-user"></i>']
                    ]
                ]
                )->textInput(['autofocus' => true])->label(FALSE) ?>

        <?= $form->field($model, 'password',
                [
                    'addon' => [
                        'prepend' => ['content'=>'Password'],
                        'append' => ['content'=>'<i class="fa fa-key"></i>']
                    ]
                ]
                )->passwordInput(['placeholder'=>'Password'])->label(FALSE) ?>
    <br><hr>
        <div class="form-group">
            <div class="col-lg-4 col-lg-offset-8" align="right">
                <?= Html::submitButton('<i class="fa fa-sign-in"></i> Login', ['class' => 'btn btn-success btn-md', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
</div>
<?php
Modal::end();
?>
