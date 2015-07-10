<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consumers';
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
        <a href='<?= yii\helpers\Url::toRoute(['/consumer/index'])?>'>Show all</a>
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

            'consumer_fname',
            'consumer_lname',
            'consumer_state',
            //'consumer_pswd:ntext',
            // 'consumer_name',
            // 'consumer_zip',
             'consumer_email:email',
            // 'post_date',
             'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>
