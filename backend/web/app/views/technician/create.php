<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Technician */

$this->title = 'Create Technician';
$this->params['breadcrumbs'][] = ['label' => 'Technicians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="technician-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
