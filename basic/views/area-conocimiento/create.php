<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AreaConocimiento */

$this->title = 'Create Area Conocimiento';
$this->params['breadcrumbs'][] = ['label' => 'Area Conocimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="area-conocimiento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
