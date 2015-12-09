<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Perfil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'genero')->dropDownList(array('M'=>'Masculino','F'=>'Femenino')) ?>
    
    <?php echo $form->field($model,'fechaNacimiento')->
    widget(DatePicker::className(),[
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'yearRange' => '-105:+0)',
            'changeYear' => true]
    ]) ?>

    <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorAgregado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'renumeracionActual')->textInput() ?>

    <?= $form->field($model, 'renumeracionIdeal')->textInput() ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'licenciaConducir')->dropDownList(array('N'=>'No tiene','M'=>'Categoría M','P'=>'Categoría P','A'=>'Categoría A','B'=>'Categoría B','C'=>'Categoría C')) ?>

    <?= $form->field($model, 'rutaCV')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'estado')->dropDownList(array('D'=>'Disponible','T'=>'Trabajando')) ?>
    <!--aqui me quede-->
<!--    <?php
//        $titles = Yii::$app->db2->createCommand("SELECT nombre FROM Grupo WHERE codigo= 'ADM'")->queryOne();
//     echo $titles;
     ?>
    <p>             
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
