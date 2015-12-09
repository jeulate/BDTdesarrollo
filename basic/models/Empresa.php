<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $telefono
 * @property string $direccion
 *
 * @property Experiencialaboral[] $experiencialaborals
 * @property Experiencialaboral[] $experiencialaborals0
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 25],
            [['telefono'], 'string', 'max' => 20],
            [['direccion'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'telefono' => 'Telefono',
            'direccion' => 'Direccion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExperiencialaborals()
    {
        return $this->hasMany(Experiencialaboral::className(), ['idEmpresa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExperiencialaborals0()
    {
        return $this->hasMany(Experiencialaboral::className(), ['idEmpresaReferencia' => 'id']);
    }
}
