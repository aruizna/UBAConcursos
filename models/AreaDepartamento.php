<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "area_departamento".
 *
 * @property int $id_area_departamento
 * @property int $id_facultad
 * @property string $descripcion_area_departamento
 * @property int $activa
 *
 * @property Asignatura[] $asignaturas
 */
class AreaDepartamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area_departamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_facultad', 'descripcion_area_departamento', 'activa'], 'required'],
            [['id_facultad', 'activa'], 'integer'],
            [['descripcion_area_departamento'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_area_departamento' => 'ID Área / Cátedra',
            'id_facultad' => 'Unidad Académica',
            'descripcion_area_departamento' => 'Nombre del Área / Cátedra',
            'activa' => 'Activa',
        ];
    }

    /**
     * Relación con la tabla de asignaturas.
     * Devuelve las asignaturas asociadas al área/departamento.
     */
    public function getAsignaturas()
    {
        return $this->hasMany(Asignatura::class, ['id_asignatura' => 'id_asignatura'])
            ->viaTable('area_departamento_asignatura', ['id_area_departamento' => 'id_area_departamento']);
    }
    
    

    /**
     * Devuelve las asignaturas asociadas como una cadena de texto.
     */
    public function getAsignaturasAsString()
    {
        $asignaturas = $this->asignaturas;
        return implode(', ', array_map(function ($asignatura) {
            return $asignatura->descripcion_asignatura;
        }, $asignaturas));
    }

    /**
     * Relación con la tabla Facultad.
     * Devuelve la unidad académica asociada al área/departamento.
     */
    public function getFacultad()
    {
        return $this->hasOne(Facultad::class, ['id_facultad' => 'id_facultad']);
    }
}
