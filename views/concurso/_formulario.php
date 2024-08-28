<?php

namespace app\controllers;

use app\models\Concurso;
use app\models\TipoConcurso;
use app\models\ConcursoQuery;
use app\models\Facultad;
use app\models\AreaDepartamento;
use app\models\Categoria;
use app\models\Dedicacion;
use app\models\ConcursoAsignatura;
use app\models\Asignatura;
use app\models\PersonaConcursoRenovacion;
use app\models\Profile;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;

?>

<div style="padding: 20px; background-color: #f4f7fa; border: 1px solid #1d2554; border-radius: 5px;">
    <div style="margin-bottom: 20px; text-align: center;">
        <h3 style="font-family: 'Bitter', serif; color: #1d2554; font-weight: 900;">Detalle del Concurso</h3>
    </div>

    <div class="detalle-concurso">
        <div class="detalle-item">
            <p class="detalle-label">Nº Expediente</p>
            <p class="detalle-value"><?= $model->numero_expediente ?></p>
        </div>

        <div class="detalle-item">
            <p class="detalle-label">Tipo de Concurso</p>
            <p class="detalle-value"><?php try { echo TipoConcurso::find()->where(['id_tipo_concurso' => $model->id_tipo_concurso])->one()->descripcion_tipo_concurso; } catch (\Throwable $e) { echo ''; } ?></p>
        </div>

        <div class="detalle-item">
            <p class="detalle-label">Unidad Académica</p>
            <p class="detalle-value"><?php try { echo Facultad::find()->where(['id_facultad' => $model->id_facultad])->one()->nombre_facultad; } catch (\Throwable $e) { echo ''; } ?></p>
        </div>

        <div class="detalle-item">
            <p class="detalle-label">Departamento</p>
            <p class="detalle-value"><?php try { echo AreaDepartamento::find()->where(['id_area_departamento' => $model->id_area_departamento])->andWhere(['id_facultad' => $model->id_facultad])->one()->descripcion_area_departamento; } catch (\Throwable $e) { echo ''; } ?></p>
        </div>

        <div class="detalle-item">
            <p class="detalle-label">Área</p>
            <p class="detalle-value"><?= $model->area ?? '' ?></p>
        </div>

        <div class="detalle-item">
            <p class="detalle-label">Asignatura/s</p>
            <div class="detalle-value">
                <?php 
                    try {
                        $concursoAsignaturas = ConcursoAsignatura::find()->where(['id_concurso' => $model->id_concurso])->all();
                        foreach ($concursoAsignaturas as $concursoAsignatura) {
                            if ($concursoAsignatura instanceof ConcursoAsignatura) { 
                                echo '<p>' . Asignatura::find()->where(['id_asignatura' => $concursoAsignatura->id_asignatura, 'id_facultad' => $concursoAsignatura->id_facultad])->one()->descripcion_asignatura . '</p>';
                            }
                        }
                    } catch (\Throwable $e) {}
                ?>
            </div>
        </div>

        <?php if ($model->comentario): ?>
        <div class="detalle-item">
            <p class="detalle-label">Comentario Adicional al Grupo de Asignaturas</p>
            <p class="detalle-value"><?= $model->comentario ?></p>
        </div>
        <?php endif ?>

        <div class="detalle-item">
            <p class="detalle-label">Categoría</p>
            <p class="detalle-value"><?php try { echo Categoria::find()->where(['id_categoria' => $model->id_categoria])->one()->descripcion_categoria; } catch (\Throwable $e) { echo ''; } ?></p>
        </div>

        <div class="detalle-item">
            <p class="detalle-label">Dedicación</p>
            <p class="detalle-value"><?php try { echo Dedicacion::find()->where(['id_dedicacion' => $model->id_dedicacion])->one()->descripcion_dedicacion; } catch (\Throwable $e) { echo ''; } ?></p>
        </div>

        <div class="detalle-item">
            <p class="detalle-label">Cantidad de Cargos</p>
            <p class="detalle-value"><?= $model->cantidad_de_puestos ?></p>
        </div>

        <div class="detalle-item">
            <p class="detalle-label">Docente/s que Ocupa/n Cargo</p>
            <div class="detalle-value">
                <?php 
                    try {
                        $docentesqueocupancargo = PersonaConcursoRenovacion::find()->where(['id_concurso' => $model->id_concurso])->groupBy(['numero_documento'])->all();
                        foreach ($docentesqueocupancargo as $docente) {
                            if ($docente instanceof PersonaConcursoRenovacion) {
                                $perfilDocente = Profile::find()->where(['numero_documento' => $docente->numero_documento])->one();
                                if ($perfilDocente) {
                                    echo '<p>' . $perfilDocente->nombre . ' ' . $perfilDocente->apellido . '</p>';
                                }
                            }
                        }
                    } catch (\Throwable $e) {}
                ?>
            </div>
        </div>

        <div class="detalle-item">
            <p class="detalle-label">Período de Inscripción</p>
            <div>
                <p style="font-weight: 600;">Inicio Inscripción:</p>
                <p class="detalle-value"><?= date('d/m/Y H:i', strtotime($model->fecha_inicio_inscripcion)) ?></p>
            </div>
            <div>
                <p style="font-weight: 600;">Fin Inscripción:</p>
                <p class="detalle-value"><?= date('d/m/Y H:i', strtotime($model->fecha_fin_inscripcion)) ?></p>
            </div>
        </div>
    </div>

    <div style="margin-top: 20px;">
        <p style="font-family: 'Bitter', serif; font-size: 12px; font-weight: 600;">Informes y Confirmación de Inscripción</p>
        <hr style="border: 1px dotted gray;">
        <p style="font-family: 'Bitter', serif; font-weight: 200; font-size: 10px;"><?php try { echo Facultad::find()->where(['id_facultad' => $model->id_facultad])->one()->informacion_inscripcion; } catch (\Throwable $e) { echo ''; } ?></p>
    </div>
</div>

<style>
.detalle-item {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
}

.detalle-label {
    font-weight: 600;
    font-family: "Bitter", serif;
    font-size: 16px;
    color: #1d2554;
}

.detalle-value {
    font-weight: 300;
    font-family: "Bitter", serif;
    font-size: 16px;
    color: #1d2554;
    text-align: center;
    min-width: 30%;
}
</style>
