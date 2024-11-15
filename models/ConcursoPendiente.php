<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "concurso_pendiente".
 *
 * @property int $id_concurso_pendiente
 * @property string|null $numero_expediente
 * @property int|null $id_tipo_concurso
 * @property int|null $id_facultad
 * @property int|null $id_area_departamento
 * @property string|null $comentario
 * @property int|null $id_categoria
 * @property int|null $id_dedicacion
 * @property int|null $cantidad_de_puestos
 * @property string|null $fecha_inicio_inscripcion
 * @property string|null $fecha_fin_inscripcion
 * @property string|null $hora_inicio_inscripcion
 * @property string|null $hora_fin_inscripcion
 * @property string|null $fecha_publicacion
 * @property string|null $docente_ocupa_cargo
 * @property string|null $asignaturas_seleccionadas
 */
class ConcursoPendiente extends ActiveRecord
{
    public $area;
    public $expediente_ano;
    public $expediente_numero;
    public $expediente_dependencia;

    public static function tableName()
    {
        return 'concurso_pendiente';
    }

    public function rules()
    {
        return [
            [['id_tipo_concurso', 'id_facultad', 'id_area_departamento', 'id_categoria', 'id_dedicacion', 'cantidad_de_puestos', 'fecha_inicio_inscripcion', 'hora_inicio_inscripcion', 'hora_fin_inscripcion', 'fecha_publicacion'], 'required'],
            [['id_tipo_concurso', 'id_facultad', 'id_area_departamento', 'id_categoria', 'id_dedicacion', 'cantidad_de_puestos'], 'integer'],
            [['fecha_inicio_inscripcion', 'fecha_fin_inscripcion', 'hora_inicio_inscripcion', 'hora_fin_inscripcion', 'fecha_publicacion'], 'safe'],
            [['comentario'], 'string', 'max' => 400],
            [['area'], 'string', 'max' => 255],
            [['numero_expediente'], 'string', 'max' => 50],
            [['expediente_ano'], 'required', 'message' => 'El año es obligatorio'],
            [['expediente_ano'], 'match', 'pattern' => '/^\d{4}$/', 'message' => 'El año debe tener 4 dígitos'],
            [['expediente_numero'], 'required', 'message' => 'El número es obligatorio'],
            [['expediente_numero'], 'match', 'pattern' => '/^\d{1,8}$/', 'message' => 'El número debe tener entre 1 y 8 dígitos'],
            [['expediente_dependencia'], 'required', 'message' => 'La dependencia es obligatoria'],
            [['expediente_dependencia'], 'string', 'max' => 20],
            [['asignaturas_seleccionadas'], 'safe'],
            ['fecha_publicacion', 'validateDates'],
            [['docente'], 'safe'],
        ];
    }
    
    
    public function attributeLabels()
    {
        return [
            'id_concurso_pendiente' => 'ID',
            'numero_expediente' => 'Número de Expediente',
            'id_tipo_concurso' => 'Tipo de Concurso',
            'id_facultad' => 'Unidad Académica',
            'id_area_departamento' => 'Departamento',
            'area' => 'Área',
            'comentario' => 'Comentarios',
            'id_categoria' => 'Categoría',
            'id_dedicacion' => 'Dedicación',
            'cantidad_de_puestos' => 'Cantidad de Cargos',
            'fecha_inicio_inscripcion' => 'Fecha de Inicio de Inscripción',
            'fecha_fin_inscripcion' => 'Fecha de Fin de Inscripción',
            'hora_inicio_inscripcion' => 'Hora de Inicio de Inscripción',
            'hora_fin_inscripcion' => 'Hora de Fin de Inscripción',
            'fecha_publicacion' => 'Fecha de Publicación',
            'asignaturas_seleccionadas' => 'Asignaturas Seleccionadas',
            'docente' => 'Docente a Cargo',
        ];
    }

    // Relaciones
    public function getTipoConcurso()
    {
        return $this->hasOne(TipoConcurso::class, ['id_tipo_concurso' => 'id_tipo_concurso']);
    }

    public function getFacultad()
    {
        return $this->hasOne(Facultad::class, ['id_facultad' => 'id_facultad']);
    }

    public function getCategoria()
    {
        return $this->hasOne(Categoria::class, ['id_categoria' => 'id_categoria']);
    }

    public function getDedicacion()
    {
        return $this->hasOne(Dedicacion::class, ['id_dedicacion' => 'id_dedicacion']);
    }

    public function getAreaDepartamento()
    {
        return $this->hasOne(AreaDepartamento::class, ['id_area_departamento' => 'id_area_departamento']);
    }

 
    public function getAsignaturas()
    {
        return $this->hasMany(Asignatura::class, ['id' => 'asignatura_id'])
                    ->viaTable('concurso_asignatura', ['concurso_pendiente_id' => 'id_concurso_pendiente']);
    }
 
 
    public function getAsignaturasNombres()
    {
        $asignaturaIds = is_array($this->asignaturas_seleccionadas) ? $this->asignaturas_seleccionadas : [];
    
        if (!empty($asignaturaIds)) {
            $asignaturas = Asignatura::find()
                ->select('descripcion_asignatura')
                ->where(['id_asignatura' => $asignaturaIds])
                ->column();
    
            return implode(', ', $asignaturas); 
        }
    
        return 'N/A';
    }
    
    
    public function getDocenteNombre()
    {
        if (!is_array($this->docente) || empty($this->docente)) {
            return ['N/A'];
        }
    
        // Recorrer los docentes y construir una lista de nombres completos
        $docentesNombres = [];
        foreach ($this->docente as $docente) {
            $nombreCompleto = $docente['apellido'] . ' ' . $docente['nombre'];
            $docentesNombres[] = $nombreCompleto;
        }
        return $docentesNombres;
    }
    
    


    public function validateDates($attribute, $params)
    {
        if ($this->fecha_publicacion && $this->fecha_inicio_inscripcion) {
            $fechaPublicacion = strtotime($this->fecha_publicacion);
            $fechaInicioInscripcion = strtotime($this->fecha_inicio_inscripcion);
    
            if ($fechaPublicacion > $fechaInicioInscripcion) {
                $this->addError($attribute, 'La fecha de publicación no puede ser posterior a la fecha de inicio de inscripción.');
            }
        }
    }
    

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            // Procesar número de expediente
            $this->numero_expediente = 'EX-' . $this->expediente_ano . '-' . $this->expediente_numero . '--UBA-' . $this->expediente_dependencia;
    
            // Convertir las fechas y horas a formato datetime
            if ($this->fecha_inicio_inscripcion && $this->hora_inicio_inscripcion) {
                $this->fecha_inicio_inscripcion .= ' ' . $this->hora_inicio_inscripcion . ':00';
            } else {
                $this->fecha_inicio_inscripcion = null;
            }
    
            if ($this->fecha_fin_inscripcion && $this->hora_fin_inscripcion) {
                $this->fecha_fin_inscripcion .= ' ' . $this->hora_fin_inscripcion . ':00';
            } else {
                $this->fecha_fin_inscripcion = null;
            }
    
            if ($this->fecha_publicacion) {
                $this->fecha_publicacion .= ' 00:00:00';
            }
    
            // Convertir el campo docente a JSON si es un array
            if (is_array($this->docente)) {
                $this->docente = json_encode($this->docente, JSON_UNESCAPED_UNICODE);
            }
    
            // Convertir asignaturas_seleccionadas a JSON si es un array
            if (is_array($this->asignaturas_seleccionadas)) {
                $this->asignaturas_seleccionadas = json_encode($this->asignaturas_seleccionadas, JSON_UNESCAPED_UNICODE);
            }
    
            return true;
        }
        return false;
    }
     
public function afterFind()
{
    parent::afterFind();

    // Procesar número de expediente en componentes
    if ($this->numero_expediente) {
        $parts = explode('-', str_replace('--UBA-', '-', $this->numero_expediente));
        $this->expediente_ano = $parts[1];
        $this->expediente_numero = $parts[2];
        $this->expediente_dependencia = $parts[3];
    }

    // Decodificar asignaturas_seleccionadas solo si es un string JSON
    if (is_string($this->asignaturas_seleccionadas)) {
        $this->asignaturas_seleccionadas = json_decode($this->asignaturas_seleccionadas, true) ?? [];
    }

    // Decodificar el campo docente solo si es un string JSON
    if (is_string($this->docente)) {
        $this->docente = json_decode($this->docente, true) ?? [];
    }
}

    

    public function getDocenteRenovacion()
    {
        return $this->hasOne(PersonaConcursoRenovacion::class, ['id_concurso' => 'id_concurso_pendiente']);
    }
}
