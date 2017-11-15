<?php
namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use yii\models\ContactList;

class ContactListController extends Controller{
	public function actionIndex(){
		$query = ContactList::find();

		$pagination = new Pagination([
			'defaultPageSize' => 5,
			'totalCount' => $query->count(),
		]);

		$contacts = $query->orderBy('name')
			->offset($pagination->offset)
			->limit($pagination->limit)
			->all();

		return $this->render([
			'pagination' => $pagination,
			'contacts' => $contact,
		]);
	}
}