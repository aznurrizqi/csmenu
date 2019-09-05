<?php

namespace backend\models;

/**
 * This is the model class for table "measurement_unit".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 */

class MeasurementUnit extends \yii\db\ActiveRecord {
    public static function tableName() {
        return 'measurement_unit';
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
            'name' => 'Satuan',
            'description' => 'Deskripsi',
        ];
    }
}