<?php

use yii\db\Migration;

/**
 * Class m240416_061523_create_new_asignatures
 */
class m240416_061523_create_new_asignatures extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert(
            "asignatura",
            ["id_asignatura", "id_facultad", "descripcion_asignatura", "habilitada","numero_resolucion","observaciones"],
            [
                [2841, 1, 'Asignatura obligatoria: Mejoramiento Genético', 's', NULL, NULL],
                [2842, 1, 'Producción Orgánica de Granos y Forrajes', 's', NULL, NULL],
                [2843, 1, 'Asignatura electiva: Agroecología', 's', NULL, NULL],
                [2844, 9, 'Psicolingüística II', 's', NULL, NULL],
                [2845, 9, 'Psicolingüística I', 's', NULL, NULL],
                [2846, 9, 'Literatura Española Medieval', 's', NULL, NULL],
                [2847, 10, 'Taller de Procesamiento de Señales', 's', NULL, NULL],
                [2848, 10, 'Procesamiento Estadístico de Señales', 's', NULL, NULL],
                [2849, 10, 'Aprendizaje Profundo', 's', NULL, NULL],
                [2850, 10, 'Taller de Sistemas Embebidos', 's', NULL, NULL],
                [2851, 10, 'Diseño y Verificación Digital', 's', NULL, NULL],
                [2852, 10, 'Taller de Sistemas Digitales', 's', NULL, NULL],
                [2853, 10, 'Sistemas Operativos Embebidos', 's', NULL, NULL],
                [2854, 10, 'Ciberseguridad de Redes e Infraestructuras Críticas', 's', NULL, NULL],
                [2855, 10, 'Comunicación y Computación Cuántica', 's', NULL, NULL],
                [2856, 10, 'Control Automático', 's', NULL, NULL],
                [2857, 10, 'Control Automático Multivariable', 's', NULL, NULL],
                [2858, 10, 'Control Automático Avanzado', 's', NULL, NULL],
                [2859, 10, 'Robótica Móvil', 's', NULL, NULL],
                [2860, 10, '62-01 Física I “A”', 's', NULL, NULL],
                [2861, 10, '62-03 Física II “A”', 's', NULL, NULL],
                [2862, 10, '62-04 Física II “B”', 's', NULL, NULL],
                [2863, 10, '82-01 Física I', 's', NULL, NULL],
                [2864, 10, '82-02 Física II', 's', NULL, NULL],
                [2865, 10, '82-03 Física III', 's', NULL, NULL],
                [2866, 10, '62-06 Mecánica I', 's', NULL, NULL],
                [2867, 12, 'Articulación Docencia - Servicios de Salud: Epidemiología y Gestión de Salud', 's', NULL, NULL],
                [2868, 12, 'Articulación Docencia-Servicio-Investigación: Práctica Social Educativa) (N503)', 's', NULL, NULL],
                [2869, 12, 'Oclusión y Articulación Temporomandibular', 's', NULL, NULL],
                [2870, 12, 'Endodoncia', 's', NULL, NULL],
                [2871, 12, 'Operatoria', 's', NULL, NULL],
                [2872, 12, 'Periodoncia y Prótesis Parcial Fija', 's', NULL, NULL],
                [2873, 12, 'Endodoncia I (N209)', 's', NULL, NULL],
                [2874, 12, 'Endodoncia II (N308)', 's', NULL, NULL],
                [2875, 12, 'Nuevas Tecnologías en Odontología Rehabilitadora (N406)', 's', NULL, NULL],
                [2876, 12, 'Módulo Asistencial de Urgencias Odontológicas (N505)', 's', NULL, NULL],
                [2877, 12, 'Traumatismos Dentarios (N605)', 's', NULL, NULL],
                [2878, 12, 'Clínica Integrada III (Endodoncia, Operatoria, Periodoncia y Prótesis Parcial Fija)', 's', NULL, NULL],
                [2879, 12, 'Ortodoncia, Oclusión y Articulación Temporomandibular', 's', NULL, NULL],
                [2880, 12, 'Ortodoncia I (N506)', 's', NULL, NULL],
                [2881, 12, 'Ortodoncia II (N603)', 's', NULL, NULL],
                [2882, 75, 'Introducción al Conocimiento de la Sociedad y el Estado', 's', NULL, NULL]
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240416_061523_create_new_asignatures cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240416_061523_create_new_asignatures cannot be reverted.\n";

        return false;
    }
    */
}
