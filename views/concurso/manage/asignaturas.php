<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap5\Modal;

$this->title = 'Gestión de Asignaturas';

?>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<style>
body {
    font-family: "Bitter", serif;
    font-weight: 400;
    font-size: 14px;
    color: #1d2554;
    background-color: #f4f7fa;
    margin: 0;
    padding: 0;
}

.asignatura-index h1 {
    font-size: 40px;
    font-weight: 900;
    color: #1d2554;
    margin-bottom: 30px;
    text-align: center;
}

.grid-view {
    width: 100%;
    margin-bottom: 30px;
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

.btn-danger {
    background-color: #d9534f;
    border-color: #d9534f;
    color: #FFFFFF;
}

.btn-danger:hover {
    background-color: #c9302c;
    border-color: #ac2925;
}

.action-column {
    text-align: center;
}

</style>

<div class="asignatura-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-center">
        <?= Html::a('Agregar Asignatura', ['asignatura-create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'attribute' => 'id_asignatura',
                'headerOptions' => ['style' => 'width:10%; text-align: center;'],
                'contentOptions' => ['style' => 'text-align: center;'],
            ],
            [
                'attribute' => 'id_facultad',
                'value' => function($model) {
                    return $model->facultad->nombre_facultad ?? 'Sin facultad';
                },
                'label' => 'Unidad Académica'
            ],
            'descripcion_asignatura',
            'numero_resolucion',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}',
                'contentOptions' => ['class' => 'action-column', 'style' => 'text-align: center;'],
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('Editar', ['asignatura-update', 'id' => $model->id_asignatura], [
                            'title' => 'Actualizar',
                            'class' => 'btn btn-info btn-sm'
                        ]);
                    },
                    // 'delete' => function ($url, $model) {
                    //     return Html::a('Eliminar', ['asignatura-delete', 'id' => $model->id_asignatura], [
                    //         'title' => 'Eliminar',
                    //         'class' => 'btn btn-danger btn-sm',
                    //         'data-confirm' => '¿Estás seguro de eliminar esta asignatura?',
                    //         'data-method' => 'post'
                    //     ]);
                    // },
                ],
            ],
        ],
    ]); ?>

</div>
