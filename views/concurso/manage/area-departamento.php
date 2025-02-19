<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Facultad;
use app\models\AreaDepartamento;
use app\models\Asignatura;

$this->title = 'Gestión de Áreas y Departamentos';

$departamentos = ArrayHelper::map(
    AreaDepartamento::find()->select(['descripcion_area_departamento'])->distinct()->all(),
    'descripcion_area_departamento',
    'descripcion_area_departamento'
);

$asignaturas = ArrayHelper::map(
    Asignatura::find()
        ->joinWith('areaDepartamentoAsignaturas')
        ->where(['not', ['area_departamento_asignatura.id_area_departamento' => null]])
        ->distinct()
        ->all(),
    'descripcion_asignatura',
    'descripcion_asignatura'
);

$facultades = ArrayHelper::map(
    Facultad::find()->all(),
    'id_facultad',
    'nombre_facultad'
);
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

.area-departamento-index h1 {
    font-size: 40px;
    font-weight: 900;
    color: #1d2554;
    margin-bottom: 30px;
    text-align: center;
}

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

.search-form {
    width: 95%;
    margin: 20px auto;
    padding: 15px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.search-form .row {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.search-form label {
    font-weight: bold;
    color: #1d2554;
}

.search-form .btn {
    margin-top: 24px;
}

/* Estilos para la paginación */
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

<div class="area-departamento-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-center">
        <?= Html::a('Agregar Departamento', ['area-departamento-create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <div class="search-form">
        <?php $form = ActiveForm::begin([
            'method' => 'get',
            'action' => ['concurso/area-departamento'],
        ]); ?>

        <div class="row">
            <div class="col-md-3">
                <label>Área/Departamento</label>
                <?= Html::dropDownList('descripcion_area_departamento', Yii::$app->request->getQueryParam('descripcion_area_departamento', ''), 
                    ['' => 'Seleccione un departamento'] + $departamentos, 
                    ['class' => 'form-control']) 
                ?>
            </div>

            <div class="col-md-3">
                <label>Unidad Académica</label>
                <?= Html::dropDownList('id_facultad', Yii::$app->request->getQueryParam('id_facultad', ''), 
                    ['' => 'Seleccione una unidad académica'] + $facultades, 
                    ['class' => 'form-control']) 
                ?>
            </div>

            <div class="col-md-3">
                <label>Asignatura</label>
                <?= Html::dropDownList('asignaturas', Yii::$app->request->getQueryParam('asignaturas', ''), 
                    ['' => 'Seleccione una asignatura'] + $asignaturas, 
                    ['class' => 'form-control']) 
                ?>
            </div>

            <div class="col-md-3">
                <br>
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="<?= Yii::$app->urlManager->createUrl(['concurso/area-departamento']) ?>" class="btn btn-default">Restablecer</a>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['attribute' => 'descripcion_area_departamento', 'label' => 'Área/Departamento'],
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
                    return implode(', ', ArrayHelper::getColumn($model->asignaturas, 'descripcion_asignatura'));
                },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('Modificar', ['area-departamento-update', 'id' => $model->id_area_departamento], [
                            'class' => 'btn btn-primary btn-sm',
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
