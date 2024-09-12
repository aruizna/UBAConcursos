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
 */
class ConcursoPendiente extends ActiveRecord
{
    public $area;
    public $expediente_ano;
    public $expediente_numero;
    public $expediente_dependencia;
    public $asignaturas_seleccionadas = [];

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
            [['expediente_numero'], 'match', 'pattern' => '/^\d{1,6}$/', 'message' => 'El número debe tener entre 1 y 6 dígitos'],
            [['expediente_dependencia'], 'required', 'message' => 'La dependencia es obligatoria'],
            [['expediente_dependencia'], 'string', 'max' => 20],
            [['asignaturas_seleccionadas'], 'safe'],
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

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->numero_expediente = 'EX-' . $this->expediente_ano . '-' . $this->expediente_numero . '--UBA-' . $this->expediente_dependencia;
    
            // Convertir las fechas y horas a formato datetime
            $this->fecha_inicio_inscripcion = $this->fecha_inicio_inscripcion ? $this->fecha_inicio_inscripcion . ' 00:00:00' : null;
            $this->fecha_fin_inscripcion = $this->fecha_fin_inscripcion ? $this->fecha_fin_inscripcion . ' 00:00:00' : null;
            $this->fecha_publicacion = $this->fecha_publicacion ? $this->fecha_publicacion . ' 00:00:00' : null;
    
            return true;
        } else {
            return false;
        }
    }

    public function afterFind()
    {
        parent::afterFind();

        // Divide el valor del número de expediente para mostrarlo en los campos correctos
        if ($this->numero_expediente) {
            $parts = explode('-', str_replace('--UBA-', '-', $this->numero_expediente));
            $this->expediente_ano = $parts[1];
            $this->expediente_numero = $parts[2];
            $this->expediente_dependencia = $parts[3];
        }
    }
}
