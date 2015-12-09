<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExperienciaLaboralSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="experiencia-laboral-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fechaInicio') ?>

    <?= $form->field($model, 'fechaFinal') ?>

    <?= $form->field($model, 'estadoLaboral') ?>

    <?= $form->field($model, 'cargo') ?>

    <?php // echo $form->field($model, 'idEmpresa') ?>

    <?php // echo $form->field($model, 'motivoRetiro') ?>

    <?php // echo $form->field($model, 'correoReferencia') ?>

    <?php // echo $form->field($model, 'nombreReferencia') ?>

    <?php // echo $form->field($model, 'cargoReferencia') ?>

    <?php // echo $form->field($model, 'idEmpresaReferencia') ?>

    <?php // echo $form->field($model, 'telefonoReferencia') ?>

    <?php // echo $form->field($model, 'idPerfil') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
