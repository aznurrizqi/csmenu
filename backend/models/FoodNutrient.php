<?php

namespace backend\models;

/**
 * This is the model class for table "food_nutrient".
 *
 * @property integer $id
 * @property integer $foodId
 * @property integer $nutrientId
 * @property double $amount
 * @property integer $unitId
 */

class FoodNutrient extends \yii\db\ActiveRecord {
    public static function tableName() {
        return 'food_nutrient';
    }
    
    public function rules() {
        return [
            [['foodId', 'nutrientId', 'amount', 'unitId'], 'required'],
            [['foodId', 'nutrientId', 'unitId'], 'integer'],
            ['amount', 'number'],
        ];
    }
    
    public function attributeLabels() {
        return [
            'id' => 'Id',
            'foodId' => 'Makanan',
            'nutrientId' => 'Nutrisi',
            'amount' => 'Jumlah',
            'unitId' => 'Satuan',
        ];
    }
    
    public function getFood() {
        return $this->hasOne(Food::className(), ['id' => 'foodId']);
    }
    
    public function getNutrient() {
        return $this->hasOne(Nutrient::className(), ['id' => 'nutrientId']);
    }    

    public function getMeasurementUnit() {
        return $this->hasOne(MeasurementUnit::className(), ['id' => 'unitId']);
    }    
}