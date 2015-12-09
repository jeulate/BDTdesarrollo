<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Conocimiento */

$this->title = 'Update Conocimiento: ' . ' ' . $model->idPerfil;
$this->params['breadcrumbs'][] = ['label' => 'Conocimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPerfil, 'url' => ['view', 'idPerfil' => $model->idPerfil, 'idAreaConocimiento' => $model->idAreaConocimiento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="conocimiento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
