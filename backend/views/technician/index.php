<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TechnicianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Technicians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?= Html::encode($this->title) ?>
                </h1>
            </div>
        </div>

        <a href="javascript:;" data-toggle="collapse" data-target="#demo"> Search <i class="fa fa-fw fa-caret-down"></i></a>
        <a href='<?= yii\helpers\Url::toRoute(['/technician/index'])?>'>Show all</a>
        <ul id="demo" class="collapse" style="list-style: none;padding-left:0px;">
            <li>
                <?php echo $this->render('_search', ['model' => $searchModel]); ?>
            </li>
        </ul>

    <?= GridView::widget([
        'tableOptions' => ['class' => 'table table-hover table-striped'],
        'options' => ['class' => 'table-responsive'],
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'tech_id',
            'tech_nickname',
            'tech_full_name',
            'tech_lname',
            'tech_email:ntext',
            // 'tech_pics',
            // 'tech_resume',
            // 'tech_bio:ntext',
            // 'share_bio',
            // 'tech_disclamer',
            // 'tech_license',
            // 'tech_employment',
            // 'tech_emp_address_street',
            // 'tech_emp_address_city',
            // 'tech_emp_address_state',
            // 'tech_emp_address_zip',
            // 'tech_subscription_active',
            // 'tech_credit_type',
            // 'tech_credit_card',
            // 'tech_credit_ver',
            // 'tech_fname_cc',
            // 'tech_lname_cc',
            // 'tech_exp_month',
            // 'tech_exp_year',
            // 'tech_school',
            // 'tech_disinfection_verified',
            // 'tech_profile',
            // 'tech_pass:ntext',
            // 'tech_contact',
            // 'sh_tech_contact',
            // 'sh_tech_email:email',
            // 'curr_employment',
            // 'sh_tech_school',
            // 'post_date',
            // 'status',
            // 'shared_profile',
            // 'tech_specialty_id',
            // 'pay_status',
            // 'pay_date',
            // 'transaction_id:ntext',
            // 'ret_cust_id:ntext',
            // 'return_string:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>
