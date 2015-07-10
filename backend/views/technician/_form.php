<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Technician */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="technician-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tech_nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_email')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tech_pics')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_resume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_bio')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'share_bio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_disclamer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_license')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_employment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_emp_address_street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_emp_address_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_emp_address_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_emp_address_zip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_subscription_active')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_credit_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_credit_card')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_credit_ver')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_fname_cc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_lname_cc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_exp_month')->textInput() ?>

    <?= $form->field($model, 'tech_exp_year')->textInput() ?>

    <?= $form->field($model, 'tech_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_disinfection_verified')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_pass')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tech_contact')->textInput() ?>

    <?= $form->field($model, 'sh_tech_contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sh_tech_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curr_employment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sh_tech_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'shared_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_specialty_id')->textInput() ?>

    <?= $form->field($model, 'pay_status')->textInput() ?>

    <?= $form->field($model, 'pay_date')->textInput() ?>

    <?= $form->field($model, 'transaction_id')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ret_cust_id')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'return_string')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
