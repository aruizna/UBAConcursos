<?php

namespace app\models;

use yii\db\ActiveRecord;

class PersonasHistorico extends ActiveRecord
{
    public static function tableName()
    {
        return 'personas_historico';
    }

    // Reglas de validación específicas para DNI, apellido y nombre
    public function rules()
    {
        return [
            [['dni', 'apellido', 'nombre'], 'safe'], // Safe para permitir búsquedas
        ];
    }

    // Labels personalizados si lo necesitas
    public function attributeLabels()
    {
        return [
            'dni' => 'DNI',
            'apellido' => 'Apellido',
            'nombre' => 'Nombre',
        ];
    }
}

