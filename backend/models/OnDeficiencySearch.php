<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class OnDeficiencySearch extends OnDeficiency
{
    public $category;
    
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['onDeficiencyCategoryId', 'description'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = OnDeficiency::find();
        $query->joinWith('onDeficiencyCategory');
        
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

        $query->andFilterWhere(['like', 'description', $this->description])
        ->andFilterWhere(['like', 'on_deficiency_category.name', $this->category]);

        return $dataProvider;
    }
}
