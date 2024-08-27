<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%concurso_pendiente}}`.
 */
class m240819_143634_create_concurso_pendiente_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%concurso_pendiente}}', [
            'id_concurso_pendiente' => $this->primaryKey(),
            'numero_expediente' => $this->string(50)->defaultValue(null),
            'id_tipo_concurso' => $this->integer()->defaultValue(null),
            'id_facultad' => $this->integer()->defaultValue(null),
            'id_categoria' => $this->integer()->defaultValue(null),
            'id_categoria_minima' => $this->integer()->defaultValue(null),
            'id_dedicacion' => $this->integer()->defaultValue(null),
            'id_dedicacion_minima' => $this->integer()->defaultValue(null),
            'id_area_departamento' => $this->integer()->defaultValue(null),
            'cantidad_de_puestos' => $this->integer()->defaultValue(null),
            'fecha_inicio_inscripcion' => $this->dateTime()->defaultValue(null),
            'fecha_fin_inscripcion' => $this->dateTime()->defaultValue(null),
            'hora_inicio_inscripcion' => $this->string(5)->defaultValue(null),
            'hora_fin_inscripcion' => $this->string(5)->defaultValue(null),
            'id_tipo_informe' => $this->integer()->defaultValue(null),
            'fecha_publicacion' => $this->dateTime()->defaultValue(null),
            'cantidad_dias_publicacion' => $this->integer()->defaultValue(null),
            'fecha_publicacion_prueba_oposicion' => $this->dateTime()->defaultValue(null),
            'id_tipo_presupuesto' => $this->integer()->defaultValue(null),
            'ultimo_numero_movimiento' => $this->integer()->defaultValue(null),
            'comentario' => $this->string(400)->defaultValue(null),
            'lck_concurso' => $this->integer()->defaultValue(null),
            'fecha_sorteo_publicada' => $this->dateTime()->defaultValue(null),
            'fecha_entrevista_prueba_publicada' => $this->dateTime()->defaultValue(null),
            'estado_propuesta_jurados_preliminar' => $this->integer()->defaultValue(null),
            'estado_propuesta_preliminar' => $this->integer()->defaultValue(null),
            'firmantes_comision_seleccionados' => $this->integer()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%concurso_pendiente}}');
    }
}
