<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ContactList */

$this->title = 'Create Contact List';
$this->params['breadcrumbs'][] = ['label' => 'Contact Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
