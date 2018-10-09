<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \app\models\Titulos;
use \app\models\Clientes;
use \yii\helpers\ArrayHelper;
use \app\models\Funcionarios;


/* @var $this yii\web\View */
/* @var $model app\models\Reserva */
/* @var $model app\models\Funcionarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reserva-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'identificador')->dropDownList(ArrayHelper::map(Titulos::find()->all(),'id', 'titulo')) ?>
    <?= $form->field($model, 'data_reserva')->input('date', []) ?>

    <?= $form->field($model, 'cliente')->dropDownList(ArrayHelper::map(Clientes::find()->all(),'id', 'nome')) ?>
   
   
    <?= $form->field($model, 'data_baixa_reserva')->input('date', []) ?>

    <?= $form->field($model, 'funcionario_reserva')->dropDownList(ArrayHelper::map(Funcionarios::find()->all(),'id', 'nome')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
