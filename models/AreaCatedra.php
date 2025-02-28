<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "area_catedra".
 *
 * @property int $id_area_catedra
 * @property int $id_facultad
 * @property string $nombre_area_catedra
 * @property int $activa
 *
 * @property Asignatura[] $asignaturas
 */
class AreaCatedra extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asignatura_carrera';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_facultad', 'nombre_area_catedra', 'activa'], 'required'],
            [['id_facultad', 'activa'], 'integer'],
            [['nombre_area_catedra'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_area_catedra' => 'ID Área / Cátedra',
            'id_facultad' => 'Unidad Académica',
            'nombre_area_catedra' => 'Nombre del Área / Cátedra',
            'activa' => 'Activa',
        ];
    }

    /**
     * Relación con la tabla Facultad.
     * Devuelve la unidad académica asociada al área/cátedra.
     */
    public function getFacultad()
    {
        return $this->hasOne(Facultad::class, ['id_facultad' => 'id_facultad']);
    }

    /**
     * Relación con la tabla de asignaturas.
     * Devuelve las asignaturas asociadas al área/cátedra.
     */
    public function getAsignaturas()
    {
        return $this->hasMany(Asignatura::class, ['id_asignatura' => 'id_asignatura'])
            ->viaTable('area_catedra_asignatura', ['id_area_catedra' => 'id_area_catedra']);
    }

    /**
     * Devuelve las asignaturas asociadas como una cadena de texto.
     */
    public function getAsignaturasAsString()
    {
        return implode(', ', array_map(fn($asignatura) => $asignatura->descripcion_asignatura, $this->asignaturas));
    }
}


