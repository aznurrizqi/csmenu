<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FoodNutrient;

/**
 * FoodNutrientSearch represents the model behind the search form of `backend\models\FoodNutrient`.
 */
class FoodNutrientSearch extends FoodNutrient
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'food_id', 'nutrient_id', 'unit_id'], 'integer'],
            [['amount'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = FoodNutrient::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'food_id' => $this->food_id,
            'nutrient_id' => $this->nutrient_id,
            'amount' => $this->amount,
            'unit_id' => $this->unit_id,
        ]);

        return $dataProvider;
    }
}
