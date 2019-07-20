<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 28.06.2018
 * Time: 15:33
 */
namespace app\models;

use yii\base\Model;

class UsersForm extends Model
{
    public $login;
    public $password;

    public function rules()
    {
        return [
            [['login', 'password'], 'required']
        ];
    }
}