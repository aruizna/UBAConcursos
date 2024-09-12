<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap5\Modal;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publicar Concursos Pendientes';
$this->params['breadcrumbs'][] = ['label' => 'Gestionar Nuevos Concursos', 'url' => ['manage']];
$this->params['breadcrumbs'][] = $this->title;
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

.concurso-pendiente-index h1 {
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

.btn-primary {
    background-color: #f7a600;
    border-color: #f7a600;
    color: #FFFFFF;
}

.btn-primary:hover {
    background-color: #fccd8e;
    border-color: #fccd8e;
    color: #FFFFFF;
}

.btn-warning {
    background-color: #ffcc00;
    border-color: #ffcc00;
    color: #1d2554;
}

.btn-warning:hover {
    background-color: #ffe680;
    border-color: #ffe680;
    color: #1d2554;
}

.modal-header, .modal-footer {
    background-color: #f7a600;
    color: #FFFFFF;
    border: none;
}

.modal-content {
    border-radius: 0;
}

.modal-body {
    background-color: #f4f7fa;
}

.modal-footer .btn-secondary {
    background-color: #1d2554;
    color: #FFFFFF;
    border-color: #1d2554;
}

.modal-footer .btn-secondary:hover {
    background-color: #91bde1;
    border-color: #91bde1;
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
                    return $model->tipoConcurso ? $model->tipoConcurso->descripcion_tipo_concurso : 'N/A';
                },
                'label' => 'Tipo de Concurso',
            ],
            [
                'attribute' => 'id_facultad',
                'value' => function($model) {
                    return $model->facultad ? $model->facultad->nombre_facultad : 'N/A';
                },
                'label' => 'Facultad',
            ],
            [
                'attribute' => 'id_categoria',
                'value' => function($model) {
                    return $model->categoria ? $model->categoria->descripcion_categoria : 'N/A';
                },
                'label' => 'Categoría',
            ],
            [
                'attribute' => 'id_dedicacion',
                'value' => function($model) {
                    return $model->dedicacion ? $model->dedicacion->descripcion_dedicacion : 'N/A';
                },
                'label' => 'Dedicación',
            ],
            [
                'attribute' => 'id_area_departamento',
                'value' => function($model) {
                    return $model->areaDepartamento ? $model->areaDepartamento->descripcion_area_departamento : 'N/A';
                },
                'label' => 'Área/Departamento',
            ],
            [
                'attribute' => 'fecha_inicio_inscripcion',
                'value' => function($model) {
                    return $model->fecha_inicio_inscripcion ? Yii::$app->formatter->asDate($model->fecha_inicio_inscripcion, 'dd/MM/yyyy') : 'N/A';
                },
                'label' => 'Fecha Inicio Inscripción',
            ],
            [
                'attribute' => 'fecha_fin_inscripcion',
                'value' => function($model) {
                    return $model->fecha_fin_inscripcion ? Yii::$app->formatter->asDate($model->fecha_fin_inscripcion, 'dd/MM/yyyy') : 'N/A';
                },
                'label' => 'Fecha Fin Inscripción',
            ],
            // Otros campos que desees mostrar

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {edit} {publish}', // Añadido el botón "Editar"
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
                    'publish' => function ($url, $model, $key) {
                        return Html::button('Publicar', [
                            'class' => 'btn btn-warning',
                            'data-bs-toggle' => 'modal',
                            'data-bs-target' => '#publishModal' . $model->id_concurso_pendiente,
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

    echo '<p><strong>Número de Expediente:</strong> ' . $model->numero_expediente . '</p>';
    echo '<p><strong>Tipo de Concurso:</strong> ' . ($model->tipoConcurso ? $model->tipoConcurso->descripcion_tipo_concurso : 'N/A') . '</p>';
    echo '<p><strong>Facultad:</strong> ' . ($model->facultad ? $model->facultad->nombre_facultad : 'N/A') . '</p>';
    echo '<p><strong>Categoría:</strong> ' . ($model->categoria ? $model->categoria->descripcion_categoria : 'N/A') . '</p>';
    echo '<p><strong>Dedicación:</strong> ' . ($model->dedicacion ? $model->dedicacion->descripcion_dedicacion : 'N/A') . '</p>';
    echo '<p><strong>Área/Departamento:</strong> ' . ($model->areaDepartamento ? $model->areaDepartamento->descripcion_area_departamento : 'N/A') . '</p>';
    echo '<p><strong>Fecha Inicio Inscripción:</strong> ' . ($model->fecha_inicio_inscripcion ? Yii::$app->formatter->asDate($model->fecha_inicio_inscripcion, 'dd/MM/yyyy') : 'N/A') . '</p>';
    echo '<p><strong>Fecha Fin Inscripción:</strong> ' . ($model->fecha_fin_inscripcion ? Yii::$app->formatter->asDate($model->fecha_fin_inscripcion, 'dd/MM/yyyy') : 'N/A') . '</p>';
    echo '<p><strong>Hora Inicio Inscripción:</strong> ' . $model->hora_inicio_inscripcion . '</p>';
    echo '<p><strong>Hora Fin Inscripción:</strong> ' . $model->hora_fin_inscripcion . '</p>';
    echo '<p><strong>Fecha Publicación:</strong> ' . ($model->fecha_publicacion ? Yii::$app->formatter->asDate($model->fecha_publicacion, 'dd/MM/yyyy') : 'N/A') . '</p>';
    echo '<p><strong>Comentario:</strong> ' . $model->comentario . '</p>';

    Modal::end();

    // Modal para editar el concurso    
    Modal::begin([
        'id' => 'editModal' . $model->id_concurso_pendiente,
        'title' => 'Editar Concurso',
        'dialogOptions' => ['class' => 'modal-dialog modal-lg modal-dialog-centered'], // Clases para tamaño y centrado
        'footer' => Html::button('Guardar', [
            'class' => 'btn btn-success',
            'onclick' => '$("#concurso-pendiente-form-' . $model->id_concurso_pendiente . '").submit();',
        ]) . Html::button('Cerrar', ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal']),
    ]);

    echo $this->render('_form', ['model' => $model]);

    Modal::end();

    // Modal para confirmar la publicación
    Modal::begin([
        'id' => 'publishModal' . $model->id_concurso_pendiente,
        'title' => 'Confirmar Publicación',
        'footer' => Html::a('Publicar', ['publish-confirm', 'id' => $model->id_concurso_pendiente], [
            'class' => 'btn btn-success',
            'data-method' => 'post',
        ]) . Html::button('Cancelar', ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal']),
    ]);

    echo "¿Estás seguro de que deseas publicar el concurso {$model->numero_expediente}?";

    Modal::end();
}
?>
