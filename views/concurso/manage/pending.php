<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap5\Modal;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modificar Llamado de Concursos';
$this->params['breadcrumbs'][] = ['label' => 'Gestionar Nuevos Concursos', 'url' => ['manage']];
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<style>
/* Estilos previos */
body {
    font-family: "Bitter", serif;
    font-weight: 400;
    font-size: 14px;
    color: #1d2554;
    background-color: #f4f7fa;
    margin: 0;
    padding: 0;
}

.concurso-pendiente-index h1 {
    font-size: 40px;
    font-weight: 900;
    color: #1d2554;
    margin-bottom: 30px;
    text-align: center;
}

.grid-view {
    width: 100%;
    margin-bottom: 30px;
    border: 1px solid #1d2554;
}

.grid-view th, .grid-view td {
    padding: 10px;
    text-align: left;
    font-size: 14px;
    color: #1d2554;
    border: 1px solid #1d2554;
}

.grid-view th {
    background-color: #f7a600;
    color: #FFFFFF;
    font-weight: 600;
    text-transform: uppercase;
}

.grid-view tbody tr:nth-child(even) {
    background-color: #e6f0fa;
}

.grid-view tbody tr:hover {
    background-color: #bdd7ed;
    cursor: pointer;
}

.btn {
    border-radius: 0;
    font-weight: 600;
    text-transform: uppercase;
    padding: 8px 12px;
    transition: background-color 0.3s, color 0.3s;
}

.btn-info {
    background-color: #1d2554;
    color: #FFFFFF;
    border: 1px solid #1d2554;
}

.btn-info:hover {
    background-color: #91bde1;
    border-color: #1d2554;
}

.btn-primary {
    background-color: #f7a600;
    border-color: #f7a600;
    color: #FFFFFF;
}

.btn-primary:hover {
    background-color: #fccd8e;
    border-color: #f7a600;
}

.modal-header, .modal-footer {
    background-color: #f7a600;
    color: #FFFFFF;
    border: none;
    text-transform: uppercase;
}

.modal-content {
    border-radius: 0;
    border: 1px solid #1d2554;
}

.modal-body {
    background-color: #f4f7fa;
    padding: 20px;
}

.modal-footer .btn-secondary {
    background-color: #1d2554;
    color: #FFFFFF;
    border-color: #1d2554;
}

.modal-footer .btn-secondary:hover {
    background-color: #91bde1;
    border-color: #1d2554;
    color: #FFFFFF;
}
</style>

<div class="concurso-pendiente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_concurso_pendiente',
            'numero_expediente',
            [
                'attribute' => 'id_tipo_concurso',
                'value' => function($model) {
                    return $model->tipoConcurso->descripcion_tipo_concurso ?? 'N/A';
                },
                'label' => 'Tipo de Concurso'
            ],
            [
                'attribute' => 'id_facultad',
                'value' => function($model) {
                    return $model->facultad->nombre_facultad ?? 'N/A';
                },
                'label' => 'Facultad'
            ],
            [
                'attribute' => 'id_categoria',
                'value' => function($model) {
                    return $model->categoria->descripcion_categoria ?? 'N/A';
                },
                'label' => 'Categoría'
            ],
            [
                'attribute' => 'id_dedicacion',
                'value' => function($model) {
                    return $model->dedicacion->descripcion_dedicacion ?? 'N/A';
                },
                'label' => 'Dedicación'
            ],
            [
                'attribute' => 'id_area_departamento',
                'value' => function($model) {
                    return $model->areaDepartamento->descripcion_area_departamento ?? 'N/A';
                },
                'label' => 'Área/Departamento'
            ],
            // Otros campos que desees mostrar

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {edit}', // Personaliza según tus necesidades
                'buttons' => [
                    'view' => function ($url, $model, $key) {
                        return Html::button('Ver', [
                            'class' => 'btn btn-info',
                            'data-bs-toggle' => 'modal',
                            'data-bs-target' => '#viewModal' . $model->id_concurso_pendiente,
                        ]);
                    },
                    'edit' => function ($url, $model, $key) {
                        return Html::button('Editar', [
                            'class' => 'btn btn-primary',
                            'data-bs-toggle' => 'modal',
                            'data-bs-target' => '#editModal' . $model->id_concurso_pendiente,
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>

</div>

<?php
// Generar un modal para ver y otro para editar cada concurso
foreach ($dataProvider->models as $model) {
    // Modal para ver el concurso
    Modal::begin([
        'id' => 'viewModal' . $model->id_concurso_pendiente,
        'title' => 'Detalles del Concurso',
        'footer' => Html::button('Cerrar', ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal']),
    ]);

    echo '<div class="modal-body">';
    echo '<p><strong>Número de Expediente:</strong> ' . Html::encode($model->numero_expediente) . '</p>';
    echo '<p><strong>Tipo de Concurso:</strong> ' . Html::encode($model->tipoConcurso->descripcion_tipo_concurso ?? 'N/A') . '</p>';
    echo '<p><strong>Facultad:</strong> ' . Html::encode($model->facultad->nombre_facultad ?? 'N/A') . '</p>';
    echo '<p><strong>Categoría:</strong> ' . Html::encode($model->categoria->descripcion_categoria ?? 'N/A') . '</p>';
    echo '<p><strong>Dedicación:</strong> ' . Html::encode($model->dedicacion->descripcion_dedicacion ?? 'N/A') . '</p>';
    echo '<p><strong>Área/Departamento:</strong> ' . Html::encode($model->areaDepartamento->descripcion_area_departamento ?? 'N/A') . '</p>';
    echo '<p><strong>Cantidad de Puestos:</strong> ' . Html::encode($model->cantidad_de_puestos) . '</p>';
    echo '<p><strong>Fecha Inicio Inscripción:</strong> ' . Html::encode(Yii::$app->formatter->asDate($model->fecha_inicio_inscripcion, 'php:d/m/Y')) . '</p>';
    echo '<p><strong>Fecha Fin Inscripción:</strong> ' . Html::encode(Yii::$app->formatter->asDate($model->fecha_fin_inscripcion, 'php:d/m/Y')) . '</p>';
    echo '<p><strong>Hora Inicio Inscripción:</strong> ' . Html::encode($model->hora_inicio_inscripcion) . '</p>';
    echo '<p><strong>Hora Fin Inscripción:</strong> ' . Html::encode($model->hora_fin_inscripcion) . '</p>';
    echo '<p><strong>Fecha Publicación:</strong> ' . Html::encode(Yii::$app->formatter->asDate($model->fecha_publicacion, 'php:d/m/Y')) . '</p>';
    echo '<p><strong>Comentario:</strong> ' . Html::encode($model->comentario) . '</p>';
    echo '</div>';

    Modal::end();

    // Modal para editar el concurso
    Modal::begin([
        'id' => 'editModal' . $model->id_concurso_pendiente,
        'title' => 'Editar Concurso',
        'dialogOptions' => ['class' => 'modal-dialog modal-lg modal-dialog-centered'], // Clases para tamaño y centrado
        'footer' => Html::button('Guardar', [
            'class' => 'btn btn-success',
            'onclick' => '$("#concurso-pendiente-form-' . $model->id_concurso_pendiente . '").submit();', // Enviar el formulario al hacer clic en "Guardar"
        ]) . Html::button('Cerrar', ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal']),
    ]);
    
    echo '<div class="modal-body">';
    echo $this->render('_form', ['model' => $model]);
    echo '</div>';

    Modal::end();
}
?>
