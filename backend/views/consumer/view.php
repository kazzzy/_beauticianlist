<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Consumer */

$this->title = $model->consumer_fname.' '.$model->consumer_lname;
$this->params['breadcrumbs'][] = ['label' => 'Consumers', 'url' => ['index']];
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

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->consumer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->consumer_id], [
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
            'consumer_id',
            'consumer_fname',
            'consumer_lname',
            'consumer_state',
            'consumer_pswd:ntext',
            'consumer_name',
            'consumer_zip',
            'consumer_email:email',
            'post_date',
            'status',
        ],
    ]) ?>
    </div>
</div>
