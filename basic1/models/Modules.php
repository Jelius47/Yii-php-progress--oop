<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modules".
 *
 * @property int $id
 * @property string $moduleCode
 * @property string $moduleName
 */
class Modules extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modules';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['moduleCode', 'moduleName'], 'required'],
            [['moduleCode'], 'string', 'max' => 100],
            [['moduleName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'moduleCode' => Yii::t('app', 'Module Code'),
            'moduleName' => Yii::t('app', 'Module Name'),
        ];
    }
}
