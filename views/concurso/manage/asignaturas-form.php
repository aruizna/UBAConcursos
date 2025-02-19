<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = $isUpdate ? 'Editar Asignatura' : 'Agregar Asignatura';
?>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<style>
/* Mismos estilos aplicados */
body {
    font-family: "Bitter", serif;
    font-weight: 400;
    font-size: 14px;
    color: #1d2554;
    background-color: #f4f7fa;
    margin: 0;
    padding: 0;
}

.asignatura-form-container {
    text-align: center;
    margin-top: 50px;
}

.asignatura-form-container h1 {
    font-size: 40px;
    font-weight: 900;
    color: #1d2554;
    margin-bottom: 30px;
}

.asignatura-form {
    width: 95%;
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border: 1px solid #1d2554;
    border-radius: 5px;
}

.asignatura-form .form-group {
    margin-top: 20px;
}

.asignatura-form .form-control {
    border-radius: 0;
    border-color: #1d2554;
}

.btn-success {
    background-color: #f7a600;
    border-color: #f7a600;
    color: #FFFFFF;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    width: 200px;
    border-radius: 0;
    transition: background-color 0.3s;
}

.btn-danger {
    background-color: #d9534f;
    border-color: #d9534f;
    color: #FFFFFF;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    width: 200px;
    border-radius: 0;
    transition: background-color 0.3s;
}

.input-group {
    display: flex;
    align-items: center;
    gap: 5px;
    width: 100%;
    justify-content: center;
}

.input-group input {
    flex: 1;
    text-align: center;
    max-width: 120px;
}

.input-group span {
    font-weight: bold;
    color: #1d2554;
}
</style>

<div class="asignatura-form-container">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="asignatura-form">
        <?php $form = ActiveForm::begin(); ?>

        <!-- Unidad Académica -->
        <?= $form->field($model, 'id_facultad')->dropDownList(
            \yii\helpers\ArrayHelper::map($facultades, 'id_facultad', 'nombre_facultad'),
            ['prompt' => 'Seleccione la Unidad Académica']
        ) ?>

        <!-- Descripción de la Asignatura -->
        <?= $form->field($model, 'descripcion_asignatura')->textInput(['maxlength' => true]) ?>

        <!-- Número de Resolución con formato -->
        <div class="form-group">
            <label for="numero-resolucion">Número de Resolución</label>
            <div class="input-group">
                <span>RESCS-</span>
                <?= $form->field($model, 'numero_resolucion_ano', [
                    'template' => "{input}\n{error}",
                    'options' => ['class' => '']
                ])->textInput([
                    'maxlength' => 4,
                    'placeholder' => 'Año',
                    'id' => 'numero-resolucion-ano',
                    'class' => 'form-control'
                ]) ?>
                <span>-</span>
                <?= $form->field($model, 'numero_resolucion_numero', [
                    'template' => "{input}\n{error}",
                    'options' => ['class' => '']
                ])->textInput([
                    'maxlength' => 8,
                    'placeholder' => 'Número',
                    'id' => 'numero-resolucion-numero',
                    'class' => 'form-control'
                ]) ?>
                <span>-E-UBA</span>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton($isUpdate ? 'Actualizar' : 'Guardar', ['class' => 'btn btn-success']) ?>
            <?= Html::a('Cancelar', ['manage-asignaturas'], ['class' => 'btn btn-danger']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
