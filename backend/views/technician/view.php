<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Technician */

$this->title = $model->tech_full_name;
$this->params['breadcrumbs'][] = ['label' => 'Technicians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?= Html::encode($model->tech_full_name) ?>
                </h1>
            </div>
        </div>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tech_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tech_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'tech_id',
            'tech_nickname',
            'tech_full_name',
            'tech_lname',
            'tech_email:ntext',
            //'tech_pics',
            //'tech_resume',
            'tech_bio:ntext',
            'share_bio',
            'tech_disclamer',
            'tech_license',
            'tech_employment',
            'tech_emp_address_street',
            'tech_emp_address_city',
            'tech_emp_address_state',
            'tech_emp_address_zip',
            'tech_subscription_active',
            'tech_credit_type',
            'tech_credit_card',
            'tech_credit_ver',
            'tech_fname_cc',
            'tech_lname_cc',
            'tech_exp_month',
            'tech_exp_year',
            'tech_school',
            'tech_disinfection_verified',
            'tech_profile',
            'tech_pass:ntext',
            'tech_contact',
            'sh_tech_contact',
            'sh_tech_email:email',
            'curr_employment',
            'sh_tech_school',
            'post_date',
            'status',
            'shared_profile',
            //'tech_specialty_id',
            //'pay_status',
            //'pay_date',
            //'transaction_id:ntext',
            //'ret_cust_id:ntext',
            //'return_string:ntext',
        ],
    ]) ?>

</div>
