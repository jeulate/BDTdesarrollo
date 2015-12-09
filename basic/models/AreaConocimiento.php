<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "areaconocimiento".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property Conocimiento[] $conocimientos
 * @property Perfil[] $idPerfils
 */
class AreaConocimiento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'areaconocimiento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 50]
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
    public function getConocimientos()
    {
        return $this->hasMany(Conocimiento::className(), ['idAreaConocimiento' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPerfils()
    {
        return $this->hasMany(Perfil::className(), ['id' => 'idPerfil'])->viaTable('conocimiento', ['idAreaConocimiento' => 'id']);
    }
}
