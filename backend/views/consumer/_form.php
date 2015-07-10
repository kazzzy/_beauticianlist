<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Consumer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consumer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'consumer_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consumer_lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consumer_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consumer_pswd')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'consumer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consumer_zip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consumer_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
