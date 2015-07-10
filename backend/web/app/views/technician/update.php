<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Technician */

$this->title = 'Update Technician: ' . ' ' . $model->tech_id;
$this->params['breadcrumbs'][] = ['label' => 'Technicians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tech_id, 'url' => ['view', 'id' => $model->tech_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="technician-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
