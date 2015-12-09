<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "respuesta".
 *
 * @property string $id
 * @property integer $idPregunta
 * @property string $codFormulario
 * @property string $descripcion
 *
 * @property Pregunta $idPregunta0
 * @property Seleccion[] $seleccions
 */
class Respuesta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'respuesta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idPregunta', 'codFormulario', 'descripcion'], 'required'],
            [['idPregunta'], 'integer'],
            [['id'], 'string', 'max' => 1],
            [['codFormulario'], 'string', 'max' => 10],
            [['descripcion'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idPregunta' => 'Id Pregunta',
            'codFormulario' => 'Cod Formulario',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPregunta0()
    {
        return $this->hasOne(Pregunta::className(), ['id' => 'idPregunta', 'codFormulario' => 'codFormulario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeleccions()
    {
        return $this->hasMany(Seleccion::className(), ['idRespuesta' => 'id', 'idPregunta' => 'idPregunta', 'codFormulario' => 'codFormulario']);
    }
}
