<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $id
 * @property int $teacherId
 * @property string $moduleCode
 * @property string $latitude
 * @property string $notesFromLec
 * @property string $longitude
 * @property string $time
 *
 * @property User $teacher
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacherId', 'moduleCode', 'latitude', 'notesFromLec', 'longitude'], 'required'],
            [['teacherId'], 'integer'],
            [['notesFromLec'], 'string'],
            [['time'], 'safe'],
            [['moduleCode', 'latitude'], 'string', 'max' => 100],
            [['longitude'], 'string', 'max' => 255],
            [['teacherId'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['teacherId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'teacherId' => Yii::t('app', 'Teacher ID'),
            'moduleCode' => Yii::t('app', 'Module Code'),
            'latitude' => Yii::t('app', 'Latitude'),
            'notesFromLec' => Yii::t('app', 'Notes From Lec'),
            'longitude' => Yii::t('app', 'Longitude'),
            'time' => Yii::t('app', 'Time'),
        ];
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(User::class, ['id' => 'teacherId']);
    }
}
