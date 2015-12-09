<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Formacion */

$this->title = 'Update Formacion: ' . ' ' . $model->idPerfil;
$this->params['breadcrumbs'][] = ['label' => 'Formacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPerfil, 'url' => ['view', 'idPerfil' => $model->idPerfil, 'idTipo' => $model->idTipo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="formacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
