<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property string $FIO
 * @property string $gender
 * @property string $date_of_birth
 * @property string $role_in_the_project
 * @property int $id
 * @property int $status_id
 *
 * @property StatusOfPerson $status
 * @property Essence $id0
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FIO', 'gender', 'date_of_birth', 'role_in_the_project', 'status_id'], 'required'],
            [['FIO', 'gender', 'role_in_the_project'], 'string'],
            [['date_of_birth'], 'safe'],
            [['status_id'], 'integer'],
            /*[['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => StatusOfPerson::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Essence::className(), 'targetAttribute' => ['id' => 'person_id']],*/
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'FIO' => 'Fio',
            'gender' => 'Gender',
            'date_of_birth' => 'Date Of Birth',
            'role_in_the_project' => 'Role In The Project',
            'id' => 'ID',
            'status_id' => 'Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(StatusOfPerson::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Essence::className(), ['person_id' => 'id']);
    }
}
