<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Artistas */

$this->title = 'Criar Artistas';
$this->params['breadcrumbs'][] = ['label' => 'Artistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artistas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
