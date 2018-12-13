<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Funcionarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funcionarios-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Funcionarios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'id',
            'nome',
            'cpf',
            'telefone',
            'celular',
            //'endereco',
            //'data_adimicao',
            [
                'attribute'=>'data_adimicao',
                'format'=>['DateTime','php:d/m/Y']
            ],
            //'data_demicao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
