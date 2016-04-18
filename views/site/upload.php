<div class="container well">

    <?php

    use kartik\file\FileInput;
    use yii\helpers\Url;
    use yii\bootstrap\Html;

echo FileInput::widget([
    'name' => 'attachment_51',
    'pluginOptions' => [
        'showUpload' => false,
        'browseLabel' => '',
        'removeLabel' => '',
        'mainClass' => 'input-group-lg'
    ]
]);
    ?>
</div>
