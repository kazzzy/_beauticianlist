<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Technician;

/**
 * TechnicianSearch represents the model behind the search form about `app\models\Technician`.
 */
class TechnicianSearch extends Technician
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tech_id', 'tech_exp_month', 'tech_exp_year', 'tech_contact', 'status', 'tech_specialty_id', 'pay_status'], 'integer'],
            [['tech_nickname', 'tech_full_name', 'tech_lname', 'tech_email', 'tech_pics', 'tech_resume', 'tech_bio', 'share_bio', 'tech_disclamer', 'tech_license', 'tech_employment', 'tech_emp_address_street', 'tech_emp_address_city', 'tech_emp_address_state', 'tech_emp_address_zip', 'tech_subscription_active', 'tech_credit_type', 'tech_credit_card', 'tech_credit_ver', 'tech_fname_cc', 'tech_lname_cc', 'tech_school', 'tech_disinfection_verified', 'tech_profile', 'tech_pass', 'sh_tech_contact', 'sh_tech_email', 'curr_employment', 'sh_tech_school', 'post_date', 'shared_profile', 'pay_date', 'transaction_id', 'ret_cust_id', 'return_string'], 'safe'],
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
        $query = Technician::find();

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
            'tech_id' => $this->tech_id,
            'tech_exp_month' => $this->tech_exp_month,
            'tech_exp_year' => $this->tech_exp_year,
            'tech_contact' => $this->tech_contact,
            'post_date' => $this->post_date,
            'status' => $this->status,
            'tech_specialty_id' => $this->tech_specialty_id,
            'pay_status' => $this->pay_status,
            'pay_date' => $this->pay_date,
        ]);

        $query->andFilterWhere(['like', 'tech_nickname', $this->tech_nickname])
            ->andFilterWhere(['like', 'tech_full_name', $this->tech_full_name])
            ->andFilterWhere(['like', 'tech_lname', $this->tech_lname])
            ->andFilterWhere(['like', 'tech_email', $this->tech_email])
            ->andFilterWhere(['like', 'tech_pics', $this->tech_pics])
            ->andFilterWhere(['like', 'tech_resume', $this->tech_resume])
            ->andFilterWhere(['like', 'tech_bio', $this->tech_bio])
            ->andFilterWhere(['like', 'share_bio', $this->share_bio])
            ->andFilterWhere(['like', 'tech_disclamer', $this->tech_disclamer])
            ->andFilterWhere(['like', 'tech_license', $this->tech_license])
            ->andFilterWhere(['like', 'tech_employment', $this->tech_employment])
            ->andFilterWhere(['like', 'tech_emp_address_street', $this->tech_emp_address_street])
            ->andFilterWhere(['like', 'tech_emp_address_city', $this->tech_emp_address_city])
            ->andFilterWhere(['like', 'tech_emp_address_state', $this->tech_emp_address_state])
            ->andFilterWhere(['like', 'tech_emp_address_zip', $this->tech_emp_address_zip])
            ->andFilterWhere(['like', 'tech_subscription_active', $this->tech_subscription_active])
            ->andFilterWhere(['like', 'tech_credit_type', $this->tech_credit_type])
            ->andFilterWhere(['like', 'tech_credit_card', $this->tech_credit_card])
            ->andFilterWhere(['like', 'tech_credit_ver', $this->tech_credit_ver])
            ->andFilterWhere(['like', 'tech_fname_cc', $this->tech_fname_cc])
            ->andFilterWhere(['like', 'tech_lname_cc', $this->tech_lname_cc])
            ->andFilterWhere(['like', 'tech_school', $this->tech_school])
            ->andFilterWhere(['like', 'tech_disinfection_verified', $this->tech_disinfection_verified])
            ->andFilterWhere(['like', 'tech_profile', $this->tech_profile])
            ->andFilterWhere(['like', 'tech_pass', $this->tech_pass])
            ->andFilterWhere(['like', 'sh_tech_contact', $this->sh_tech_contact])
            ->andFilterWhere(['like', 'sh_tech_email', $this->sh_tech_email])
            ->andFilterWhere(['like', 'curr_employment', $this->curr_employment])
            ->andFilterWhere(['like', 'sh_tech_school', $this->sh_tech_school])
            ->andFilterWhere(['like', 'shared_profile', $this->shared_profile])
            ->andFilterWhere(['like', 'transaction_id', $this->transaction_id])
            ->andFilterWhere(['like', 'ret_cust_id', $this->ret_cust_id])
            ->andFilterWhere(['like', 'return_string', $this->return_string]);

        return $dataProvider;
    }
}
