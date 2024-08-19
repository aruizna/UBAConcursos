<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Gestionar Nuevos Concursos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concurso-manage">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear nuevo Llamado a concurso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Modificar Llamado a concurso', ['pending'], ['class' => 'btn btn-primary']) ?>
    </p>
    <p>
        <?= Html::a('Publicar Concursos Pendientes', ['publish'], ['class' => 'btn btn-warning']) ?> <!-- Aún no implementado -->
    </p>
    <p>
        <?= Html::a('Ver Nómina de Preinscriptos', ['#'], ['class' => 'btn btn-info']) ?> <!-- Aún no implementado -->
    </p>
</div>
