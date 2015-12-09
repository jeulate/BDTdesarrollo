<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "conocimiento".
 *
 * @property integer $idPerfil
 * @property integer $idAreaConocimiento
 *
 * @property Areaconocimiento $idAreaConocimiento0
 * @property Perfil $idPerfil0
 */
class Conocimiento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'conocimiento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPerfil', 'idAreaConocimiento'], 'required'],
            [['idPerfil', 'idAreaConocimiento'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPerfil' => 'Id Perfil',
            'idAreaConocimiento' => 'Id Area Conocimiento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAreaConocimiento0()
    {
        return $this->hasOne(Areaconocimiento::className(), ['id' => 'idAreaConocimiento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPerfil0()
    {
        return $this->hasOne(Perfil::className(), ['id' => 'idPerfil']);
    }
}
