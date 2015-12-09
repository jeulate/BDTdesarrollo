<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoFormacion */

$this->title = 'Create Tipo Formacion';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Formacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-formacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
