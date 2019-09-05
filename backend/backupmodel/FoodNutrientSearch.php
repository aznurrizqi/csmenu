<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class FoodNutrientSearch extends FoodNutrient
{
    public $food, $nutrient;
    
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['foodId', 'nutrientId', 'amount', 'unitId'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = FoodNutrient::find();
        $query->joinWith('food');
        $query->joinWith('nutrient');
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        		'sort' => [
        				'defaultOrder' => [
        						'id' => SORT_ASC,
        				]
        		],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'food.name', $this->food])
        ->andFilterWhere(['like', 'nutrient.name', $this->nutrient]);
        
        return $dataProvider;
    }
}
