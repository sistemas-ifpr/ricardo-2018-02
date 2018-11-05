<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \app\models\Clientes;
use \app\models\Funcionarios;
use \yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\emprestimo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emprestimo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'identificador')->textInput() ?>

    <?= $form->field($model, 'data_emprestimo')->input('date', []) ?>

    <?= $form->field($model, 'cliente')->dropDownList(ArrayHelper::map(Clientes::find()->all(),'id', 'nome')) ?>

    <?= $form->field($model, 'funcionario_reserva')->dropDownList(ArrayHelper::map(Funcionarios::find()->all(),'id', 'nome')) ?>

    <?= $form->field($model, 'ativo')->dropDownList([ '1' => 'Sim' , '0' => 'Não']);?>

    <?= $form->field($model, 'data_devolucao')->input('date', []) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
