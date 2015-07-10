<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TechnicianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="technician-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tech_id') ?>

    <?= $form->field($model, 'tech_nickname') ?>

    <?= $form->field($model, 'tech_full_name') ?>

    <?= $form->field($model, 'tech_lname') ?>

    <?= $form->field($model, 'tech_email') ?>

    <?php // echo $form->field($model, 'tech_pics') ?>

    <?php // echo $form->field($model, 'tech_resume') ?>

    <?php // echo $form->field($model, 'tech_bio') ?>

    <?php // echo $form->field($model, 'share_bio') ?>

    <?php // echo $form->field($model, 'tech_disclamer') ?>

    <?php // echo $form->field($model, 'tech_license') ?>

    <?php // echo $form->field($model, 'tech_employment') ?>

    <?php // echo $form->field($model, 'tech_emp_address_street') ?>

    <?php // echo $form->field($model, 'tech_emp_address_city') ?>

    <?php // echo $form->field($model, 'tech_emp_address_state') ?>

    <?php // echo $form->field($model, 'tech_emp_address_zip') ?>

    <?php // echo $form->field($model, 'tech_subscription_active') ?>

    <?php // echo $form->field($model, 'tech_credit_type') ?>

    <?php // echo $form->field($model, 'tech_credit_card') ?>

    <?php // echo $form->field($model, 'tech_credit_ver') ?>

    <?php // echo $form->field($model, 'tech_fname_cc') ?>

    <?php // echo $form->field($model, 'tech_lname_cc') ?>

    <?php // echo $form->field($model, 'tech_exp_month') ?>

    <?php // echo $form->field($model, 'tech_exp_year') ?>

    <?php // echo $form->field($model, 'tech_school') ?>

    <?php // echo $form->field($model, 'tech_disinfection_verified') ?>

    <?php // echo $form->field($model, 'tech_profile') ?>

    <?php // echo $form->field($model, 'tech_pass') ?>

    <?php // echo $form->field($model, 'tech_contact') ?>

    <?php // echo $form->field($model, 'sh_tech_contact') ?>

    <?php // echo $form->field($model, 'sh_tech_email') ?>

    <?php // echo $form->field($model, 'curr_employment') ?>

    <?php // echo $form->field($model, 'sh_tech_school') ?>

    <?php // echo $form->field($model, 'post_date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'shared_profile') ?>

    <?php // echo $form->field($model, 'tech_specialty_id') ?>

    <?php // echo $form->field($model, 'pay_status') ?>

    <?php // echo $form->field($model, 'pay_date') ?>

    <?php // echo $form->field($model, 'transaction_id') ?>

    <?php // echo $form->field($model, 'ret_cust_id') ?>

    <?php // echo $form->field($model, 'return_string') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
