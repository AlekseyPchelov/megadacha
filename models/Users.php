<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 28.06.2018
 * Time: 16:17
 */
namespace app\models;

use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
    public $login;
    public $password;

    public static function tableName()
    {
        return 'dbUsers';
    }

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            [['login'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 30]
        ];
    }

}