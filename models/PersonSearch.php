<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Person;

/**
 * PersonSearch represents the model behind the search form of `app\models\Person`.
 */
class PersonSearch extends Person
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FIO', 'gender', 'date_of_birth', 'role_in_the_project'], 'safe'],
            [['id', 'status_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Person::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'date_of_birth' => $this->date_of_birth,
            'id' => $this->id,
            'status_id' => $this->status_id,
        ]);

        $query->andFilterWhere(['like', 'FIO', $this->FIO])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'role_in_the_project', $this->role_in_the_project]);

        return $dataProvider;
    }
}
