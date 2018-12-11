<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CadTitulos */

$this->title = 'Update Cad Titulos: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cad Titulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cad-titulos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
