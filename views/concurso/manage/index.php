<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Gestionar Nuevos Concursos';
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

.concurso-manage {
    text-align: center;
    margin-top: 50px;
}

.concurso-manage h1 {
    font-size: 40px;
    font-weight: 900;
    color: #1d2554;
    margin-bottom: 30px;
}

.button-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    margin: 0 auto;
}

.smallButton {
    cursor: pointer;
    background-color: #bdd7ed; /* Color azul claro */
    width: 400px; /* Botones más largos */
    height: 70px;
    margin: 10px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    text-align: center;
    padding: 10px 20px; /* Suficiente padding a los lados */
    font-weight: 600;
    border-radius: 0;
    transition: background-color 0.3s;
    text-decoration: none; /* Sin subrayado */
    color: #1d2554; /* Color del texto */
}

.smallButton2 {
    background-color: #fccd8e; /* Color amarillo */
    text-decoration: none; /* Sin subrayado */
    color: #1d2554; /* Color del texto */
}

.smallButton:hover {
    background-color: #91bde1; /* Fondo del botón azul claro al pasar el mouse */
    color: #1d2554; /* Mantener el color del texto */
}

.smallButton2:hover {
    background-color: #f7a600; /* Fondo del botón amarillo al pasar el mouse */
    color: #1d2554; /* Mantener el color del texto */
}

@media screen and (max-width: 768px) {
    .smallButton, .smallButton2 {
        width: calc(100% - 40px);
        font-size: 20px;
        height: 60px;
        margin: 5px 0;
    }
}
</style>

<div class="concurso-manage">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="button-container">
        <?= Html::a('Crear nuevo Llamado a concurso', ['create'], ['class' => 'smallButton']) ?>
        <?= Html::a('Modificar Llamado a concurso', ['pending'], ['class' => 'smallButton smallButton2']) ?>
        <?= Html::a('Publicar Concursos Pendientes', ['publish'], ['class' => 'smallButton']) ?>
        <?= Html::a('Ver Nómina de Preinscriptos', ['nomina-preinscriptos'], ['class' => 'smallButton smallButton2']) ?>
    </div>
</div>
