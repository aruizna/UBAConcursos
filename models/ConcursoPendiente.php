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
 * @property int|null $id_categoria
 * @property int|null $id_categoria_minima
 * @property int|null $id_dedicacion
 * @property int|null $id_dedicacion_minima
 * @property int|null $id_area_departamento
 * @property int|null $cantidad_de_puestos
 * @property string|null $fecha_inicio_inscripcion
 * @property string|null $fecha_fin_inscripcion
 * @property string|null $hora_inicio_inscripcion
 * @property string|null $hora_fin_inscripcion
 * @property int|null $id_tipo_informe
 * @property string|null $fecha_publicacion
 * @property int|null $cantidad_dias_publicacion
 * @property string|null $fecha_publicacion_prueba_oposicion
 * @property int|null $id_tipo_presupuesto
 * @property int|null $ultimo_numero_movimiento
 * @property string|null $comentario
 * @property int|null $lck_concurso
 * @property string|null $fecha_sorteo_publicada
 * @property string|null $fecha_entrevista_prueba_publicada
 * @property int|null $estado_propuesta_jurados_preliminar
 * @property int|null $estado_propuesta_preliminar
 * @property int|null $firmantes_comision_seleccionados
 */
class ConcursoPendiente extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'concurso_pendiente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tipo_concurso', 'id_facultad', 'id_categoria', 'id_categoria_minima', 'id_dedicacion', 'id_dedicacion_minima', 'id_area_departamento', 'cantidad_de_puestos', 'id_tipo_informe', 'cantidad_dias_publicacion', 'id_tipo_presupuesto', 'ultimo_numero_movimiento', 'lck_concurso', 'estado_propuesta_jurados_preliminar', 'estado_propuesta_preliminar', 'firmantes_comision_seleccionados'], 'integer'],
            [['fecha_inicio_inscripcion', 'fecha_fin_inscripcion', 'fecha_publicacion', 'fecha_publicacion_prueba_oposicion', 'fecha_sorteo_publicada', 'fecha_entrevista_prueba_publicada'], 'safe'],
            [['numero_expediente'], 'string', 'max' => 50],
            [['hora_inicio_inscripcion', 'hora_fin_inscripcion'], 'string', 'max' => 5],
            [['comentario'], 'string', 'max' => 400],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_concurso_pendiente' => 'ID',
            'numero_expediente' => 'Número de Expediente',
            'id_tipo_concurso' => 'Tipo de Concurso',
            'id_facultad' => 'Facultad',
            'id_categoria' => 'Categoría',
            'id_categoria_minima' => 'Categoría Mínima',
            'id_dedicacion' => 'Dedicación',
            'id_dedicacion_minima' => 'Dedicación Mínima',
            'id_area_departamento' => 'Área/Departamento',
            'cantidad_de_puestos' => 'Cantidad de Puestos',
            'fecha_inicio_inscripcion' => 'Fecha de Inicio de Inscripción',
            'fecha_fin_inscripcion' => 'Fecha de Fin de Inscripción',
            'hora_inicio_inscripcion' => 'Hora de Inicio de Inscripción',
            'hora_fin_inscripcion' => 'Hora de Fin de Inscripción',
            'id_tipo_informe' => 'Tipo de Informe',
            'fecha_publicacion' => 'Fecha de Publicación',
            'cantidad_dias_publicacion' => 'Cantidad de Días de Publicación',
            'fecha_publicacion_prueba_oposicion' => 'Fecha de Publicación de Prueba de Oposición',
            'id_tipo_presupuesto' => 'Tipo de Presupuesto',
            'ultimo_numero_movimiento' => 'Último Número de Movimiento',
            'comentario' => 'Comentario',
            'lck_concurso' => 'Lock Concurso',
            'fecha_sorteo_publicada' => 'Fecha de Sorteo Publicada',
            'fecha_entrevista_prueba_publicada' => 'Fecha de Entrevista/Prueba Publicada',
            'estado_propuesta_jurados_preliminar' => 'Estado de Propuesta de Jurados Preliminar',
            'estado_propuesta_preliminar' => 'Estado de Propuesta Preliminar',
            'firmantes_comision_seleccionados' => 'Firmantes de Comisión Seleccionados',
        ];
    }
}
