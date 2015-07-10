<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Consumer */

$this->title = 'Update Consumer: ' . ' ' . $model->consumer_fname.' '.$model->consumer_lname;
$this->params['breadcrumbs'][] = ['label' => 'Consumers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->consumer_id, 'url' => ['view', 'id' => $model->consumer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?= Html::encode($model->consumer_fname).' '.Html::encode($model->consumer_lname) ?>
                </h1>
            </div>
        </div>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
