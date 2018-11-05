<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emprestimos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emprestimo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Emprestimo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
