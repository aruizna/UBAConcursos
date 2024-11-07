<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap5\Modal;
use yii\jui\AutoComplete;

/* @var $this yii\web\View */
/* @var $model app\models\ConcursoPendiente */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Crear Nuevo Llamado a Concurso Pendiente';
?>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
/* Estilos previos */
body {
    font-family: "Bitter", serif;
    font-weight: 400;
    font-size: 14px;
    color: #1d2554;
    margin: 0;
    padding: 0;
}

.concurso-create {
    text-align: center;
    margin-top: 50px;
}

.concurso-create h1 {
    font-size: 40px;
    font-weight: 900;
    color: #1d2554;
    margin-bottom: 30px;
}

.concurso-form {
    width: 95%;
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f4f7fa;
    border: 1px solid #1d2554;
    border-radius: 0;
}

.concurso-form .form-group {
    margin-top: 20px;
}

.concurso-form .form-control {
    border-radius: 0;
    border-color: #1d2554;
}

.btn-success {
    background-color: #f7a600;
    border-color: #f7a600;
    color: #FFFFFF;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    width: 200px;
    border-radius: 0;
    transition: background-color 0.3s;
}

.btn-space { margin-top: 15px; margin-bottom: 15px; }

.btn-secondary {
    background-color: #1d2554;
    border-color: #1d2554;
    color: #FFFFFF;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    width: 200px;
    border-radius: 0;
    transition: background-color 0.3s;
}

.btn-success:hover {
    background-color: #fccd8e;
    border-color: #fccd8e;
    color: #FFFFFF;
}

.input-group {
    display: flex;
    align-items: center;
    gap: 2px;
    width: 100%;
}

.input-group input {
    flex: 1;
    text-align: center;
}

.input-group span {
    font-weight: bold;
    color: #1d2554;
}

.form-group label {
    font-weight: bold;
}

.form-group .form-control {
    font-weight: normal;
}

.asignatura-wrapper {
    display: flex;
    align-items: center;
    gap: 10px;
    justify-content: space-between;
    margin-top: 15px;
}

.asignatura-wrapper .btn-primary {
    background-color: #f7a600;
    border-color: #f7a600;
    color: #FFFFFF;
    padding: 10px 20px;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    border-radius: 0;
    transition: background-color 0.3s;
}

.asignatura-wrapper .btn-primary:hover {
    background-color: #fccd8e;
    border-color: #fccd8e;
    color: #FFFFFF;
}

.asignatura-label {
    text-align: center;
    margin-top: 30px;
    font-weight: bold;
    font-size: 16px;
    color: #1d2554;
}

.asignatura-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #bdd7ed;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 5px;
    border-radius: 0px;
}

.asignatura-item span {
    flex: 1;
    color: #1d2554;
    font-weight: 600;
}

.asignatura-item button {
    background-color: #f44336;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 0px;
    margin: 2px;
}

.asignatura-item button:hover {
    background-color: #d32f2f;
}

#docente-section {
    margin-top: 20px;
}

#docente-input {
    width: 100%;
    padding: 5px;
    border-radius: 0;
    border-color: #1d2554;
    background-color: #e9ecef;
    color: #495057;
    cursor: not-allowed;
    resize: none;
    margin-top: 10px;
}

.docente-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #bdd7ed;
    padding: 10px;
    margin-bottom: 5px;
    border-radius: 0px;
}

.docente-item span {
    flex: 1;
    color: #1d2554;
    font-weight: 600;
}

.docente-item button {
    background-color: #f44336;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 0px;
}

.docente-item button:hover {
    background-color: #d32f2f;
}

#docente-results .table {
    margin-top: 20px;
}

#docente-results .table th,
#docente-results .table td {
    text-align: center;
    vertical-align: middle;
}

.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination button {
    background-color: #1d2554;
    color: #FFFFFF;
    border: none;
    padding: 10px 15px;
    margin: 0 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.pagination button:hover {
    background-color: #f7a600;
}

.pagination button:disabled {
    background-color: #cccccc;
    cursor: not-allowed;
}

@media screen and (max-width: 768px) {
    .concurso-form {
        width: 90%;
    }
    .input-group input {
        text-align: left;
    }
}
</style>

<div class="concurso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="concurso-form">

        <?php $form = ActiveForm::begin(); ?>

        <!-- Número de Expediente -->
        <div class="form-group">
            <label for="numero-expediente">Número de Expediente</label>
            <div class="input-group" style="align-items: center;">
                <span>EX-</span>
                <?= $form->field($model, 'expediente_ano', ['template' => "{input}\n{error}"])->textInput(['maxlength' => 4, 'placeholder' => 'Año', 'id' => 'expediente-ano']) ?>
                <span>-</span>
                <?= $form->field($model, 'expediente_numero', ['template' => "{input}\n{error}"])->textInput(['maxlength' => 8, 'placeholder' => 'Número', 'id' => 'expediente-numero']) ?>
                <span>--UBA-</span>
                <?= $form->field($model, 'expediente_dependencia', ['template' => "{input}\n{error}"])->textInput(['maxlength' => 20, 'placeholder' => 'Dep.', 'id' => 'expediente-dependencia']) ?>
            </div>
        </div>

        <!-- Tipo de Concurso -->
        <?= $form->field($model, 'id_tipo_concurso')->dropDownList($tiposConcursoList, [
            'prompt' => 'Seleccione un Tipo de Concurso',
            'id' => 'tipo-concurso',
        ]) ?>

        <!-- Unidad Académica -->
        <?= $form->field($model, 'id_facultad')->dropDownList($facultadesList, [
            'prompt' => 'Seleccione una Unidad Académica',
            'id' => 'unidad-academica',
            'onchange' => "
                var selectedValue = this.value;
                fetch('" . Url::to(['get-departamentos']) . "?id_facultad=' + selectedValue)
                    .then(response => response.json())
                    .then(data => {
                        var departamentoSelect = document.getElementById('departamento');
                        if (departamentoSelect) {
                            departamentoSelect.innerHTML = '<option>Seleccione un Departamento</option>';
                            Object.keys(data).forEach(function(key) {
                                var option = document.createElement('option');
                                option.value = key;
                                option.text = data[key];
                                departamentoSelect.add(option);
                            });
                        }
                    })
                    .catch(function(error) {
                        console.error('Error al cargar los departamentos:', error);
                    });
            ",
        ]) ?>


        <!-- Departamento -->
        <?= $form->field($model, 'id_area_departamento')->dropDownList([], [
            'prompt' => 'Seleccione un Departamento',
            'id' => 'departamento',
        ]) ?>

        <!-- Área -->
        <?= $form->field($model, 'area')->textInput(['maxlength' => true, 'placeholder' => 'Ingrese el área']) ?>

        <!-- Asignatura -->
        <div class="asignatura-label">Asignatura</div>
        <div class="form-group asignatura-wrapper">
            <?= AutoComplete::widget([
                'name' => 'asignatura-input',
                'options' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese una asignatura',
                    'id' => 'asignatura-input',
                ],
                'clientOptions' => [
                    'source' => Url::to(['get-asignaturas']),
                    'select' => new \yii\web\JsExpression('function(event, ui) {
                        addAsignatura(ui.item.label, ui.item.value);
                        this.value = "";
                        return false;
                    }'),
                ],
            ]); ?>
            <?= Html::hiddenInput('ConcursoPendiente[asignaturas_seleccionadas]', '', ['id' => 'asignaturas-seleccionadas-input']) ?>
            

            <button type="button" id="agregar-asignatura" class="btn btn-primary" onclick="agregarAsignatura()">Agregar</button>
        </div>

        <div id="asignaturas-container">
            <!-- Aquí se agregarán las asignaturas seleccionadas -->
        </div>

        <!-- Comentarios -->
        <?= $form->field($model, 'comentario')->textarea(['rows' => 3, 'placeholder' => 'Ingrese comentarios adicionales']) ?>

        <!-- Categoría -->
        <?= $form->field($model, 'id_categoria')->dropDownList($categoriasList, ['prompt' => 'Seleccione una Categoría']) ?>

        <!-- Dedicación -->
        <?= $form->field($model, 'id_dedicacion')->dropDownList($dedicacionesList, ['prompt' => 'Seleccione una Dedicación']) ?>

        <!-- Cantidad de cargos -->
        <?= $form->field($model, 'cantidad_de_puestos')->input('number', ['min' => 1, 'placeholder' => 'Ingrese la cantidad de cargos']) ?>

        <!-- Fecha de Inscripción -->
        <div class="form-group">
            <div class="input-group">
                <?= $form->field($model, 'fecha_inicio_inscripcion')->textInput(['type' => 'date', 'placeholder' => 'Fecha de Inicio']) ?>
                <?= $form->field($model, 'hora_inicio_inscripcion')->textInput(['type' => 'time', 'placeholder' => 'Hora de Inicio']) ?>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <?= $form->field($model, 'fecha_fin_inscripcion')->textInput(['type' => 'date', 'placeholder' => 'Fecha de Fin']) ?>
                <?= $form->field($model, 'hora_fin_inscripcion')->textInput(['type' => 'time', 'placeholder' => 'Hora de Fin']) ?>
            </div>
        </div>

        <!-- Fecha de Publicación y Días de Publicación -->
        <div class="form-group">
            <div class="input-group">
                <?= $form->field($model, 'fecha_publicacion')->textInput(['type' => 'date', 'placeholder' => 'Fecha de Publicación']) ?>
            </div>
        </div>

        <!-- Botón de Cargar Docentes -->
<div id="docente-section" style="display: none; margin-top: 20px;">
    <button type="button" class="btn btn-success" onclick="mostrarModalDocente()">Cargar docentes a cargo</button>
    <textarea id="docente-input" class="form-control" rows="3" disabled>
        <?php if ($model->docenteRenovacion): ?>
            <?= $model->docenteRenovacion->numero_documento ?> (<?= $model->docenteRenovacion->subcargo ?>)
        <?php endif; ?>
    </textarea>
    <!-- Este es el campo oculto que recibirá el valor del docente seleccionado -->
    <?= $form->field($model, 'docente')->hiddenInput(['id' => 'docente-hidden-field'])->label(false) ?>

</div>




        <div class="form-group">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>

<?php
Modal::begin([
    'id' => 'modal-docente',
    'title' => 'Buscar Docente',
    'size' => Modal::SIZE_LARGE,
    'footer' => 
        Html::button('Cerrar', ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal']) .
        Html::button('Aceptar', ['class' => 'btn btn-success', 'onclick' => 'aceptarDocentes()']),
]);

echo '<div class="form-group">';
echo '<label for="docente-dni">Número de Documento</label>';
echo '<input type="text" id="docente-dni" class="form-control">';
echo '</div>';

echo '<div class="form-group">';
echo '<label for="docente-apellido">Apellido</label>';
echo '<input type="text" id="docente-apellido" class="form-control">';
echo '</div>';

echo '<div class="form-group">';
echo '<label for="docente-nombre">Nombre</label>';
echo '<input type="text" id="docente-nombre" class="form-control">';
echo '</div>';

echo '<div class="form-group">';
echo Html::button('Buscar', ['class' => 'btn btn-success btn-space', 'onclick' => 'buscarDocente()']);
echo '</div>';

echo '<div id="docente-results">';
echo '<h4>Resultados de la búsqueda:</h4>';
echo '<table class="table table-striped">';
echo '<thead><tr><th>DNI</th><th>Apellido</th><th>Nombre</th><th>Acción</th></tr></thead>';
echo '<tbody id="docente-results-body"></tbody>';
echo '</table>';
echo '</div>';
echo '<div id="pagination" class="pagination"></div>';

// Contenedor para el botón "Añadir Docente" y los campos correspondientes
echo '<div id="agregar-docente-container" style="display: none;">';
echo '<hr style="margin-top: 10px;">'; 
echo '<h4>Agregar Nuevo Docente</h4>';
echo '<div class="form-group">';
echo '<label for="nuevo-docente-dni">Número de Documento</label>';
echo '<input type="text" id="nuevo-docente-dni" class="form-control">';
echo '</div>';

echo '<div class="form-group">';
echo '<label for="nuevo-docente-apellido">Apellido</label>';
echo '<input type="text" id="nuevo-docente-apellido" class="form-control">';
echo '</div>';

echo '<div class="form-group">';
echo '<label for="nuevo-docente-nombre">Nombre</label>';
echo '<input type="text" id="nuevo-docente-nombre" class="form-control">';
echo '</div>';

echo '<div class="form-group">';
echo Html::button('Agregar Docente', ['class' => 'btn btn-success btn-space', 'onclick' => 'agregarNuevoDocente()']);
echo '</div>';
echo '</div>';

Modal::end();
?>

<script>
    function agregarAsignatura() {
        var asignaturaInput = document.getElementById("asignatura-input").value;
        if (asignaturaInput !== "") {
            addAsignatura(asignaturaInput);
            document.getElementById("asignatura-input").value = "";
        }
    }

    var asignaturasSeleccionadas = [];

function addAsignatura(label, id) {
    asignaturasSeleccionadas.push({ label: label, id: id });
    actualizarContenedorAsignaturas();
    
}

function actualizarContenedorAsignaturas() {
    var container = document.getElementById("asignaturas-container");
    container.innerHTML = ''; // Limpia el contenedor

    asignaturasSeleccionadas.forEach(asignatura => {
        var asignaturaHtml = `
            <div class="asignatura-item" style="margin-bottom: 5px;">
                <span>${asignatura.label}</span>
                <button type="button" class="btn btn-secondary btn-sm" onclick="eliminarAsignatura('${asignatura.id}')">Eliminar</button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', asignaturaHtml);
    });

    // Actualizar el campo hidden para enviar asignaturas al servidor
    var asignaturasInput = document.getElementById("asignaturas-seleccionadas-input");
    if (asignaturasInput) {
        console.log(asignaturasInput.value)
        asignaturasInput.value = JSON.stringify(asignaturasSeleccionadas.map(a => a.id));
    } else {
        console.error("Campo 'asignaturas-seleccionadas-input' no encontrado.");
    }
    
    // Console log para ver el valor actualizado de asignaturas seleccionadas
    console.log("Asignaturas seleccionadas JSON:", asignaturasInput.value);
}



function eliminarAsignatura(id) {
    asignaturasSeleccionadas = asignaturasSeleccionadas.filter(a => a.id !== id);
    actualizarContenedorAsignaturas();
}


document.addEventListener('DOMContentLoaded', function() {
    const tipoConcursoSelect = document.getElementById('tipo-concurso');
    const docenteSection = document.getElementById('docente-section');
    const form = document.querySelector('.concurso-form');
        
    form.addEventListener('submit', function(event) {
        // Log para ver el valor del campo antes de enviar el formulario
        console.log("Asignaturas seleccionadas JSON:", document.getElementById("asignaturas-seleccionadas-input").value);
    });

    tipoConcursoSelect.addEventListener('change', function() {
        const selectedText = this.options[this.selectedIndex].text;
        if (selectedText === 'Renovación de Cargo' || 
            selectedText === 'Cesación de Cargo por Art. 51' || 
            selectedText === 'Provisión Designación Interina') {
            docenteSection.style.display = 'block'; // Muestra la sección
        } else {
            docenteSection.style.display = 'none'; // Oculta la sección si no es necesario
        }
    });
});


    function mostrarModalDocente() {
        var modal = new bootstrap.Modal(document.getElementById('modal-docente'));
        modal.show();
    }

    function buscarDocente(page = 1) {
        var dni = document.getElementById('docente-dni').value;
        var apellido = document.getElementById('docente-apellido').value;
        var nombre = document.getElementById('docente-nombre').value;

        if (!dni && !apellido && !nombre) {
            alert('Debe completar al menos uno de los campos para buscar.');
            return;
        }

        fetch("<?= Url::to(['buscar-docente']) ?>?dni=" + dni + "&apellido=" + apellido + "&nombre=" + nombre + "&page=" + page)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Respuesta del servidor:', data); // Verifica la estructura de la respuesta aquí
                var resultsBody = document.getElementById('docente-results-body');
                resultsBody.innerHTML = '';

                if (Array.isArray(data.docentes) && data.docentes.length === 0) {
                    resultsBody.innerHTML = '<tr><td colspan="4">No se encontraron docentes.</td></tr>';
                } else if (Array.isArray(data.docentes)) {
                    data.docentes.forEach(docente => {
                        var row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${docente.numero_documento}</td>
                            <td>${docente.apellido}</td>
                            <td>${docente.nombre}</td>
                            <td><button type="button" class="btn btn-success btn-sm" onclick="seleccionarDocente(this, '${docente.numero_documento}', '${docente.apellido}', '${docente.nombre}')">Seleccionar</button></td>
                        `;
                        resultsBody.appendChild(row);
                    });
                }

                // Controles de paginación con estilo
                var pagination = document.getElementById('pagination');
                pagination.innerHTML = '';
                if (data.totalPages > 1) {
                    const currentPage = data.currentPage;
                    if (currentPage > 1) {
                        pagination.innerHTML += `<button onclick="buscarDocente(1)">&#171; Primero</button>`;
                        pagination.innerHTML += `<button onclick="buscarDocente(${currentPage - 1})">&#8249; Anterior</button>`;
                    }

                    const maxPagesToShow = 5; // Número máximo de botones de página a mostrar
                    const startPage = Math.max(1, currentPage - Math.floor(maxPagesToShow / 2));
                    const endPage = Math.min(data.totalPages, startPage + maxPagesToShow - 1);

                    for (let i = startPage; i <= endPage; i++) {
                        const activeClass = i === currentPage ? 'active' : '';
                        pagination.innerHTML += `<button class="${activeClass}" onclick="buscarDocente(${i})">${i}</button>`;
                    }

                    if (currentPage < data.totalPages) {
                        pagination.innerHTML += `<button onclick="buscarDocente(${currentPage + 1})">Siguiente &#8250;</button>`;
                        pagination.innerHTML += `<button onclick="buscarDocente(${data.totalPages})">Último &#187;</button>`;
                    }
                }

                // Mostrar el contenedor de "Agregar Nuevo Docente"
                mostrarBotonAgregarDocente();
            })
            .catch(error => {
                console.error('Error al buscar docentes:', error);
                alert('Error al buscar docentes. Inténtelo de nuevo.');
            });
    }

    let docentesSeleccionados = [];

    function seleccionarDocente(button, dni, apellido, nombre) {
    // Actualizar el campo oculto con la información del docente seleccionado
    $('#docente-hidden-field').val(dni); // Aquí puedes asignar DNI o el dato que necesitas
    $('#docente-input').val(`${nombre} ${apellido} (DNI: ${dni})`); // Mostrar el nombre en el modal

    var modal = bootstrap.Modal.getInstance(document.getElementById('modal-docente'));
    modal.hide();
}


function seleccionarDocente(button, dni, apellido, nombre) {
    // Verificar si el docente ya ha sido seleccionado
    if (docentesSeleccionados.some(docente => docente.dni === dni)) {
        alert('Este docente ya ha sido seleccionado.');
        return;
    }

    // Agregar el docente seleccionado al arreglo
    docentesSeleccionados.push({ dni, apellido, nombre });

    // Actualizar el botón para eliminar
    button.textContent = 'Eliminar';
    button.className = 'btn btn-secondary btn-sm';
    button.onclick = function() {
        eliminarDocente(this, dni);
    };

    // Actualizar el textarea con los docentes seleccionados
    const docenteInput = document.getElementById('docente-input');
    docenteInput.value = docentesSeleccionados.map(docente => `${docente.nombre} ${docente.apellido} (DNI: ${docente.dni})`).join('\n');

    // Actualizar el campo oculto con el DNI del docente seleccionado
    const docenteHiddenField = document.getElementById('docente-hidden-field');
    docenteHiddenField.value = dni; // Aquí estamos guardando el DNI en el campo oculto, puedes ajustar según tus necesidades
}

function eliminarDocente(button, dni) {
    // Filtrar el docente eliminado del arreglo
    docentesSeleccionados = docentesSeleccionados.filter(docente => docente.dni !== dni);

    // Eliminar la fila correspondiente en la tabla
    const row = button.closest('tr');
    row.remove();

    // Actualizar el textarea después de eliminar un docente
    const docenteInput = document.getElementById('docente-input');
    docenteInput.value = docentesSeleccionados.map(docente => `${docente.nombre} ${docente.apellido} (DNI: ${docente.dni})`).join('\n');

    // Limpiar el campo oculto si se eliminan todos los docentes
    const docenteHiddenField = document.getElementById('docente-hidden-field');
    if (docentesSeleccionados.length === 0) {
        docenteHiddenField.value = ''; // Limpiar el campo oculto si no quedan docentes
    }
}


    function aceptarDocentes() {
        const docenteInput = document.getElementById('docente-input');
        docenteInput.value = docentesSeleccionados.map(docente => `${docente.nombre} ${docente.apellido} (DNI: ${docente.dni})`).join('\n');

        var modal = bootstrap.Modal.getInstance(document.getElementById('modal-docente'));
        modal.hide();
    }

    function mostrarBotonAgregarDocente() {
        var container = document.getElementById('agregar-docente-container');
        container.style.display = 'block'; // Mostrar el contenedor de "Agregar Docente"
    }

        function seleccionarDocente(button, dni, apellido, nombre) {
        // Actualizar el campo oculto con la información del docente seleccionado
        $('#docente-hidden-field').val(dni); // Aquí puedes asignar DNI o el dato que necesitas
        $('#docente-input').val(`${nombre} ${apellido} (DNI: ${dni})`); // Mostrar el nombre en el modal

        var modal = bootstrap.Modal.getInstance(document.getElementById('modal-docente'));
        modal.hide();
    }


    function agregarNuevoDocente() {
        var dni = document.getElementById('nuevo-docente-dni').value;
        var apellido = document.getElementById('nuevo-docente-apellido').value;
        var nombre = document.getElementById('nuevo-docente-nombre').value;

        var data = {
            dni: dni,
            apellido: apellido,
            nombre: nombre,
            user_id: 0 // Enviar user_id como 0
        };

        console.log("Datos preparados para enviar: ", data);

        fetch("<?= Url::to(['concurso/agregar-docente']) ?>", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': '<?= Yii::$app->request->csrfToken ?>',
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            console.log('Respuesta del servidor:', data);
            if (data.success) {
                alert('Docente añadido exitosamente a la base de datos.');
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error al agregar el docente:', error);
            alert('Error al agregar el docente. Inténtelo de nuevo.');
        });
    }
</script>
