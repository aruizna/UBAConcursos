<?php
/** @var yii\web\View $this */

use yii\bootstrap5\Html;
use yii\helpers\Url;


$this->title = 'Concursos';
?>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

<div class="site-index">
    <?php if (Yii::$app->user->isGuest): ?>

    <div class="card" style="background-color:#D5D4F4;width:934px;height:393px;align-items:center;justify-content:center;border-radius: 15px;">
        <H1 style="width:480px;font-family:Georgia" class="text-center">Avisos de llamados a concurso en su casilla de correo electrónico</H1>
        <p style="width:480px;font-family:Helvetica LT Std" class="text-center">
        Si usted es un usuario registrado, ahora tiene la posibilidad de suscribirse para recibir avisos cuando se publiquen nuevos llamados a concurso que sean de su interés. 
Ingrese con su documento y contraseña, y realice su registro en “Suscripción a Novedades”, especificando las asignaturas, categoría y dedicación deseadas. 
Si aún no es un usuario registrado, regístrese y acceda a esta nueva facilidad.
        </p>
        <div class="row">
            <a href="<?=Url::to(['/user/security/login'])?>" class=" text-center py-2 mx-2" style="width:240px;background-color:white;border-radius:5px;color:#40BB97;text-decoration: none;">INICIAR SESIÓN</a>
            <a href="<?=Url::to(['/user/registration/register'])?>" class=" text-center py-2 mx-2" style="width:240px;background-color:#40BB97;border-radius:5px;color:white;text-decoration: none;">REGISTRARSE</a>
        </div>
    </div>

    <?php endif ?>

    <div class="card my-4" style="border:none;background-color:transparent;width:934px;align-items:center;justify-content:center">
        <div class="row my-2">
            <div class="card mx-2" 
            style="cursor:pointer;background-color:#E6F2EE;width:285px;height:214px;align-items:start;justify-content:start;border-radius: 15px;"
            onclick="location.href='<?= Url::to(['/concurso'])?>'"
            >
                <p style="margin:10px;font-size:32px;font-family:Helvetica">Llamados a concursos</p>
                <?= Html::img('@web/images/home/llamados_ico.png', ['style' => 'position: absolute;height: 45%; bottom: 15px; right: 15px;']) ?>
            </div>
            <div 
            class="card mx-2" 
            style="cursor:pointer;padding-right:60px;background-color:#FFD9D8;width:285px;height:214px;align-items:end;justify-content:center;border-radius: 15px;"
            onclick="location.href='<?= Url::to(['/site/datos-utiles'])?>'"
            >
                <p class="my-0 py-0" style="font-size:28px;font-family:Helvetica">Datos útiles</p>
                <p class="my-0 py-0" style="font-size:28px;font-family:Helvetica">de las</p>
                <p class="my-0 py-0" style="font-size:28px;font-family:Helvetica">UUAA</p>

                <?= Html::img('@web/images/home/phone_ico.png', ['style' => 'position: absolute;height: 45px; bottom: 33%; right: 60%;']) ?>
            </div>
        </div>
        <div class="row my-2">
            <div class="card mx-2" style="cursor:pointer;background-color:#FFEACB;width:285px;height:214px;align-items:start;justify-content:start;border-radius: 15px;">
                <p style="margin-left:20px;margin-top:30px;font-size:32px;font-family:Helvetica">Concursos en trámite</p>
                <?= Html::img('@web/images/home/pencil_ico.png', ['style' => 'position: absolute;height: 100px; bottom: 15px; right: 35px;']) ?>
            </div>
            <div class="card mx-2" style="cursor:pointer;background-color:#E7ECF2;width:285px;height:214px;align-items:center;justify-content:end;border-radius: 15px;"
            onclick="location.href='<?= Url::to(['documentos'])?>'"
            >
                <?= Html::img('@web/images/home/mail_ico.png', ['style' => 'position: absolute;height: 62px; top: 15px; left: 15px;']) ?>
                <p class="my-0 py-0" style="font-size:28px;font-family:Helvetica">Documentación</p>
                <p class="mt-0 py-0 mb-4 pb-4" style="font-size:28px;font-family:Helvetica">a presentar</p>

            </div>
        </div>
    </div>
    <div class="card my-4" style="padding:10px;border-radius:none;border:none;background-color:#F3F4F6;width:934px;align-items:center;justify-content:center">
    <p style="font-family:Helvetica"><b>Importante:</b> Para poder Inscribirse (Etapa 1) en un concurso publicado por la Universidad de Buenos Aires, es necesario que sea un usuario registrado.</p>
    </div>
</div>
