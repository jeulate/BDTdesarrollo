<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PerfilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perfils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Perfil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'apellidos',
            'nombres',
            'genero',
            'fechaNacimiento',
            // 'correo',
            // 'valorAgregado',
            // 'renumeracionActual',
            // 'renumeracionIdeal',
            // 'telefono',
            // 'celular',
            // 'licenciaConducir',
            // 'rutaCV:ntext',
            // 'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
