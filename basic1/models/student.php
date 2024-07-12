<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property int $studentId
 * @property string $moduleCode
 * @property string $status
 * @property string $time
 *
 * @property User $student
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentId', 'moduleCode', 'status', 'time'], 'required'],
            [['studentId'], 'integer'],
            [['status'], 'string'],
            [['time'], 'safe'],
            [['moduleCode'], 'string', 'max' => 100],
            [['studentId'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['studentId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'studentId' => Yii::t('app', 'Student ID'),
            'moduleCode' => Yii::t('app', 'Module Code'),
            'status' => Yii::t('app', 'Status'),
            'time' => Yii::t('app', 'Time'),
        ];
    }

    /**
     * Gets query for [[Student]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(User::class, ['id' => 'studentId']);
    }
}
