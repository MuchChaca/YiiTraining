<?php
use yii\helpers\Html;
?>
<?= Html::encode($message); ?>
<?php
if ( extension_loaded('pdo_mysql') ) {
	echo "<h1>pdo is there and up</h1>";
}