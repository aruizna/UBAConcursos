<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConcursoPendiente */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="concurso-pendiente-form" style="padding: 20px; background-color: #f4f7fa; border: 1px solid #1d2554; border-radius: 0px;">

    <?php $form = ActiveForm::begin([
        'id' => 'concurso-pendiente-form-' . $model->id_concurso_pendiente,
        'action' => ['update', 'id' => $model->id_concurso_pendiente],
        'method' => 'post',
    ]); ?>

    <?= $form->field($model, 'numero_expediente')->textInput(['maxlength' => true, 'style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'id_tipo_concurso')->textInput(['style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'id_facultad')->textInput(['style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'id_categoria')->textInput(['style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'id_dedicacion')->textInput(['style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'id_area_departamento')->textInput(['style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'cantidad_de_puestos')->textInput(['style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'fecha_inicio_inscripcion')->textInput(['type' => 'date', 'style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'fecha_fin_inscripcion')->textInput(['type' => 'date', 'style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'hora_inicio_inscripcion')->textInput(['maxlength' => true, 'type' => 'time', 'style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'hora_fin_inscripcion')->textInput(['maxlength' => true, 'type' => 'time', 'style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'fecha_publicacion')->textInput(['type' => 'date', 'style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'comentario')->textInput(['maxlength' => true, 'style' => 'border-radius: 0; border-color: #1d2554;']) ?>
 

    <?php ActiveForm::end(); ?>

</div>
