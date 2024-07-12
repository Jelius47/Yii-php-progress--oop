<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cr".
 *
 * @property string $crId
 * @property string $notesBycr
 */

class Cr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
{
    return [
        [['crId', 'notesBycr'], 'required'],
        [['notesBycr'], 'string'],
        [['crId'], 'string', 'max' => 100],
        [['crId'], 'unique'],
        // Add custom validation rule to validate 'crId' format
        ['crId', 'validateCrIdFormat'],
    ];
}

// Custom validation method to validate 'crId' format
public function validateCrIdFormat($attribute, $params)
{
    // Add your validation logic here, for example:
    if (!preg_match('/^[A-Za-z0-9_-]+$/', $this->$attribute)) {
        $this->addError($attribute, 'Cr ID must contain only letters, numbers, underscores, and hyphens.');
    }
}

}
