<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "area_catedra_asignatura".
 *
 * @property int $id_area_catedra
 * @property int $id_asignatura
 * @property int $id_facultad
 *
 * @property AreaCatedra $areaCatedra
 * @property Asignatura $asignatura
 */
class AreaCatedraAsignatura extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area_catedra_asignatura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_area_catedra', 'id_asignatura', 'id_facultad'], 'required'],
            [['id_area_catedra', 'id_asignatura', 'id_facultad'], 'integer'],
            [['id_area_catedra', 'id_asignatura'], 'unique', 'targetAttribute' => ['id_area_catedra', 'id_asignatura']],
        ];
    }

    /**
     * Relación con la tabla AreaCatedra.
     */
    public function getAreaCatedra()
    {
        return $this->hasOne(AreaCatedra::class, ['id_area_catedra' => 'id_area_catedra']);
    }

    /**
     * Relación con la tabla Asignatura.
     */
    public function getAsignatura()
    {
        return $this->hasOne(Asignatura::class, ['id_asignatura' => 'id_asignatura']);
    }
}
