<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ExperienciaLaboral;

/**
 * ExperienciaLaboralSearch represents the model behind the search form about `app\models\ExperienciaLaboral`.
 */
class ExperienciaLaboralSearch extends ExperienciaLaboral
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idEmpresa', 'idEmpresaReferencia', 'idPerfil'], 'integer'],
            [['fechaInicio', 'fechaFinal', 'estadoLaboral', 'cargo', 'motivoRetiro', 'correoReferencia', 'nombreReferencia', 'cargoReferencia', 'telefonoReferencia', 'estado'], 'safe'],
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
        $query = ExperienciaLaboral::find();

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
            'id' => $this->id,
            'fechaInicio' => $this->fechaInicio,
            'fechaFinal' => $this->fechaFinal,
            'idEmpresa' => $this->idEmpresa,
            'idEmpresaReferencia' => $this->idEmpresaReferencia,
            'idPerfil' => $this->idPerfil,
        ]);

        $query->andFilterWhere(['like', 'estadoLaboral', $this->estadoLaboral])
            ->andFilterWhere(['like', 'cargo', $this->cargo])
            ->andFilterWhere(['like', 'motivoRetiro', $this->motivoRetiro])
            ->andFilterWhere(['like', 'correoReferencia', $this->correoReferencia])
            ->andFilterWhere(['like', 'nombreReferencia', $this->nombreReferencia])
            ->andFilterWhere(['like', 'cargoReferencia', $this->cargoReferencia])
            ->andFilterWhere(['like', 'telefonoReferencia', $this->telefonoReferencia])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
