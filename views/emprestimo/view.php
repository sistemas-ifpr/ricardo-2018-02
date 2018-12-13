<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\emprestimo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Emprestimos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emprestimo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Alterar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirmar' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'identificador',
            'data_emprestimo',
            'cliente',
            'funcionario_reserva',
            //'ativo',
            ['attribute'=>'ativo',
                //'label'=> 'Ativo',
                'value' => function ($model) {
                    return ($model->ativo == 0)? 'Não' : 'Sim';
                }
            ],
            'data_devolucao',
        ],
    ]) ?>

</div>
