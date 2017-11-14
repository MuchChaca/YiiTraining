<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model{
	public $name;
	public $email; // store what the user types

	public function rules(){
		return [
			[['name', 'email'], 'required'],
			['email', 'email'],
		];
	}
}

