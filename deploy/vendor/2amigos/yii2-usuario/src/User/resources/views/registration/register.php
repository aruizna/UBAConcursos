<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;

/**
 * @var yii\web\View                   $this
 * @var \Da\User\Form\RegistrationForm $model
 * @var \Da\User\Model\User            $user
 * @var \Da\User\Module                $module
 */

?>

<?= $this->render('/shared/_alert', ['module' => Yii::$app->getModule('user')]) ?>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<style>
body {
    font-family: "Bitter", serif;
    font-weight: 400;
    height: 100vh;
    font-size: 18px;
    color: #1d2554;
    margin: 0;
    padding: 0;
}

main {

    display: flex;
    justify-content: center;
    align-items: center;
}

h1 {
    color: white;
    font-size: 30px
}

h3 {
    color: white;
    font-size: 20px
}

.display {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 30px;
    flex-wrap: wrap;
    border: solid #bbbbbb 1px;
}

.segmento {

    display: flex;
    flex-direction: column;
    min-width: 330px;
    min-height: 420px;
    padding: 2vh;
    box-sizing: border-box;
    justify-content: space-around;
    align-items: center;
    flex: 1;
}

.segmento-formulario {
    flex: 2;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    gap: 10px;
}

.inputs-row {
    display: flex;
    flex-direction: row;
    gap: 10px;
    width: 100%;

}



@media screen and (max-width: 993px) {
    .display {

        border: none
    }

    .segmento {
        border: solid #bbbbbb 1px;
        min-width: 330px;
        min-height: 280px;

    }

    .inputs-row {
        display: block;


    }
}

@media screen and (max-width: 992px) and (min-width: 769px) {
    .segmento {
        min-height: 500px;

    }
}

.input-texto-completo {
    border-radius: 0;
    font-size: 14px;
    width: 100%;
    /* Igual al ancho de inputs dobles */
    background-color: #bbbbbb20;
    text-align: center;
}

.invalid-feedback {
    font-size: 10px
}

.input-texto {
    border-radius: 0;
    font-size: 14px;
    background-color: #bbbbbb20;
    width: 100%;
    text-align: center;
    flex: 1;
    /* Para que ambos inputs ocupen el mismo espacio en la fila */
}

.link-registrarse {
    font-size: 16px;
    text-decoration: none;
    font-weight: 200;
    color: #fccd8e
}

.link-registrarse:hover {
    color: #91bde1
}


.link-registrarse b {
    font-weight: 600;
}


.button-siguiente {
    background-color: #f7a600;
    margin: 3vh;
    display: flex;
    justify-content: center;
    align-self: center;
    text-decoration: none;
    color: #FFFFFF;
    padding: 10px 20px;
    transition: background-color 0.3s, color 0.3s;
    width: 200px;
    border: none;

}

.button-siguiente:hover {
    background-color: #91bde1;
}

.text-center {
    text-align: center;
}

a {
    text-decoration: none;
    font-weight: 200;
}

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Firefox */
input[type=number] {
    -moz-appearance: textfield;
}
</style>


<div class="display">
    <div class="segmento" style="background-color: #1d2554">
        <H1>¡Bienvenido!</H1>
        <H3 style="font-weight: 400;">Registrarse</H3>
        <p class="text-center">
            <a class="link-registrarse" href="<?=Url::to(['/user/security/login'])?>">Ya tengo una cuenta creada
                <b>Iniciar Sesión</b></a>
        </p>
    </div>

    <div class="segmento-formulario">

        <?php $form = ActiveForm::begin(
                            [
                                'id' => $model->formName(),
                                'enableAjaxValidation' => true,
                                'enableClientValidation' => false,
                                'validateOnBlur' => true,
                                'validateOnType' => false,
                                'validateOnChange' => true,
                                'options' => ['class' => 'd-flex flex-column justify-content-around h-100'],
                            ]
                        ) ?>

        <div class="inputs-row">
            <?= $form->field(
                                $model,
                                'nombre',
                                ['inputOptions' => [ 'autofocus' => 'autofocus', 'class' => 'input-texto form-control', 'tabindex' => '1', 'placeholder' => 'Nombre']]
                            )->label(false)->textInput() ?>


            <!-- apellido -->

            <?= $form->field(
                                $model,
                                'apellido',
                                ['inputOptions' => [ 'autofocus' => 'autofocus', 'class' => 'input-texto form-control', 'tabindex' => '1', 'placeholder' => 'Apellido']]
                            )->label(false)->textInput() ?>
        </div>
        <div class="inputs-row">
            <!-- tipo de documento -->

            <!-- <div style="display:flex;flex-direction:row-reverse;margin-bottom: 20px;">
                                <select name="documento" class="text-center" id="doctipo" style="position: relative;bottom:auto;height:30px;width:120px;border:1px solid black;border-radius:10px;background-color:transparent">
                                    <option value="dni">DNI</option>
                                    <option value="CUIL">CUIL</option>
                                </select>
                                <p style="margin:0;margin-right:10px;font-weight:500">Tipo de Documento</p>
                            </div> -->

            <!-- nº de documento -->

            <?= $form->field(
                                $model,
                                'username',
                                ['inputOptions' => ['id' => 'usernameinput' , 'autofocus' => 'autofocus', 'class' => 'input-texto form-control', 'tabindex' => '1', 'placeholder' => 'Nº de documento']]
                            )->label(false)->textInput(['type' => 'number']) ?>

            <!-- cuil -->

            <?= $form->field(
                                $model,
                                'cuil',
                                ['inputOptions' => ['id' => 'cuilinput' , 'autofocus' => 'autofocus', 'class' => 'input-texto form-control', 'tabindex' => '1', 'placeholder' => 'CUIL']]
                            )->label(false)->textInput(['type' => 'number']) ?>

            <!-- email -->
        </div>

        <?= $form->field(
                                $model,
                                'email',
                                ['inputOptions' => [ 'autofocus' => 'autofocus', 'class' => 'input-texto-completo form-control', 'tabindex' => '1', 'placeholder' => 'Email']]
                            )->label(false)->textInput() ?>

        <!-- contraseña -->

        <?php if ($module->generatePasswords === false): ?>
        <?= $form->field($model, 'password',
                                ['inputOptions' => ['class' => 'input-texto-completo form-control', 'tabindex' => '2', 'placeholder' => 'Contraseña']]
                                )->passwordInput()->label(false) ?>
        <?php endif ?>

        <!-- confirmar contraseña -->

        <?php if ($module->generatePasswords === false): ?>
        <?= $form->field($model, 'confirmpassword',
                                ['inputOptions' => ['class' => 'input-texto-completo form-control', 'tabindex' => '2', 'placeholder' => 'Confirmar contraseña']]
                                )->passwordInput()->label(false) ?>
        <?php endif ?>


        <?= Html::submitButton(
                                    Yii::t('usuario', 'Siguiente'),
                                    ['class' => 'button-siguiente','tabindex' => '3']
                                ) ?>

        <?php ActiveForm::end(); ?>


    </div>
    <?php
$js = <<< JS
$(document).ready(function() {
    $("#usernameinput").on("input", function() {
        var maxLength = 12;
        if ($(this).val().length > maxLength) {
            $(this).val($(this).val().slice(0, maxLength));
        }
    });
});

$(document).ready(function() {
    $("#cuilinput").on("input", function() {
        var maxLength = 12;
        if ($(this).val().length > maxLength) {
            $(this).val($(this).val().slice(0, maxLength));
        }
    });
});
JS;
$this->registerJs($js);
?>