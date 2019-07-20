<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 28.06.2018
 * Time: 14:28
 */

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}