<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\bootstrap5\Modal;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $expedientesList array */
/* @var $facultadesList array */

$this->title = 'Nómina de Preinscriptos';
?>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<style>
body {
    font-family: "Bitter", serif;
    font-weight: 400;
    font-size: 14px;
    color: #1d2554;
    margin: 0;
    padding: 0;
}

.nomina-preinscriptos h1 {
    font-size: 40px;
    font-weight: 900;
    color: #1d2554;
    margin-bottom: 30px;
    text-align: center;
}

.grid-view {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 30px;
}

.grid-view th, .grid-view td {
    border: 1px solid #1d2554;
    padding: 10px;
    text-align: left;
    font-size: 14px;
    color: #1d2554;
}

.grid-view th {
    background-color: #f7a600;
    color: #FFFFFF;
    font-weight: 600;
}

.grid-view tbody tr:nth-child(even) {
    background-color: #f4f7fa;
}

.grid-view tbody tr:hover {
    background-color: #bdd7ed;
}

.btn {
    border-radius: 0;
    font-weight: 600;
    text-transform: uppercase;
    padding: 5px 10px;
    transition: background-color 0.3s, color 0.3s;
}

.btn-info {
    background-color: #1d2554;
    color: #FFFFFF;
}

.btn-info:hover {
    background-color: #91bde1;
    color: #FFFFFF;
}

.search-form {
    margin-bottom: 20px;
}

.search-form .form-group {
    margin-top: 15px;
}
</style>

<div class="nomina-preinscriptos">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="search-form">
        <?php $form = ActiveForm::begin([
            'method' => 'get',
            'action' => ['concurso/nomina-preinscriptos'],
        ]); ?>

        <div class="row">
            <div class="col-md-6">
                <?= Html::label('Expediente', 'expediente') ?>
                <?= Html::dropDownList('expediente', null, $expedientesList, ['class' => 'form-control', 'prompt' => 'Seleccione un Expediente']) ?>
            </div>
            <div class="col-md-6">
                <?= Html::label('Unidad Académica', 'unidad_academica') ?>
                <?= Html::dropDownList('unidad_academica', null, $facultadesList, ['class' => 'form-control', 'prompt' => 'Seleccione una Unidad Académica']) ?>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Filtrar', ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => 'Usuario',
                'value' => function ($model) {
                    return $model['username'] . ' (' . $model['email'] . ')';
                },
            ],
            [
                'label' => 'Número de Expediente',
                'value' => function ($model) {
                    return $model['numero_expediente'] ?: 'N/A';
                },
            ],
            [
                'label' => 'Unidad Académica',
                'value' => function ($model) {
                    return $model['nombre_facultad'] ?: 'N/A';
                },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view-more}',
                'buttons' => [
                    'view-more' => function ($url, $model, $key) {
                        return Html::button('Ver más', [
                            'class' => 'btn btn-info',
                            'data-bs-toggle' => 'modal',
                            'data-bs-target' => '#viewModal' . $model['id'],
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>

    <?php foreach ($dataProvider->models as $model): ?>
        <?php
        Modal::begin([
            'id' => 'viewModal' . $model['id'],
            'title' => 'Detalles del Preinscripto',
            'footer' => Html::button('Cerrar', ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal']),
        ]);

        echo '<div class="modal-body">';
        echo '<p><strong>Tipo de Concurso:</strong> ' . ($model['descripcion_tipo_concurso'] ?: 'N/A') . '</p>';
        echo '<p><strong>Facultad:</strong> ' . ($model['nombre_facultad'] ?: 'N/A') . '</p>';
        echo '<p><strong>Categoría:</strong> ' . ($model['descripcion_categoria'] ?: 'N/A') . '</p>';
        echo '<p><strong>Dedicación:</strong> ' . ($model['descripcion_dedicacion'] ?: 'N/A') . '</p>';
        echo '<p><strong>Área/Departamento:</strong> ' . ($model['descripcion_area_departamento'] ?: 'N/A') . '</p>';
        echo '<p><strong>Cantidad de Puestos:</strong> ' . ($model['cantidad_de_puestos'] ?: 'N/A') . '</p>';
        echo '<p><strong>Fecha Inicio Inscripción:</strong> ' . Yii::$app->formatter->asDate($model['fecha_inicio_inscripcion'], 'php:d/m/Y') . '</p>';
        echo '<p><strong>Fecha Fin Inscripción:</strong> ' . Yii::$app->formatter->asDate($model['fecha_fin_inscripcion'], 'php:d/m/Y') . '</p>';
        echo '<p><strong>Hora Inicio Inscripción:</strong> ' . ($model['hora_inicio_inscripcion'] ?: 'N/A') . '</p>';
        echo '<p><strong>Hora Fin Inscripción:</strong> ' . ($model['hora_fin_inscripcion'] ?: 'N/A') . '</p>';
        echo '<p><strong>Fecha Publicación:</strong> ' . Yii::$app->formatter->asDate($model['fecha_publicacion'], 'php:d/m/Y') . '</p>';
        echo '<p><strong>Documento:</strong> ' . $model['doc'] . '</p>';
        echo '</div>';

        Modal::end();
        ?>
    <?php endforeach; ?>

</div>


<script>
document.querySelectorAll('.toggle-detail').forEach(function(element) {
    element.addEventListener('click', function(event) {
        event.preventDefault();
        var id = this.getAttribute('data-id');
        var detail = document.getElementById('detail-' + id);
        detail.style.display = (detail.style.display === 'none' || detail.style.display === '') ? 'block' : 'none';
    });
});
</script>
