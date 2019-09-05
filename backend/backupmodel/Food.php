<?php

namespace backend\models;

/**
 * This is the model class for table "food".
 *
 * @property integer $id
 * @property string $name
 */

class Food extends \yii\db\ActiveRecord {
    public static function tableName() {
        return 'food';
    }
    
    public function rules() {
        return [
            ['name', 'required'],
            ['name', 'string', 'max' => 64],
        ];
    }
    
    public function attributeLabels() {
        return [
            'id' => 'Id',
            'name' => 'Nama Makanan',
        ];
    }
    
    public function getFoodNutrient() {
        return $this->hasMany(FoodNutrient::className(), ['foodId' => 'id']);
    }
}