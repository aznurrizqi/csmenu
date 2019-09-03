<?php

namespace backend\models;

/**
 * This is the model class for table "nutrient".
 *
 * @property integer $id
 * @property string $name
 */

class Nutrient extends \yii\db\ActiveRecord {
    public static function tableName() {
        return 'nutrient';
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
            'name' => 'Nama Nutrisi',
        ];
    }
    
    public function getFoodNutrient() {
        return $this->hasMany(FoodNutrient::className(), ['nutrientId' => 'id']);
    }

    public function getNutrientOnDeficiency() {
        return $this->hasMany(NutrientOnDeficiency::className(), ['nutrientId' => 'id']);
    }
    
}