<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contactList".
 *
 * @property integer $ID
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $fixe
 * @property string $portable
 */
class ContactList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contactList';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prenom'], 'required'],
            [['nom', 'prenom', 'email', 'fixe', 'portable'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'nom' => 'Nom',
            'prenom' => 'Prenom',
            'email' => 'Email',
            'fixe' => 'Fixe',
            'portable' => 'Portable',
        ];
    }
}
