<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FIO')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gender')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'role_in_the_project')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
