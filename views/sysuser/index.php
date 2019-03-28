<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SysUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sys Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sys-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sys User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gender',
            'created_time:datetime',
            'password',
            'account',
            //'name',
            //'birthday',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
