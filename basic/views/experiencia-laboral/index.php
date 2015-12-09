<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExperienciaLaboralSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Experiencia Laborals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experiencia-laboral-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Experiencia Laboral', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fechaInicio',
            'fechaFinal',
            'estadoLaboral',
            'cargo',
            // 'idEmpresa',
            // 'motivoRetiro',
            // 'correoReferencia',
            // 'nombreReferencia',
            // 'cargoReferencia',
            // 'idEmpresaReferencia',
            // 'telefonoReferencia',
            // 'idPerfil',
            // 'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
