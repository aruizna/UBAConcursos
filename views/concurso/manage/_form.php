<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\TipoConcurso;
use app\models\Facultad;
use app\models\Categoria;
use app\models\Dedicacion;
use app\models\AreaDepartamento;

/* @var $this yii\web\View */
/* @var $model app\models\ConcursoPendiente */
/* @var $form yii\widgets\ActiveForm */

// Definir las listas necesarias para los dropdowns
$tiposConcursoList = TipoConcurso::find()->select(['descripcion_tipo_concurso', 'id_tipo_concurso'])->indexBy('id_tipo_concurso')->column();
$facultadesList = Facultad::find()->select(['nombre_facultad', 'id_facultad'])->indexBy('id_facultad')->column();
$categoriasList = Categoria::find()
    ->select(['descripcion_categoria', 'id_categoria'])
    ->where(['mostrar_en_propuesta' => 's']) // Filtra solo las categorías con 's' en mostrar_en_propuesta
    ->indexBy('id_categoria')
    ->column();
$dedicacionesList = Dedicacion::find()->select(['descripcion_dedicacion', 'id_dedicacion'])->indexBy('id_dedicacion')->column();
$areasDepartamentoList = AreaDepartamento::find()
    ->select(['descripcion_area_departamento', 'id_area_departamento'])
    ->where(['id_facultad' => $model->id_facultad, 'activa' => 1]) // Filtra por id_facultad y áreas activas
    ->indexBy('id_area_departamento')
    ->column();
?>
?>

<div class="concurso-pendiente-form" style="padding: 20px; background-color: #f4f7fa; border: 1px solid #1d2554; border-radius: 0px;">

    <?php $form = ActiveForm::begin([
        'id' => 'concurso-pendiente-form-' . $model->id_concurso_pendiente,
        'action' => ['update', 'id' => $model->id_concurso_pendiente],
        'method' => 'post',
    ]); ?>

    <?= $form->field($model, 'numero_expediente')->textInput(['maxlength' => true, 'style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'id_tipo_concurso')->dropDownList($tiposConcursoList, [
            'prompt' => 'Seleccione un Tipo de Concurso',
            'id' => 'tipo-concurso',
            'style' => 'border-radius: 0; border-color: #1d2554;'
        ]) ?>

    <?= $form->field($model, 'id_facultad')->dropDownList($facultadesList, [
            'prompt' => 'Seleccione una Facultad',
            'style' => 'border-radius: 0; border-color: #1d2554;'
        ]) ?>

    <?= $form->field($model, 'id_categoria')->dropDownList($categoriasList, [
            'prompt' => 'Seleccione una Categoría',
            'style' => 'border-radius: 0; border-color: #1d2554;'
        ]) ?>

    <?= $form->field($model, 'id_dedicacion')->dropDownList($dedicacionesList, [
            'prompt' => 'Seleccione una Dedicación',
            'style' => 'border-radius: 0; border-color: #1d2554;'
        ]) ?>

    <?= $form->field($model, 'id_area_departamento')->dropDownList($areasDepartamentoList, [
            'prompt' => 'Seleccione un Área/Departamento',
            'style' => 'border-radius: 0; border-color: #1d2554;'
        ]) ?>

    <?= $form->field($model, 'cantidad_de_puestos')->textInput(['style' => 'border-radius: 0; border-color: #1d2554;']) ?>

    <?= $form->field($model, 'fecha_inicio_inscripcion')->input('date', [
    'style' => 'border-radius: 0; border-color: #1d2554;',
    'value' => $model->fecha_inicio_inscripcion ? date('Y-m-d', strtotime($model->fecha_inicio_inscripcion)) : '', // Ajusta la fecha al formato correcto
]) ?>

<?= $form->field($model, 'fecha_fin_inscripcion')->input('date', [
    'style' => 'border-radius: 0; border-color: #1d2554;',
    'value' => $model->fecha_fin_inscripcion ? date('Y-m-d', strtotime($model->fecha_fin_inscripcion)) : '', // Ajusta la fecha al formato correcto
]) ?>

<?= $form->field($model, 'hora_inicio_inscripcion')->input('time', ['style' => 'border-radius: 0; border-color: #1d2554;']) ?>

<?= $form->field($model, 'hora_fin_inscripcion')->input('time', ['style' => 'border-radius: 0; border-color: #1d2554;']) ?>


<?= $form->field($model, 'fecha_publicacion')->input('date', [
    'style' => 'border-radius: 0; border-color: #1d2554;',
    'value' => $model->fecha_publicacion ? date('Y-m-d', strtotime($model->fecha_publicacion)) : '', // Ajusta la fecha al formato correcto
]) ?>

    <?= $form->field($model, 'comentario')->textInput(['maxlength' => true, 'style' => 'border-radius: 0; border-color: #1d2554;']) ?>



    <?php ActiveForm::end(); ?>
</div>
