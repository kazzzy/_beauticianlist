<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Technician */

$this->title = 'Update Technician: ' . ' ' . $model->tech_full_name;
$this->params['breadcrumbs'][] = ['label' => 'Technicians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tech_id, 'url' => ['view', 'id' => $model->tech_id]];
$this->params['breadcrumbs'][] = 'Update';
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
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
</div>
