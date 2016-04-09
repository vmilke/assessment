<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property string $SID
 * @property string $name
 * @property string $surname
 * @property string $password
 * @property string $email_st
 * @property string $regdate
 *
 * @property StudentsModules[] $studentsModules
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'password', 'email_st', 'regdate'], 'required'],
            [['regdate'], 'integer'],
            [['name', 'surname', 'email_st'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 32],
            [['email_st'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SID' => 'Sid',
            'name' => 'Name',
            'surname' => 'Surname',
            'password' => 'Password',
            'email_st' => 'Email St',
            'regdate' => 'Regdate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsModules()
    {
        return $this->hasMany(StudentsModules::className(), ['SID' => 'SID']);
    }
}
