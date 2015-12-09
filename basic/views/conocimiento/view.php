<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Conocimiento */

$this->title = $model->idPerfil;
$this->params['breadcrumbs'][] = ['label' => 'Conocimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conocimiento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idPerfil' => $model->idPerfil, 'idAreaConocimiento' => $model->idAreaConocimiento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idPerfil' => $model->idPerfil, 'idAreaConocimiento' => $model->idAreaConocimiento], [
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
            'idAreaConocimiento',
        ],
    ]) ?>

</div>
