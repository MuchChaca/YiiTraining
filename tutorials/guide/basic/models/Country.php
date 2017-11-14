<?php
 namespace app\models;

 use yii\db\ActiveRecord;

 // No need to write anything inside Country class
 // Yii guess the table name associated
 class Country extends ActiveRecord{
 }


// get all rows from the country table and order them by "name"
// $countries = Country::find()->orderBy('name')->all();

// get the row whose primary key is "US"
// $country = Country::findOne('US');

// displays "United States"
// echo $country->name;

// modifies the country name to be "U.S.A." and save it to database
// $country->name = 'U.S.A.';
// $country->save();
