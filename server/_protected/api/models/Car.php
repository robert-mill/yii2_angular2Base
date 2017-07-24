<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property integer $id
 * @property string $make
 * @property string $model
 * @property string $colour
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['make', 'model', 'colour'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'make' => 'Make',
            'model' => 'Model',
            'colour' => 'Colour',
        ];
    }
}
