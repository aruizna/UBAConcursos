<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use Da\User\Widget\ConnectWidget;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\MaskedInput;

/**
 * @var yii\web\View            $this
 * @var \Da\User\Form\LoginForm $model
 * @var \Da\User\Module         $module
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

.invalid-feedback {
    font-size: 10px
}

.display {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 30px;
    flex-wrap: wrap;
    border: solid #bbbbbb 1px
}

.segmento {
    display: flex;
    flex-direction: column;
    min-width: 330px;
    min-height: 260px;
    padding: 2vh;
    box-sizing: border-box;
    justify-content: space-around;
    align-items: center
}

@media screen and (max-width: 993px) {
    .display {

        border: none
    }

    .segmento {
        border: solid #bbbbbb 1px
    }
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

.link-contraseña {
    display: flex;
    font-size: 16px;
    align-self: center;
    text-decoration: none;
    font-weight: 600;
    color: #91bde1
}

.link-contraseña:hover {
    color: #fccd8e
}

.button-siguiente {
    background-color: #f7a600;
    margin: 3vh;
    display: flex;
    justify-content: center;
    align-items: center;
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

.input-texto {
    border-radius: 0;
    background-color: #bbbbbb20;
    max-width: 350px;
    text-align: center;
    font-size: 14px;
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
        <H3 style="font-weight: 400;">Iniciar Sesión</H3>
        <p class="text-center">
            <a class="link-registrarse" href="<?=Url::to(['/user/registration/register'])?>">¿No está
                registrado?
                <b>REGISTRARSE</b></a>
        </p>

    </div>
    <div class="segmento">
        <?php $form = ActiveForm::begin(
                            [
                                'id' => $model->formName(),
                                'enableAjaxValidation' => true,
                                'enableClientValidation' => false,
                                'validateOnBlur' => false,
                                'validateOnType' => false,
                                'validateOnChange' => false,
                                'options' => ['class' => 'd-flex flex-column justify-content-around h-100'],
                            ]
                        ) ?>

        <!-- <div style="display:flex;flex-direction:row-reverse;margin-bottom: 20px;">
                                <select name="documento" class="text-center" id="doctipo" style="position: relative;bottom:auto;height:30px;width:120px;border:1px solid black;border-radius:10px;background-color:transparent">
                                    <option value="dni">DNI</option>
                                    <option value="CUIL">CUIL</option>
                                </select>
                                <p style="margin:0;margin-right:10px;font-weight:500">Tipo de Documento</p>
                            </div> -->

        <?= $form->field(
                                $model,
                                'login',
                                ['inputOptions' => ['id' => 'usernameinput', 'autofocus' => 'autofocus', 'class' => 'input-texto form-control', 'tabindex' => '1', 'placeholder' => 'Nº de documento']]
                            )->label(false)->textInput(['type' => 'number']); ?>

        <?= $form
                                ->field(
                                    $model,
                                    'password',
                                    ['inputOptions' => ['class' => 'input-texto form-control', 'tabindex' => '2', 'placeholder' => 'Contraseña']]
                                )
                                ->passwordInput()->label(false)  ?>

        <?= Html::submitButton(
                                    Yii::t('usuario', 'SIGUIENTE'),
                                    ['class' => 'button-siguiente', 'tabindex' => '3']
                                ) ?>
        <a href="<?=Url::to(['/user/forgot'])?>" class="link-contraseña">¿Olvidó su
            contraseña?</a>


    </div>

</div>
<?php ActiveForm::end(); ?>



<?= ConnectWidget::widget(
            [
                'baseAuthUrl' => ['/user/security/auth'],
            ]
        ) ?>



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
JS;
$this->registerJs($js);

?>