<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $Last_Name
 * @property string $Email
 */
class Student extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create'; 
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Last_Name', 'Email'], 'required'],
            [['Name', 'Last_Name', 'Email'], 'string', 'max' => 40],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['Name','Last_Name','Email']; 
        return $scenarios; 
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
            'Last_Name' => 'Last  Name',
            'Email' => 'Email',
        ];
    }
}
