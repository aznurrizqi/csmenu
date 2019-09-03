<?php

namespace backend\models;

/**
 * This is the model class for table "nutrient_on_deficiency".
 *
 * @property integer $id
 * @property integer $nutrientId
 * @property integer $onDeficiencyId
 */

class NutrientOnDeficiency extends \yii\db\ActiveRecord {
    public static function tableName() {
        return 'nutrient_on_deficiency';
    }
    
    public function rules() {
        return [
            [['nutrientId', 'onDeficiencyId'], 'required'],
            [['nutrientId', 'onDeficiencyId'], 'integer'],
        ];
    }
    
    public function attributeLabels() {
        return [
            'id' => 'Id',
            'nutrientId' => 'Nutrisi',
            'onDeficiencyId' => 'Akibat Kekurangan',
        ];
    }
    
    public function getNutrient() {
        return $this->hasOne(Nutrient::className(), ['id' => 'nutrientId']);
    }
    
    public function getOnDeficiency() {
        return $this->hasOne(OnDeficiency::className(), ['id' => 'onDeficiencyId']);
    }    
}