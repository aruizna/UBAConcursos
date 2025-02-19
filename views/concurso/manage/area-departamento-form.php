<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AreaDepartamento */
/* @var $form yii\widgets\ActiveForm */
/* @var $asignaturasList array */
/* @var $asignaturasAsignadas array */
/* @var $facultades array */

$this->title = $model->isNewRecord ? 'Agregar Área/Departamento' : 'Modificar Área/Departamento';
?>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900&display=swap" rel="stylesheet">

<style>
body {
    font-family: "Bitter", serif;
    font-size: 14px;
    color: #1d2554;
    background-color: #f4f7fa;
    margin: 0;
    padding: 0;
}

.area-departamento-form-container {
    width: 90%;
    max-width: 800px;
    margin: 30px auto;
    padding: 20px;
    background-color: #ffffff;
    border: 1px solid #1d2554;
    border-radius: 0;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
}

.area-departamento-form-container h1 {
    font-size: 28px;
    font-weight: bold;
    color: #1d2554;
    text-align: center;
    margin-bottom: 20px;
}

.area-departamento-form .form-group {
    margin-bottom: 15px;
}

.area-departamento-form .form-control {
    border-radius: 0;
    border-color: #1d2554;
    font-size: 14px;
    padding: 8px;
}

.area-departamento-form .btn {
    font-size: 16px;
    text-transform: uppercase;
    padding: 10px;
    border-radius: 0;
    transition: background-color 0.3s;
}

.btn-success {
    background-color: #f7a600;
    border-color: #f7a600;
    color: #ffffff;
}

.btn-success:hover {
    background-color: #fccd8e;
    border-color: #f7a600;
}

.btn-danger {
    background-color: #d9534f;
    border-color: #d9534f;
    color: #ffffff;
}

.btn-danger:hover {
    background-color: #c9302c;
    border-color: #ac2925;
}

/* Estilos para el selector de asignaturas */
.selector-container {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.selector-box {
    width: 45%;
}

.selector-box h5 {
    font-weight: bold;
    color: #1d2554;
    text-align: center;
    margin-bottom: 10px;
}

.selector-box select {
    width: 100%;
    height: 200px;
    border: 1px solid #1d2554;
    font-size: 14px;
    padding: 5px;
}

.selector-buttons {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.selector-buttons button {
    margin: 5px 0;
    font-size: 16px;
    font-weight: bold;
    width: 40px;
    height: 40px;
    text-align: center;
}

@media screen and (max-width: 768px) {
    .selector-container {
        flex-direction: column;
        align-items: center;
    }
    .selector-box {
        width: 100%;
        margin-bottom: 15px;
    }
}
</style>

<div class="area-departamento-form-container">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['options' => ['class' => 'area-departamento-form']]); ?>

    <!-- Unidad Académica -->
    <?= $form->field($model, 'id_facultad')->dropDownList(
        \yii\helpers\ArrayHelper::map($facultades, 'id_facultad', 'nombre_facultad'),
        ['prompt' => 'Seleccione una Unidad Académica']
    ) ?>

    <!-- Nombre del Departamento -->
    <?= $form->field($model, 'descripcion_area_departamento')->textInput([
        'maxlength' => true,
        'placeholder' => 'Ingrese el nombre del área ó departamento'
    ]) ?>

    <!-- Selector de asignaturas -->
    <div class="form-group">
        <div class="selector-container">
            <div class="selector-box">
                <h5>Asignaturas disponibles</h5>
                <select id="asignaturas-disponibles" multiple>
                    <?php foreach ($asignaturasList as $id => $asignatura): ?>
                        <?php if (!in_array($id, $asignaturasAsignadas)): ?>
                            <option value="<?= $id ?>"><?= $asignatura ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="selector-buttons">
                <button type="button" id="btn-agregar" class="btn btn-primary">&gt;&gt;</button>
                <button type="button" id="btn-quitar" class="btn btn-danger">&lt;&lt;</button>
            </div>
            <div class="selector-box">
                <h5>Asignaturas añadidas</h5>
                <select id="asignaturas-asignadas" multiple>
                    <?php foreach ($asignaturasAsignadas as $id): ?>
                        <option value="<?= $id ?>"><?= $asignaturasList[$id] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>

    <!-- Campo oculto para guardar asignaturas -->
    <?= Html::hiddenInput('asignaturasSeleccionadas', implode(',', $asignaturasAsignadas), ['id' => 'asignaturas-seleccionadas']) ?>

    <div class="form-group text-center">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Cancelar', ['area-departamento'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<script>
document.getElementById('btn-agregar').addEventListener('click', function () {
    moverOpciones('asignaturas-disponibles', 'asignaturas-asignadas');
});

document.getElementById('btn-quitar').addEventListener('click', function () {
    moverOpciones('asignaturas-asignadas', 'asignaturas-disponibles');
});

function moverOpciones(origen, destino) {
    const origenSelect = document.getElementById(origen);
    const destinoSelect = document.getElementById(destino);

    Array.from(origenSelect.selectedOptions).forEach(option => {
        destinoSelect.add(option);
    });

    actualizarCampoOculto();
}

function actualizarCampoOculto() {
    const seleccionadas = Array.from(document.getElementById('asignaturas-asignadas').options)
        .map(option => option.value);
    document.getElementById('asignaturas-seleccionadas').value = seleccionadas.join(',');
}
</script>
