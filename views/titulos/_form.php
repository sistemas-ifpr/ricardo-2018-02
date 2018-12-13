<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CadTitulos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cad-titulos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'artista')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textInput() ?>

    <?= $form->field($model, 'ano_lancamento')->input('date', ["y"]) ?>


    <?= $form->field($model, 'tipo')->dropDownList(['CD' => 'CD', 'DVD' => 'DVD']) ?>


    <?= $form->field($model, 'foto')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
