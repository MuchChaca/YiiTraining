<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller{

	public function actionIndex(){
		//
		$query = Country::find();	// get all the data from the Country table (?)

		$pagination = new Pagination([
			'defaultPageSize' => 5,
			'totalCount' => $query->count(),  // $query->count() counts the number of rows returned by the query $query
		]);
			// keep this ?
		$countries = $query->orderBy('name')
			->offset($pagination->offset)
			->limit($pagination->limit)
			->all();

		return $this->render('index', [
			'pagination' => $pagination,
			'countries' => $countries
		]);
	}
}