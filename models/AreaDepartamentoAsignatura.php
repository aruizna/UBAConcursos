<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Clase `AreaDepartamentoAsignatura` representa la tabla `area_departamento_asignatura`
 */
class AreaDepartamentoAsignatura extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'area_departamento_asignatura';
    }

    /**
     * Define la relación con el modelo `Asignatura`.
     */
    public function getAsignatura()
    {
        return $this->hasOne(Asignatura::class, ['id_asignatura' => 'id_asignatura']);
    }

    /**
     * Define la relación con el modelo `AreaDepartamento`.
     */
    public function getAreaDepartamento()
    {
        return $this->hasOne(AreaDepartamento::class, ['id_area_departamento' => 'id_area_departamento']);
    }
}
