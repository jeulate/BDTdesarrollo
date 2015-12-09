<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ExperienciaLaboral */

$this->title = 'Create Experiencia Laboral';
$this->params['breadcrumbs'][] = ['label' => 'Experiencia Laborals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experiencia-laboral-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
