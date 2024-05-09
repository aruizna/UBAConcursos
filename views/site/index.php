<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;
use yii\helpers\Url;


$this->title = 'Concursos';
?>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<style>
body {
    font-family: "Bitter", serif;
    font-weight: 400;
    font-size: 14px;
    color: #1d2554;
    margin: 0;
    padding: 0;
}

.button-line {
    display: flex;
    position: relative;
    justify-content: center;
    align-items: center;
    margin-top: 0px;
    margin-bottom: 30px;
    width: 100%;
}

.authbutton {
    background-color: #f7a600;
    margin: 0 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    color: #FFFFFF;
    padding: 10px 20px;
    transition: background-color 0.3s, color 0.3s;
    width: 200px;

}

.button-group {
    display: flex;
    gap: 10px;
    position: absolute;
    right: 0;
    /* Justifica el grupo de botones al borde derecho */
}


.title {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    font-size: 40px;
    font-weight: 900;
    color: #1d2554;
    margin: 0;
    white-space: nowrap;
}

.authbutton:hover {
    background-color: #91bde1;
}

@media screen and (max-width: 1200px) and (min-width: 769px) {
    .button-line {
        flex-direction: column;
        /* Coloca los botones debajo del título */
        align-items: center;
    }

    .title {
        position: static;
        transform: none;
        margin: 10px 0;
    }

    .button-group {
        position: static;
        flex-direction: row;
        gap: 10px;
        margin-top: 10px;
    }
}

@media screen and (max-width: 768px) {
    .button-line {
        flex-direction: column;
        align-items: center;

    }

    .button-group {
        position: static;
        /* Cambia la posición a estática para pantallas pequeñas */
        margin: 5px 0;
        flex-direction: column;
    }

    .authbutton {
        max-width: 400px width: calc(100% - 30px);
        margin: 5px 0;
    }
}

.title {
    position: static;
    transform: none;
    margin: 10px 0;
}


.button-container {
    width: 80%;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.bigButton {
    cursor: pointer;
    background-color: #bdd7ed;
    width: calc(50% - 20px);
    height: 27vh;
    margin: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    text-align: center;
    padding: 10px;
    font-weight: 600
}

.bigButton2 {
    background-color: #fccd8e
}

@media screen and (max-width: 768px) {
    .button-container {
        width: 100%;
        margin: 0;
    }

    .bigButton {
        width: calc(100% - 20px);
        font-size: 24px;
        height: 100px;
        margin: 10px 0;
    }
}

.announcement {

    margin: 20px auto;
    padding: 10px;
    background-color: #1d2554;
    color: #FFFFFF;
    text-align: center;
    width: 100%
}
</style>

<div class="site-index">
    <?php if (Yii::$app->user->isGuest) : ?>

    <div>

        <div class="button-line">
            <h2 class="title">Bienvenido</h2>
            <div class="button-group">
                <a href="<?= Url::to(['/user/security/login']) ?>" class="authbutton">INICIAR SESIÓN</a>
                <a href="<?= Url::to(['/user/registration/register']) ?>" class="authbutton">REGISTRARSE</a>
            </div>
        </div>
    </div>

    <?php endif ?>
    <?php if (!Yii::$app->user->isGuest) : ?>
    <div class="warning">
        <p class="text"><b>Importante:</b> antes de iniciar una preinscripción a un concurso, debe ingresar en la
            sección Mi Perfil a través del Menú que se encuentra arriba a la derecha y completar todos los datos
            obligatorios</p>
    </div>
    <?php endif ?>
    <div class="button-container">
        <div class="bigButton" style="" onclick="location.href='<?= Url::to(['/concurso']) ?>'">
            <p class="text">Llamados a concursos</p>

        </div>
        <div class="bigButton bigButton2" onclick="location.href='<?= Url::to(['/site/datos-utiles']) ?>'">
            <p class="text">Datos útiles de las UUAA</p>
        </div>

        <div class="bigButton bigButton2" onclick="location.href='<?= Url::to(['/concurso/tramite']) ?>'">
            <p class="text">Mis concursos en trámite</p>
        </div>
        <div class="bigButton" onclick="location.href='<?= Url::to(['documentos']) ?>'">
            <p class="text">Documentación a presentar</p>
        </div>

    </div>
    <?php if (Yii::$app->user->isGuest) : ?>
    <div class="announcement">
        <p class="textWhite"><b>Importante:</b> Para poder preinscribirse en un concurso publicado por la Universidad de
            Buenos Aires, es necesario que sea un usuario registrado.</p>
    </div>
    <?php endif ?>
</div>