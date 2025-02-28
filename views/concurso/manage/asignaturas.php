<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap5\Modal;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;
use app\models\Facultad;
use app\models\Asignatura;

$this->title = 'Gestión de Asignaturas';

?>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<style>
body {
    font-family: "Bitter", serif;
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
    margin: 20px auto;
    width: 95%;
    max-width: 95%;
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

.btn {
    border-radius: 0;
    font-weight: 600;
    text-transform: uppercase;
    padding: 8px 12px;
    transition: background-color 0.3s, color 0.3s;
}

.btn-warning {
    background-color: #f7a600;
    color: #FFFFFF;
    border: 1px solid #f7a600;
}

.btn-warning:hover {
    background-color: #fccd8e;
    border-color: #f7a600;
}

.search-form {
    width: 95%;
    max-width: 95%;
    margin: 20px auto;
    padding: 15px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.search-form .row {
    display: flex;
    flex-wrap: nowrap;
    gap: 15px;
    justify-content: space-between;
}

.search-form label {
    font-weight: bold;
    color: #1d2554;
}

.search-form .btn {
    margin-top: 24px;
}

.search-form select {
    width: 250px;
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

</style>

<div class="asignatura-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-center">
        <?= Html::a('Agregar Asignatura', ['asignatura-create'], ['class' => 'btn btn-warning']) ?>
    </p>

    <?php Pjax::begin(['id' => 'asignatura-grid']); ?>

    <div class="search-form">
        <?php $form = ActiveForm::begin([
            'method' => 'get',
            'action' => ['asignaturas'], // 🔹 Se asegura de que la URL sea limpia
            'options' => ['data-pjax' => true, 'id' => 'filter-form'],
        ]); ?>

        <div class="row">
            <div class="col-md-4">
                <?= Html::label('Unidad Académica', 'id_facultad') ?>
                <?= Html::dropDownList('id_facultad', Yii::$app->request->get('id_facultad', ''), 
                    ArrayHelper::map(Facultad::find()->all(), 'id_facultad', 'nombre_facultad'), 
                    ['prompt' => 'Seleccione una unidad académica', 'class' => 'form-control']
                ) ?>
            </div>

            <div class="col-md-4">
                <?= Html::label('Asignatura', 'id_asignatura') ?>
                <?= Html::dropDownList('id_asignatura', Yii::$app->request->get('id_asignatura', ''), 
                    ArrayHelper::map(Asignatura::find()->all(), 'id_asignatura', 'descripcion_asignatura'), 
                    ['prompt' => 'Seleccione una asignatura', 'class' => 'form-control', 'style' => 'width: 250px;']
                ) ?>
            </div>

            <div class="col-md-4" style="margin-top: 30px;">
                <?= Html::submitButton('Buscar', ['class' => 'btn btn-warning']) ?>
                <?= Html::a('Restablecer', ['asignaturas'], ['class' => 'btn btn-default', 'id' => 'reset-filters']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => null,
        'columns' => [
            'id_asignatura',
            [
                'attribute' => 'id_facultad',
                'value' => function($model) {
                    return $model->facultad->nombre_facultad ?? 'Sin facultad';
                },
                'label' => 'Unidad Académica',
            ],
            'descripcion_asignatura',
            'numero_resolucion',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('Editar', ['asignatura-update', 'id' => $model->id_asignatura], [
                            'title' => 'Editar',
                            'class' => 'btn btn-warning btn-sm'
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("filter-form").addEventListener("submit", function(e) {
        e.preventDefault();
        let url = new URL(window.location.href);
        url.searchParams.set("id_facultad", document.getElementsByName("id_facultad")[0].value);
        url.searchParams.set("id_asignatura", document.getElementsByName("id_asignatura")[0].value);
        window.location.href = url.toString();
    });

    document.getElementById("reset-filters").addEventListener("click", function(e) {
        e.preventDefault();
        window.location.href = "<?= Yii::$app->urlManager->createUrl(['asignaturas']) ?>";
    });
});
</script>
