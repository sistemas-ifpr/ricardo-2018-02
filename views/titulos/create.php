<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CadTitulos */

$this->title = 'Create Cad Titulos';
$this->params['breadcrumbs'][] = ['label' => 'Cad Titulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cad-titulos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
