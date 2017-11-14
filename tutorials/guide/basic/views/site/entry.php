<?php
// Just the form
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>		<!-- //* Note that starts the form -->
	<!-- $model has been rendered by the controller -->
	<?= $form->field($model, 'name')->label('Your Name') ?>
	<?= $form->field($model, 'email') ?>

	<div class="form-group">
		<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
	</div>

<?php ActiveForm::end(); ?> 					<!-- //* Note that ends the form -->

<!-- to test : http://hostname/index.php?r=site%2Fentry -->
<!-- where %2F <=> \ -->
<!-- //! Careful the accents like "é" are making the imail as not valid -->