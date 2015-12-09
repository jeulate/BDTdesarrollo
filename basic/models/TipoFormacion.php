<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipoformacion".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property Formacion[] $formacions
 * @property Perfil[] $idPerfils
 */
class TipoFormacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipoformacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 25]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormacions()
    {
        return $this->hasMany(Formacion::className(), ['idTipo' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPerfils()
    {
        return $this->hasMany(Perfil::className(), ['id' => 'idPerfil'])->viaTable('formacion', ['idTipo' => 'id']);
    }
}
