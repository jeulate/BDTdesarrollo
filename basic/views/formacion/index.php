<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Formacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Formacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idPerfil',
            'idTipo',
            'titulo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
