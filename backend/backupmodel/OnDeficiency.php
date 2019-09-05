<?php

namespace backend\models;

/**
 * This is the model class for table "on_deficiency".
 *
 * @property integer $id
 * @property integer $onDeficiencyCategoryId
 * @property string description
 */

class OnDeficiency extends \yii\db\ActiveRecord {
    public static function tableName() {
        return 'on_deficiency';
    }
    
    public function rules() {
        return [
            [['onDeficiencyCategoryId', 'description'], 'required'],
            ['onDeficiencyCategoryId', 'integer'],
            ['description', 'string'],
        ];
    }
    
    public function attributeLabels() {
        return [
            'id' => 'Id',
            'onDeficiencyCategoryId' => 'Kategori Akibat',
            'description' => 'Akibat Kekurangan',
        ];
    }

    public function getOnDeficiencyCategory() {
        return $this->hasOne(OnDeficiencyCategory::className(), ['id' => 'onDeficiencyCategoryId']);
    }
}