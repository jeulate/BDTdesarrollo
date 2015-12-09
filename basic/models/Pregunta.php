<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pregunta".
 *
 * @property integer $id
 * @property string $codFormulario
 * @property string $descripcion
 *
 * @property Formulario $codFormulario0
 * @property Respuesta[] $respuestas
 */
class Pregunta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pregunta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'codFormulario', 'descripcion'], 'required'],
            [['id'], 'integer'],
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
            'codFormulario' => 'Cod Formulario',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodFormulario0()
    {
        return $this->hasOne(Formulario::className(), ['codigo' => 'codFormulario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRespuestas()
    {
        return $this->hasMany(Respuesta::className(), ['idPregunta' => 'id', 'codFormulario' => 'codFormulario']);
    }
}
