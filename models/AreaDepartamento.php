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

    public $asignaturaIds;

    public function rules()
    {
        return [
            [['id_facultad', 'descripcion_area_departamento', 'activa'], 'required'],
            [['id_facultad', 'activa'], 'integer'],
            [['descripcion_area_departamento'], 'string', 'max' => 255],
            [['asignaturaIds'], 'safe'], // Permite asignación masiva del array de asignaturas
        ];
    }
   

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_area_departamento' => 'ID Área / Departamento',
            'id_facultad' => 'Unidad Académica',
            'descripcion_area_departamento' => 'Nombre del Departamento',
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
            ->viaTable('area_departamento_asignatura', [
                'id_area_departamento' => 'id_area_departamento',
                'id_facultad' => 'id_facultad',
            ]);
    }
    
    
    public function getAsignaturasAsString()
    {
        $asignaturas = (new \yii\db\Query())
            ->select(new \yii\db\Expression("GROUP_CONCAT(DISTINCT asignatura.descripcion_asignatura ORDER BY asignatura.descripcion_asignatura SEPARATOR ', ')"))
            ->from('area_departamento_asignatura')
            ->innerJoin('asignatura', 'asignatura.id_asignatura = area_departamento_asignatura.id_asignatura')
            ->where([
                'area_departamento_asignatura.id_area_departamento' => $this->id_area_departamento,
                'area_departamento_asignatura.id_facultad' => $this->id_facultad,
            ])
            ->scalar();
            
        return $asignaturas ?: 'Sin asignaturas';
    }
    
    
    
    

    /**
     * Relación con la tabla Facultad.
     * Devuelve la unidad académica asociada al área/departamento.
     */
    public function getFacultad()
    {
        return $this->hasOne(Facultad::class, ['id_facultad' => 'id_facultad']);
    }

    /**
     * Antes de guardar, asigna un ID si no está definido (porque no es autoincremental)
     */
    public function beforeSave($insert)
    {
        if ($insert && empty($this->id_area_departamento)) {
            // Obtener el último ID registrado y sumarle 1
            $maxId = (new \yii\db\Query())
                ->select('MAX(id_area_departamento)')
                ->from(self::tableName())
                ->scalar();

            $this->id_area_departamento = $maxId ? $maxId + 1 : 1; // Si la tabla está vacía, arranca en 1
        }

        return parent::beforeSave($insert);
    }

    public function afterSave($insert, $changedAttributes)
    {
        // Primero, eliminamos cualquier relación previa para este departamento y facultad.
        \Yii::$app->db->createCommand()->delete('area_departamento_asignatura', [
            'id_area_departamento' => $this->id_area_departamento,
            'id_facultad' => $this->id_facultad,
        ])->execute();

        // Si se han seleccionado asignaturas, convertimos el valor a arreglo y las insertamos.
        $ids = $this->asignaturaIds;
        if (!is_array($ids) && !empty($ids)) {
            $ids = explode(',', $ids);
        }
        
        if (is_array($ids)) {
            foreach ($ids as $id_asignatura) {
                \Yii::$app->db->createCommand()->insert('area_departamento_asignatura', [
                    'id_area_departamento' => $this->id_area_departamento,
                    'id_facultad' => $this->id_facultad,
                    'id_asignatura' => $id_asignatura,
                ])->execute();
            }
        }
    }
}
