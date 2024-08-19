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
<div class="concurso-pendiente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_concurso_pendiente',
            'numero_expediente',
            'id_tipo_concurso',
            'id_facultad',
            'id_categoria',
            // Otros campos que desees mostrar

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {publish}', // Personaliza según tus necesidades
                'buttons' => [
                    'view' => function ($url, $model, $key) {
                        return Html::button('Ver', [
                            'class' => 'btn btn-info',
                            'data-bs-toggle' => 'modal',
                            'data-bs-target' => '#viewModal' . $model->id_concurso_pendiente,
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
// Generar un modal para ver cada concurso
foreach ($dataProvider->models as $model) {
    // Modal para ver el concurso
    Modal::begin([
        'id' => 'viewModal' . $model->id_concurso_pendiente,
        'title' => 'Detalles del Concurso',
        'footer' => Html::button('Cerrar', ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal']),
    ]);

    echo '<p><strong>Número de Expediente:</strong> ' . $model->numero_expediente . '</p>';
    echo '<p><strong>Tipo de Concurso:</strong> ' . $model->id_tipo_concurso . '</p>';
    echo '<p><strong>Facultad:</strong> ' . $model->id_facultad . '</p>';
    echo '<p><strong>Categoría:</strong> ' . $model->id_categoria . '</p>';
    echo '<p><strong>Categoría Mínima:</strong> ' . $model->id_categoria_minima . '</p>';
    echo '<p><strong>Dedicación:</strong> ' . $model->id_dedicacion . '</p>';
    echo '<p><strong>Dedicación Mínima:</strong> ' . $model->id_dedicacion_minima . '</p>';
    echo '<p><strong>Área/Departamento:</strong> ' . $model->id_area_departamento . '</p>';
    echo '<p><strong>Cantidad de Puestos:</strong> ' . $model->cantidad_de_puestos . '</p>';
    echo '<p><strong>Fecha Inicio Inscripción:</strong> ' . $model->fecha_inicio_inscripcion . '</p>';
    echo '<p><strong>Fecha Fin Inscripción:</strong> ' . $model->fecha_fin_inscripcion . '</p>';
    echo '<p><strong>Hora Inicio Inscripción:</strong> ' . $model->hora_inicio_inscripcion . '</p>';
    echo '<p><strong>Hora Fin Inscripción:</strong> ' . $model->hora_fin_inscripcion . '</p>';
    echo '<p><strong>Tipo de Informe:</strong> ' . $model->id_tipo_informe . '</p>';
    echo '<p><strong>Fecha Publicación:</strong> ' . $model->fecha_publicacion . '</p>';
    echo '<p><strong>Cantidad de Días de Publicación:</strong> ' . $model->cantidad_dias_publicacion . '</p>';
    echo '<p><strong>Fecha Publicación Prueba Oposición:</strong> ' . $model->fecha_publicacion_prueba_oposicion . '</p>';
    echo '<p><strong>Tipo de Presupuesto:</strong> ' . $model->id_tipo_presupuesto . '</p>';
    echo '<p><strong>Último Número de Movimiento:</strong> ' . $model->ultimo_numero_movimiento . '</p>';
    echo '<p><strong>Comentario:</strong> ' . $model->comentario . '</p>';
    echo '<p><strong>Fecha Sorteo Publicada:</strong> ' . $model->fecha_sorteo_publicada . '</p>';
    echo '<p><strong>Fecha Entrevista/Prueba Publicada:</strong> ' . $model->fecha_entrevista_prueba_publicada . '</p>';
    echo '<p><strong>Estado Propuesta Jurados Preliminar:</strong> ' . $model->estado_propuesta_jurados_preliminar . '</p>';
    echo '<p><strong>Estado Propuesta Preliminar:</strong> ' . $model->estado_propuesta_preliminar . '</p>';
    echo '<p><strong>Firmantes Comisión Seleccionados:</strong> ' . $model->firmantes_comision_seleccionados . '</p>';

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
