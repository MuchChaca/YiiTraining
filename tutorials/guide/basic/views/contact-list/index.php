<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contact Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-list-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contact List', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'nom',
            'prenom',
            'email:email',
            'fixe',
            // 'portable',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
