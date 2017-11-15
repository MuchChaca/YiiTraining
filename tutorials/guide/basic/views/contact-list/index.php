<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Contacts</h1>
<ul>
	<?php foreach($contacts as $contact): ?>
		<li>
			<strong><?= Html::encode("{$contact->nom} {$contact->prenom} ") ?></strong><br>
			<strong>Email: </strong><?= Html::encode("{$contact->email}") ?><br>
			<strong>Portable: </strong><?= Html::encode("{$contact->portable}") ?><br>
			<strong>Fixe: </strong><?= Html::encode("{$contact->fixe}") ?>
		</li><br>
	<?php endforeach; ?>
</ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>