<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 17.03.2019
 * Time: 22:43
 */
namespace app\models;

use yii\base\Model;

class Market extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'market';
    }

    public function rules()
    {
        return [
            [['title', 'file_name'], 'string', 'max' => 255],
            [['file_name'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'            => 'ID',
            'title'         => 'Заголовок',
            'created_at'   => 'Дата создания',
            'file_name'         => 'Ссылка на изображение',
        ];
    }
}