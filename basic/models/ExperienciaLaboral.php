<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "experiencialaboral".
 *
 * @property integer $id
 * @property string $fechaInicio
 * @property string $fechaFinal
 * @property string $estadoLaboral
 * @property string $cargo
 * @property integer $idEmpresa
 * @property string $motivoRetiro
 * @property string $correoReferencia
 * @property string $nombreReferencia
 * @property string $cargoReferencia
 * @property integer $idEmpresaReferencia
 * @property string $telefonoReferencia
 * @property integer $idPerfil
 * @property string $estado
 *
 * @property Empresa $idEmpresa0
 * @property Empresa $idEmpresaReferencia0
 * @property Perfil $idPerfil0
 */
class ExperienciaLaboral extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'experiencialaboral';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fechaInicio', 'fechaFinal', 'estadoLaboral', 'idEmpresa', 'motivoRetiro', 'idEmpresaReferencia', 'idPerfil', 'estado'], 'required'],
            [['fechaInicio', 'fechaFinal'], 'safe'],
            [['idEmpresa', 'idEmpresaReferencia', 'idPerfil'], 'integer'],
            [['estadoLaboral', 'estado'], 'string', 'max' => 1],
            [['cargo', 'correoReferencia', 'nombreReferencia', 'cargoReferencia'], 'string', 'max' => 50],
            [['motivoRetiro'], 'string', 'max' => 100],
            [['telefonoReferencia'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fechaInicio' => 'Fecha Inicio',
            'fechaFinal' => 'Fecha Final',
            'estadoLaboral' => 'Estado Laboral',
            'cargo' => 'Cargo',
            'idEmpresa' => 'Id Empresa',
            'motivoRetiro' => 'Motivo Retiro',
            'correoReferencia' => 'Correo Referencia',
            'nombreReferencia' => 'Nombre Referencia',
            'cargoReferencia' => 'Cargo Referencia',
            'idEmpresaReferencia' => 'Id Empresa Referencia',
            'telefonoReferencia' => 'Telefono Referencia',
            'idPerfil' => 'Id Perfil',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEmpresa0()
    {
        return $this->hasOne(Empresa::className(), ['id' => 'idEmpresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEmpresaReferencia0()
    {
        return $this->hasOne(Empresa::className(), ['id' => 'idEmpresaReferencia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPerfil0()
    {
        return $this->hasOne(Perfil::className(), ['id' => 'idPerfil']);
    }
    public function getcomboEmpresas() { 
        $models = Empresa::find()->asArray()->all();
        return \yii\helpers\ArrayHelper::map($models, 'id','nombre');
    }
}
