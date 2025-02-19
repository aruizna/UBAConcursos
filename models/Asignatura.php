<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asignatura".
 *
 * @property int $id_asignatura
 * @property int $id_facultad
 * @property string $descripcion_asignatura
 * @property string $habilitada
 * @property string|null $numero_resolucion
 * @property string|null $observaciones
 *
 * // Atributos virtuales para dividir el número de resolución
 * @property string $numero_resolucion_ano
 * @property string $numero_resolucion_numero
 */
class Asignatura extends \yii\db\ActiveRecord
{
    /**
     * Atributos virtuales para manejar el número de resolución dividido.
     */
    public $numero_resolucion_ano;
    public $numero_resolucion_numero;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asignatura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_facultad', 'descripcion_asignatura', 'habilitada'], 'required'],
            [['id_asignatura', 'id_facultad'], 'integer'],
            [['descripcion_asignatura'], 'string', 'max' => 150],
            [['habilitada'], 'string', 'max' => 1],
            [['numero_resolucion'], 'string', 'max' => 50], // Asegurar 50 caracteres
            [['observaciones'], 'string', 'max' => 255],
            
            // Validaciones para los nuevos atributos virtuales
            [['numero_resolucion_ano'], 'match', 'pattern' => '/^\d{4}$/', 'message' => 'El año debe tener 4 dígitos.'],
            [['numero_resolucion_numero'], 'match', 'pattern' => '/^\d{8}$/', 'message' => 'El número debe tener 8 dígitos.'],
            [['numero_resolucion_ano', 'numero_resolucion_numero'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_asignatura' => Yii::t('app', 'Id Asignatura'),
            'id_facultad' => Yii::t('app', 'Unidad Académica'),
            'descripcion_asignatura' => Yii::t('app', 'Descripción de la Asignatura'),
            'habilitada' => Yii::t('app', 'Habilitada'),
            'numero_resolucion' => Yii::t('app', 'Número de Resolución'),
            'numero_resolucion_ano' => Yii::t('app', 'Año de Resolución'),
            'numero_resolucion_numero' => Yii::t('app', 'Número de Resolución'),
            'observaciones' => Yii::t('app', 'Observaciones'),
        ];
    }

    /**
     * Manipula los valores antes de guardar en la base de datos.
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if (!empty($this->numero_resolucion_ano) && !empty($this->numero_resolucion_numero)) {
                $this->numero_resolucion = "RESCS-{$this->numero_resolucion_ano}-{$this->numero_resolucion_numero}-E-UBA";
            }
            return true;
        }
        return false;
    }

    /**
     * Se ejecuta después de recuperar los datos de la base de datos.
     */
    public function afterFind()
    {
        parent::afterFind();
        if (!empty($this->numero_resolucion)) {
            $parts = explode('-', $this->numero_resolucion);
            if (count($parts) >= 3) {
                $this->numero_resolucion_ano = $parts[1]; // Año
                $this->numero_resolucion_numero = $parts[2]; // Número
            }
        }
    }

    public static function find()
    {
        return new AsignaturaQuery(get_called_class());
    }

    public function getAreaDepartamentoAsignaturas()
    {
        return $this->hasMany(AreaDepartamentoAsignatura::class, ['id_asignatura' => 'id_asignatura']);
    }

    public function getFacultad()
    {
        return $this->hasOne(Facultad::class, ['id_facultad' => 'id_facultad']);
    }
}
