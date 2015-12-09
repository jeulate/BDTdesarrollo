<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Formacion */

$this->title = $model->idPerfil;
$this->params['breadcrumbs'][] = ['label' => 'Formacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idPerfil' => $model->idPerfil, 'idTipo' => $model->idTipo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idPerfil' => $model->idPerfil, 'idTipo' => $model->idTipo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idPerfil',
            'idTipo',
            'titulo',
        ],
    ]) ?>

</div>
