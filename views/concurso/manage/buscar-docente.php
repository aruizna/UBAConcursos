<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $docentes app\models\Docente[] */

$this->title = 'Buscar Docente';
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(['method' => 'get', 'action' => Url::to(['buscar-docente'])]); ?>

<?= $form->field($model, 'term')->textInput(['placeholder' => 'Ingrese nombre o apellido'])->label(false) ?>

<div class="form-group">
    <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<h2>Resultados de la Búsqueda</h2>

<?php if (!empty($docentes)): ?>
    <ul>
        <?php foreach ($docentes as $docente): ?>
            <li>
                <?= Html::a("{$docente->nombre} {$docente->apellido}", '#', [
                    'onclick' => "window.opener.agregarDocente({id: {$docente->id}, nombre_completo: '{$docente->nombre} {$docente->apellido}'}); window.close(); return false;"
                ]) ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No se encontraron resultados.</p>
<?php endif; ?>
