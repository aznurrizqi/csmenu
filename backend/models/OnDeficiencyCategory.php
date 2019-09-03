<?php

namespace backend\models;

/**
 * This is the model class for table "on_deficiency_category".
 *
 * @property integer $id
 * @property string $name
 */

class OnDeficiencyCategory extends \yii\db\ActiveRecord {
    public static function tableName() {
        return 'on_deficiency_category';
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
            'name' => 'Kategori Akibat',
        ];
    }
    
    public function getOnDeficiency() {
        return $this->hasMany(OnDeficiency::className(), ['onDeficiencyCategoryId' => 'id']);
    }
}