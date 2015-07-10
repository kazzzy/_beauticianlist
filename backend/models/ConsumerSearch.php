<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Consumer;

/**
 * ConsumerSearch represents the model behind the search form about `app\models\Consumer`.
 */
class ConsumerSearch extends Consumer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['consumer_id', 'status'], 'integer'],
            [['consumer_fname', 'consumer_lname', 'consumer_state', 'consumer_pswd', 'consumer_name', 'consumer_zip', 'consumer_email', 'post_date'], 'safe'],
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
        $query = Consumer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'consumer_id' => $this->consumer_id,
            'post_date' => $this->post_date,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'consumer_fname', $this->consumer_fname])
            ->andFilterWhere(['like', 'consumer_lname', $this->consumer_lname])
            ->andFilterWhere(['like', 'consumer_state', $this->consumer_state])
            ->andFilterWhere(['like', 'consumer_pswd', $this->consumer_pswd])
            ->andFilterWhere(['like', 'consumer_name', $this->consumer_name])
            ->andFilterWhere(['like', 'consumer_zip', $this->consumer_zip])
            ->andFilterWhere(['like', 'consumer_email', $this->consumer_email]);

        return $dataProvider;
    }
}
