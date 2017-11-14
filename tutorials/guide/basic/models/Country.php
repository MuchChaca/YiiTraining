<?php
 namespace app\models;

 use yii\db\ActiveRecord;

 // No need to write anything inside Country class
 // Yii guess the table name associated
 /** 
* This is the model class for table "country". 
* 
* @property string $code 
* @property string $name 
* @property integer $population 
*/ 
class Country extends \yii\db\ActiveRecord 
{ 
   /** 
    * @inheritdoc 
    */ 
   public static function tableName() 
   { 
       return 'country'; 
   } 
// get all rows from the country table and order them by "name"
// $countries = Country::find()->orderBy('name')->all();
   /**
    * @inheritdoc
    */
   public function rules()
   {
       return [
           [['code', 'name'], 'required'],
           [['population'], 'integer'],
           [['code'], 'string', 'max' => 2],
           [['name'], 'string', 'max' => 52],
       ];
   }
// get the row whose primary key is "US"
// $country = Country::findOne('US');
   /**
    * @inheritdoc
    */
   public function attributeLabels()
   {
       return [
           'code' => 'Code',
           'name' => 'Name',
           'population' => 'Population',
       ];
   }
}
// displays "United States" 
// echo $country->name; 
 
// modifies the country name to be "U.S.A." and save it to database 
// $country->name = 'U.S.A.'; 
// $country->save();