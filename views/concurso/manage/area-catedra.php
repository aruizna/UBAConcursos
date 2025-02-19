<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Gestión de Áreas / Cátedras';
?>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<style>
/* Estilos generales */
body {
    font-family: "Bitter", serif;
    font-size: 14px;
    color: #1d2554;
    background-color: #f4f7fa;
    margin: 0;
    padding: 0;
}

.area-catedra-index h1 {
    font-size: 40px;
    font-weight: 900;
    color: #1d2554;
    margin-bottom: 30px;
    text-align: center;
}

/* Estilos de la tabla */
.grid-view {
    margin: 20px auto;
    width: 95%;
    border: 1px solid #1d2554;
    border-collapse: collapse;
}

.grid-view th, .grid-view td {
    padding: 10px;
    text-align: center;
    font-size: 14px;
    border: 1px solid #1d2554;
}

.grid-view th {
    background-color: #f7a600;
    color: #FFFFFF;
    font-weight: bold;
    text-transform: uppercase;
}

.grid-view tbody tr:nth-child(even) {
    background-color: #e6f0fa;
}

.grid-view tbody tr:hover {
    background-color: #bdd7ed;
    cursor: pointer;
}

/* Estilos de los botones */
.btn {
    border-radius: 0;
    font-weight: 600;
    text-transform: uppercase;
    padding: 8px 12px;
    transition: background-color 0.3s, color 0.3s;
}

.btn-primary {
    background-color: #f7a600;
    color: #FFFFFF;
    border: 1px solid #f7a600;
}

.btn-primary:hover {
    background-color: #fccd8e;
    border-color: #f7a600;
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

.btn-danger {
    background-color: #d9534f;
    color: #FFFFFF;
    border: 1px solid #d9534f;
}

.btn-danger:hover {
    background-color: #c9302c;
    border-color: #ac2925;
}

.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    gap: 8px;
}

.pagination .page-link {
    background-color: #f7a600;
    color: white;
    border: 1px solid #f7a600;
    padding: 8px 14px;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.pagination .page-link:hover {
    background-color: #fccd8e;
    color: #1d2554;
}

.pagination .active .page-link {
    background-color: #1d2554;
    color: white;
    border: 1px solid #1d2554;
}

.pagination .disabled .page-link {
    background-color: #cccccc;
    color: white;
    cursor: not-allowed;
}

@media screen and (max-width: 768px) {
    .pagination {
        flex-wrap: wrap;
    }
    .pagination .page-link {
        font-size: 14px;
        padding: 6px 10px;
    }
}
</style>

<div class="area-catedra-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-center">
        <?= Html::a('Agregar Área / Cátedra', ['area-catedra-create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'attribute' => 'nombre_area_catedra',
                'label' => 'Área / Cátedra',
            ],
            [
                'attribute' => 'id_facultad',
                'label' => 'Unidad Académica',
                'value' => function ($model) {
                    return $model->facultad->nombre_facultad ?? 'Sin Facultad';
                },
            ],
            [
                'attribute' => 'asignaturas',
                'label' => 'Asignaturas',
                'value' => function ($model) {
                    return $model->getAsignaturasAsString();
                },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('Modificar', ['area-catedra-update', 'id' => $model->id_area_catedra], [
                            'class' => 'btn btn-info btn-sm',
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('Eliminar', ['area-catedra-delete', 'id' => $model->id_area_catedra], [
                            'class' => 'btn btn-danger btn-sm',
                            'data-confirm' => '¿Estás seguro de eliminar esta área/cátedra?',
                            'data-method' => 'post',
                        ]);
                    },
                ],
            ],
        ],
        'pager' => [
            'options' => ['class' => 'pagination'],
            'prevPageCssClass' => 'page-item',
            'nextPageCssClass' => 'page-item',
            'activePageCssClass' => 'active',
            'disabledPageCssClass' => 'disabled',
            'linkOptions' => ['class' => 'page-link'],
        ],
    ]); ?>
</div>
