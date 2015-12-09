<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "formacion".
 *
 * @property integer $idPerfil
 * @property integer $idTipo
 * @property string $titulo
 *
 * @property Perfil $idPerfil0
 * @property Tipoformacion $idTipo0
 */
class Formacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'formacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPerfil', 'idTipo', 'titulo'], 'required'],
            [['idPerfil', 'idTipo'], 'integer'],
            [['titulo'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPerfil' => 'Id Perfil',
            'idTipo' => 'Id Tipo',
            'titulo' => 'Titulo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPerfil0()
    {
        return $this->hasOne(Perfil::className(), ['id' => 'idPerfil']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipo0()
    {
        return $this->hasOne(Tipoformacion::className(), ['id' => 'idTipo']);
    }
}
