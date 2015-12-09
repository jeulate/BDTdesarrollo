<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Formacion;

/**
 * FormacionSearch represents the model behind the search form about `app\models\Formacion`.
 */
class FormacionSearch extends Formacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPerfil', 'idTipo'], 'integer'],
            [['titulo'], 'safe'],
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
        $query = Formacion::find();

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
            'idPerfil' => $this->idPerfil,
            'idTipo' => $this->idTipo,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo]);

        return $dataProvider;
    }
}
