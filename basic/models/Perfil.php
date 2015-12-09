<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfil".
 *
 * @property integer $id
 * @property string $apellidos
 * @property string $nombres
 * @property string $genero
 * @property string $fechaNacimiento
 * @property string $correo
 * @property string $valorAgregado
 * @property double $renumeracionActual
 * @property double $renumeracionIdeal
 * @property string $telefono
 * @property string $celular
 * @property string $licenciaConducir
 * @property string $rutaCV
 * @property string $estado
 *
 * @property Conocimiento[] $conocimientos
 * @property Areaconocimiento[] $idAreaConocimientos
 * @property Experiencialaboral[] $experiencialaborals
 * @property Formacion[] $formacions
 * @property Tipoformacion[] $idTipos
 * @property Seleccion[] $seleccions
 */
class Perfil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['apellidos', 'nombres', 'genero', 'fechaNacimiento', 'correo', 'valorAgregado', 'celular', 'licenciaConducir', 'estado'], 'required'],
            [['fechaNacimiento'], 'safe'],
            [['renumeracionActual', 'renumeracionIdeal'], 'number'],
            [['rutaCV'], 'string'],
            [['apellidos', 'nombres', 'valorAgregado'], 'string', 'max' => 25],
            [['genero', 'licenciaConducir', 'estado'], 'string', 'max' => 1],
            [['correo'], 'string', 'max' => 50],
            [['telefono', 'celular'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'apellidos' => 'Apellidos',
            'nombres' => 'Nombres',
            'genero' => 'Genero',
            'fechaNacimiento' => 'Fecha Nacimiento',
            'correo' => 'Correo',
            'valorAgregado' => 'Valor Agregado',
            'renumeracionActual' => 'Renumeracion Actual',
            'renumeracionIdeal' => 'Renumeracion Ideal',
            'telefono' => 'Telefono',
            'celular' => 'Celular',
            'licenciaConducir' => 'Licencia Conducir',
            'rutaCV' => 'Ruta Cv',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConocimientos()
    {
        return $this->hasMany(Conocimiento::className(), ['idPerfil' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAreaConocimientos()
    {
        return $this->hasMany(Areaconocimiento::className(), ['id' => 'idAreaConocimiento'])->viaTable('conocimiento', ['idPerfil' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExperiencialaborals()
    {
        return $this->hasMany(Experiencialaboral::className(), ['idPerfil' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormacions()
    {
        return $this->hasMany(Formacion::className(), ['idPerfil' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipos()
    {
        return $this->hasMany(Tipoformacion::className(), ['id' => 'idTipo'])->viaTable('formacion', ['idPerfil' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeleccions()
    {
        return $this->hasMany(Seleccion::className(), ['idPerfil' => 'id']);
    }
}
