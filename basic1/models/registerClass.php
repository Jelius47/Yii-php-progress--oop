<?php
namespace app\models;
use yii\base\Model;

// Declcaring the class 

class UserForm extends Model
{   
    public $name;
    public $email;

    public function rules()
    {

        return [
            [['name'],'required'],
            ['email','email'],
        ];
    }
}