<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class FoodSearch extends Food
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Food::find();

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

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
