<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConcursoPendiente */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="concurso-pendiente-form">

    <?php $form = ActiveForm::begin([
        'id' => 'concurso-pendiente-form-' . $model->id_concurso_pendiente, // Añade un ID único para cada formulario
        'action' => ['update', 'id' => $model->id_concurso_pendiente], // Asegúrate de que la acción apunte a la actualización
        'method' => 'post', // El método debe ser POST para enviar los datos
    ]); ?>

    <?= $form->field($model, 'numero_expediente')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'id_tipo_concurso')->textInput() ?>
    <?= $form->field($model, 'id_facultad')->textInput() ?>
    <?= $form->field($model, 'id_categoria')->textInput() ?>
    <?= $form->field($model, 'id_categoria_minima')->textInput() ?>
    <?= $form->field($model, 'id_dedicacion')->textInput() ?>
    <?= $form->field($model, 'id_dedicacion_minima')->textInput() ?>
    <?= $form->field($model, 'id_area_departamento')->textInput() ?>
    <?= $form->field($model, 'cantidad_de_puestos')->textInput() ?>
    <?= $form->field($model, 'fecha_inicio_inscripcion')->textInput(['type' => 'date']) ?>
    <?= $form->field($model, 'fecha_fin_inscripcion')->textInput(['type' => 'date']) ?>
    <?= $form->field($model, 'hora_inicio_inscripcion')->textInput(['maxlength' => true, 'type' => 'time']) ?>
    <?= $form->field($model, 'hora_fin_inscripcion')->textInput(['maxlength' => true, 'type' => 'time']) ?>
    <?= $form->field($model, 'id_tipo_informe')->textInput() ?>
    <?= $form->field($model, 'fecha_publicacion')->textInput(['type' => 'date']) ?>
    <?= $form->field($model, 'cantidad_dias_publicacion')->textInput() ?>
    <?= $form->field($model, 'fecha_publicacion_prueba_oposicion')->textInput(['type' => 'date']) ?>
    <?= $form->field($model, 'id_tipo_presupuesto')->textInput() ?>
    <?= $form->field($model, 'ultimo_numero_movimiento')->textInput() ?>
    <?= $form->field($model, 'comentario')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'lck_concurso')->textInput() ?>
    <?= $form->field($model, 'fecha_sorteo_publicada')->textInput(['type' => 'date']) ?>
    <?= $form->field($model, 'fecha_entrevista_prueba_publicada')->textInput(['type' => 'date']) ?>
    <?= $form->field($model, 'estado_propuesta_jurados_preliminar')->textInput() ?>
    <?= $form->field($model, 'estado_propuesta_preliminar')->textInput() ?>
    <?= $form->field($model, 'firmantes_comision_seleccionados')->textInput() ?>

    <?php ActiveForm::end(); ?>

</div>
