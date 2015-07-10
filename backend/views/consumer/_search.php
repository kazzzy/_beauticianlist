<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConsumerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consumer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'consumer_id') ?>

    <?= $form->field($model, 'consumer_fname') ?>

    <?= $form->field($model, 'consumer_lname') ?>

    <?= $form->field($model, 'consumer_state') ?>

    <?= $form->field($model, 'consumer_pswd') ?>

    <?php // echo $form->field($model, 'consumer_name') ?>

    <?php // echo $form->field($model, 'consumer_zip') ?>

    <?php // echo $form->field($model, 'consumer_email') ?>

    <?php // echo $form->field($model, 'post_date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
