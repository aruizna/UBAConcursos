<?php

use yii\db\Migration;

/**
 * Class m240327_015549_insert_nuevos_concursos
 */
class m240327_215549_insert_nuevos_concursos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [408, 4, 'Departamento de Computación', 1],
                [409, 4, 'Departamento de Ecología, Genética y Evolución', 1],
                [410, 4, 'Departamento de Biodiversidad y Biología Experimental', 1],
                
            ]
        );

        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area"],
            [
                ['EX-2023-05138214-   -UBA-DMESA#FCEN', 2, 4, 4, 1, 1, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'área Física Nuclear, Física de Partículas y Campos, Gravitación y Cosmología'],
                ['EX-2023-05004215-   -UBA-DMESA#FCEN', 2, 4, 4, 3, 13, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'área Química y Microbiología de  Alimentos'],
                ['EX-2023-03623530-   -UBA-DIMEDA#SA_FI', NULL, 10, 2, 1, 100, 1, '2023-11-23', '2024-04-08', '9:00', '18:00', '2023-11-22', 137, 'área de docencia: Vial. Materiales Viales y Pavimentos'],
                ['EX-2023-05004557-   -UBA-DMESA#FCEN', 2, 4, 4, 1, 113, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'área Matemática Aplicada a Las Ciencias Naturales'],
                ['EX-2023-05004502-   -UBA-DMESA#FCEN', 2, 4, 4, 3, 113, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'área de Análisis Numérico'],
                ['EX-2023-04652968-   -UBA-DMESA#FCEN', NULL, 4, 4, 1, 409, 1, '2023-11-23', '2024-04-08', '9:00', '18:00', '2023-11-22', 137, 'área Ciencias de Datos con orientación Interdisciplinaria'],
                ['EX-2023-05003285-   -UBA-DMESA#FCEN', 2, 4, 4, 1, 409, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'área Ecología de Poblaciones/Comportamiento'],
                ['EX-2023-05003399-   -UBA-DMESA#FCEN', NULL, 4, 4, 1, 409, 1, '2023-11-23', '2024-04-08', '9:00', '18:00', '2023-11-22', 137, 'área Macroevolución,'],
                ['EX-2023-05018503-   -UBA-DMESA#FCEN', 1, 4, 3, 1, 410, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'área Biología y Sistemática Animal'],
                ['EX-2023-05018619-   -UBA-DMESA#FCEN', 1, 4, 4, 3, 410, 1, '2023-11-23', '2024-04-08', '9:00', '18:00', '2023-11-22', 137, 'área Biología Sistemática Animal, subárea Morfológica'],
                ['EX-2023-05233079-   -UBA-DMESA#FCEN', 2, 4, 4, 3, 410, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'área Biología y Sistemática Animal, subárea Morfológica'],
                ['EX-2023-02397009-   -UBA-DMESA#FCEN', 1, 4, 3, 1, NULL, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'área: Sedimentología'],
                ['EX-2023-05003795-   -UBA-DMESA#FCEN', 2, 4, 4, 1, NULL, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'área Oceanografía'],
                ['EX-2023-05164318-   -UBA-DMESA#FCEN', 2, 4, 4, 1, NULL, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'área Geodinámica Exógena'],
                ['EX-2023-05254860-   -UBA-DMESA#FCEN', 2, 4, 4, 1, NULL, 2, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'área: Química Inorgánica, Analítica y Química Física'],
                ['EX-2023-05164911-   -UBA-DMESA#FCEN', NULL, 4, 4, 1, NULL, 1, '2023-11-23', '2024-04-08', '9:00', '18:00', '2023-11-22', 137, 'área de Geología Minera'],
                ['EX-2023-05213279-   -UBA-DMEDA#FODON', NULL, 12, 4, 1, NULL, 1, '2023-11-23', '2024-04-08', '9:00', '18:00', '2023-11-22', 137, 'cátedra Odontología Integral del Adulto Mayor y Clínica de Prótesis Removible,'],
                ['EX-2023-05300780-   -UBA-DMEDA#FODON', NULL, 12, 2, 2, NULL, 1, '2023-11-23', '2024-04-08', '9:00', '18:00', '2023-11-22', 137, 'cátedra Preclínica de Odontología Restauradora'],
                ['EX-2023-05465307-   -UBA-DMESA#SG_FVET', 1, 6, 4, 2, NULL, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, NULL],
                ['EX-2023-05121189-   -UBA-DMEDA#FODON', NULL, 12, 4, 2, NULL, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'cátedra Odontología Preventiva y Comunitaria'],
                ['EX-2023-05465416-   -UBA-DMESA#SG_FVET', 1, 6, 3, 3, NULL, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, NULL],
                ['EX-2023-05465474-   -UBA-DMESA#SG_FVET', 1, 6, 4, 3, NULL, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, NULL],
                ['EX-2023-05465535-   -UBA-DMESA#SG_FVET', 1, 6, 4, 3, NULL, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, NULL],
                ['EX-2023-05138264-   -UBA-DMESA#FCEN', 2, 4, 4, 3, NULL, 1, '2023-12-12', '2024-04-24', '9:00', '18:00', '2023-12-11', 134, 'área Física Atómica y Molecular, Interacción Luz-Materia e Información Cuántica']
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240327_015549_insert_nuevos_concursos cannot be reverted.\n";

        return false;
    }

    /*
            // Use up()/down() to run migration code without a transaction.
            public function up()
            {

            }

            public function down()
            {
                echo "m240327_015549_insert_nuevos_concursos cannot be reverted.\n";

                return false;
            }
            */
}
