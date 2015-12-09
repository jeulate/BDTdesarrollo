<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConocimientoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Conocimientos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conocimiento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Conocimiento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idPerfil',
            'idAreaConocimiento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
