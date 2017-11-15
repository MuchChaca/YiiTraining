<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContactListSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'nom') ?>

    <?= $form->field($model, 'prenom') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'fixe') ?>

    <?php // echo $form->field($model, 'portable') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
