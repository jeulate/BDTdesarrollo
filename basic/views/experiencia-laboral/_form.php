<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\ExperienciaLaboral */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="experiencia-laboral-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?php echo $form->field($model,'fechaInicio')->
    widget(DatePicker::className(),[
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'yearRange' => '-105:+0)',
            'changeYear' => true]
    ]) ?>
    
    <?php echo $form->field($model,'fechaFinal')->
    widget(DatePicker::className(),[
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'yearRange' => '-105:+0)',
            'changeYear' => true]
    ]) ?>

    <?= $form->field($model, 'estadoLaboral')->dropDownList(array('T'=>'Trabajando','B'=>'Buscando')) ?>

    <?= $form->field($model, 'cargo')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'idEmpresa')->dropDownList($model->getcomboEmpresas()) ?>

    <?= $form->field($model, 'motivoRetiro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correoReferencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombreReferencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargoReferencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idEmpresaReferencia')->dropDownList($model->getcomboEmpresas()) ?>

    <?= $form->field($model, 'telefonoReferencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idPerfil')->textInput() ?>
    
    <?= $form->field($model, 'estado')->dropDownList(array('F'=>'Falta verificar','V'=>'Verificado')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
