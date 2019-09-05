<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class NutrientOnDeficiencySearch extends NutrientOnDeficiency
{
    public $nutrient, $onDeficiency;
    
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nutrientId', 'onDeficiencyId'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = NutrientOnDeficiency::find();
        $query->joinWith('nutrient');
        $query->joinWith('onDeficiency');
        
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

        $query->andFilterWhere(['like', 'nutrient.name', $this->nutrient])
        ->andFilterWhere(['like', 'onDeficiency.description', $this->onDeficiency]);
        
        return $dataProvider;
    }
}
