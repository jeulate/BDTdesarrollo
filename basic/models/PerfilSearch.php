<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Perfil;

/**
 * PerfilSearch represents the model behind the search form about `app\models\Perfil`.
 */
class PerfilSearch extends Perfil
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['apellidos', 'nombres', 'genero', 'fechaNacimiento', 'correo', 'valorAgregado', 'telefono', 'celular', 'licenciaConducir', 'rutaCV', 'estado'], 'safe'],
            [['renumeracionActual', 'renumeracionIdeal'], 'number'],
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
        $query = Perfil::find();

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
            'fechaNacimiento' => $this->fechaNacimiento,
            'renumeracionActual' => $this->renumeracionActual,
            'renumeracionIdeal' => $this->renumeracionIdeal,
        ]);

        $query->andFilterWhere(['like', 'apellidos', $this->apellidos])
            ->andFilterWhere(['like', 'nombres', $this->nombres])
            ->andFilterWhere(['like', 'genero', $this->genero])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'valorAgregado', $this->valorAgregado])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'celular', $this->celular])
            ->andFilterWhere(['like', 'licenciaConducir', $this->licenciaConducir])
            ->andFilterWhere(['like', 'rutaCV', $this->rutaCV])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
