<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hosts;

/**
 * HostsSearch represents the model behind the search form of `app\models\Hosts`.
 */
class HostsSearch extends Hosts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['site_name', 'host_admin_panel', 'host_admin_user', 'host_admin_pwd', 'ftp_address', 'ftp_user',
                'ftp_password', 'site_admin_user', 'site_admin_pwd', 'site_bd_name', 'site_bd_user', 'site_bd_pwd',
                'site_email', 'site_email_pwd'], 'safe'],
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
        $query = Hosts::find();

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
        ]);

        $query->andFilterWhere(['like', 'site_name', $this->site_name])
            ->andFilterWhere(['like', 'host_admin_panel', $this->host_admin_panel])
            ->andFilterWhere(['like', 'host_admin_user', $this->host_admin_user])
            ->andFilterWhere(['like', 'host_admin_pwd', $this->host_admin_pwd])
            ->andFilterWhere(['like', 'ftp_address', $this->ftp_address])
            ->andFilterWhere(['like', 'ftp_user', $this->ftp_user])
            ->andFilterWhere(['like', 'ftp_password', $this->ftp_password])
            ->andFilterWhere(['like', 'site_admin_user', $this->site_admin_user])
            ->andFilterWhere(['like', 'site_admin_pwd', $this->site_admin_pwd])
            ->andFilterWhere(['like', 'site_bd_name', $this->site_bd_name])
            ->andFilterWhere(['like', 'site_bd_user', $this->site_bd_user])
            ->andFilterWhere(['like', 'site_bd_pwd', $this->site_bd_pwd])
            ->andFilterWhere(['like', 'site_email', $this->site_email])
            ->andFilterWhere(['like', 'site_email_pwd', $this->site_email_pwd]);

        return $dataProvider;
    }
}
