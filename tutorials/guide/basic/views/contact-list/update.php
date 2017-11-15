<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContactList */

$this->title = 'Update Contact List: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Contact Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contact-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
