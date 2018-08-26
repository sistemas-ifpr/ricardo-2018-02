<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Titulos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="titulos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'artista')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textInput() ?>

    <?= $form->field($model, 'ano_lancamento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
