<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Teacher;

/**
 * TeacherSearch represents the model behind the search form of `app\models\Teacher`.
 */
class TeacherSearch extends Teacher
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'teacherId'], 'integer'],
            [['moduleCode', 'latitude', 'notesFromLec', 'longitude', 'time'], 'safe'],
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
        $query = Teacher::find();

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
            'id' => $this->id,
            'teacherId' => $this->teacherId,
            'time' => $this->time,
        ]);

        $query->andFilterWhere(['like', 'moduleCode', $this->moduleCode])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'notesFromLec', $this->notesFromLec])
            ->andFilterWhere(['like', 'longitude', $this->longitude]);

        return $dataProvider;
    }
}
