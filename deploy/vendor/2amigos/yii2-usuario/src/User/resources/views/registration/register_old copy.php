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
<style>
    main{
        background-color:#EEE8E7;
        background-repeat: no-repeat;
        background-size: cover;
        width:100%;
        height:750px;
    }
    .triangle {
        width: 0;
        height: 0;
        border-top: 750px solid transparent;
        border-left: 800px solid white;
        position: absolute;
        left: 0;
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
    .card{
        border:none;
    }
</style>
<div class="triangle"></div>

<div class="row" style="margin-top:100px">
    <div class="col" style="justify-content:center">
        <div class="row" style="max-width:fit-content;margin: 0 auto;">
            <div class="col mx-0 px-0" style="border:transparent">
                <div class="card" style="justify-content:center;align-items:center;border-radius:0;background-color:rgba(56, 56, 56, 0.1);width:500px;height:600px;width:400px">
                    <H1>¡Bienvenido!</H1>
                    <H3 style="font-weight: 400;">Registrarse</H3>
                    <p class="text-center" style="position:absolute;bottom:5px">
                    <a href="<?=Url::to(['/user/security/login'])?>" style="text-decoration: none;color:black;font-weight: 200;font-family: Helvetica;">Ya tengo una cuenta creada <b style="font-weight: 600;font-family: Helvetica;">Iniciar Sesión</b></a>
                    </p>
                </div>
            </div>
            <div class="col mx-0 px-0">
                <div class="card" style="border-radius:0;height:600px;width:400px;">
                    <div class="card-body">
                        <?php $form = ActiveForm::begin(
                            [
                                'id' => $model->formName(),
                                'enableAjaxValidation' => true,
                                'enableClientValidation' => false,
                                'validateOnBlur' => false,
                                'validateOnType' => false,
                                'validateOnChange' => false,
                                'options' => ['style' => 'display: flex;flex-direction:column;height: 100%;justify-content: space-around;'],
                            ]
                        ) ?>

                        <div style="display:flex;flex-direction:column;align-items: center;justify-content: center;">
                            
                            <!-- nombre -->

                            <?= $form->field(
                                $model,
                                'nombre',
                                ['inputOptions' => ['style' => 'border-radius:10px;background-color:transparent;width:300px;border:1px solid black', 'autofocus' => 'autofocus', 'class' => 'text-start form-control', 'tabindex' => '1', 'placeholder' => 'Nombre']]
                            )->label(false)->textInput() ?>
                            
                            <!-- apellido -->

                            <?= $form->field(
                                $model,
                                'apellido',
                                ['inputOptions' => ['style' => 'border-radius:10px;background-color:transparent;width:300px;border:1px solid black', 'autofocus' => 'autofocus', 'class' => 'text-start form-control', 'tabindex' => '1', 'placeholder' => 'Apellido']]
                            )->label(false)->textInput() ?>
                            
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
                                ['inputOptions' => ['style' => 'border-radius:10px;background-color:transparent;width:300px;border:1px solid black', 'autofocus' => 'autofocus', 'class' => 'text-cestartnter form-control', 'tabindex' => '1', 'placeholder' => 'Nº de documento']]
                            )->label(false)->textInput(['type' => 'number']) ?>

                            <!-- cuil -->                            

                            <?= $form->field(
                                $model,
                                'cuil',
                                ['inputOptions' => ['style' => 'border-radius:10px;background-color:transparent;width:300px;border:1px solid black', 'autofocus' => 'autofocus', 'class' => 'text-cestartnter form-control', 'tabindex' => '1', 'placeholder' => 'CUIL']]
                            )->label(false)->textInput(['type' => 'number']) ?>

                            <!-- email -->                            

                            <?= $form->field(
                                $model,
                                'email',
                                ['inputOptions' => ['style' => 'border-radius:10px;background-color:transparent;width:300px;border:1px solid black', 'autofocus' => 'autofocus', 'class' => 'text-cestartnter form-control', 'tabindex' => '1', 'placeholder' => 'Email']]
                            )->label(false)->textInput(['type' => 'number']) ?>

                            <!-- contraseña -->                            

                            <?php if ($module->generatePasswords === false): ?>
                                <?= $form->field($model, 'password',
                                ['inputOptions' => ['style' => 'border-radius:10px;background-color:transparent;width:300px;border:1px solid black','class' => 'text-start form-control', 'tabindex' => '2', 'placeholder' => 'Contraseña']]
                                )->passwordInput()->label(false) ?>
                            <?php endif ?>

                            <!-- confirmar contraseña -->                            

                            <?= $form->field(
                                $model,
                                'id_trato',
                                ['inputOptions' => ['style' => 'border-radius:10px;background-color:transparent;width:300px;border:1px solid black','class' => 'text-start form-control', 'tabindex' => '2', 'placeholder' => 'Confirmar contraseña']]
                            )
                            ->passwordInput()->label(false)  ?>

                            <!-- submit -->                            

                            <div style="justify-content: space-around;display: flex;">
                                <?= Html::submitButton(
                                    Yii::t('usuario', 'Siguiente'),
                                    ['class' => 'btn btn-block', 'style'=>'width:150px;background-color:#40BB97;font-weight:600','tabindex' => '3']
                                ) ?>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($module->enableEmailConfirmation): ?>
            <p class="text-center">
                <?= Html::a(
                    Yii::t('usuario', 'Didn\'t receive confirmation message?'),
                    ['/user/registration/resend']
                ) ?>
            </p>
        <?php endif ?>


    </div>
</div>
