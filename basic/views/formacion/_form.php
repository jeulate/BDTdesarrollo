<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Formacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="formacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idPerfil')->textInput() ?>

    <?= $form->field($model, 'idTipo')->textInput() ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
