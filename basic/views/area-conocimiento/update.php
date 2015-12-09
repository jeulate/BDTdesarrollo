<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AreaConocimiento */

$this->title = 'Update Area Conocimiento: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Area Conocimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="area-conocimiento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
