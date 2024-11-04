<?php

use yii\db\Migration;

/**
 * Class m241104_145117_create_nuevos_concursos_20241104
 */
class m241104_145117_create_nuevos_concursos_20241104 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->batchInsert(
            "asignatura",
            ["id_asignatura", "id_facultad", "descripcion_asignatura", "habilitada", "numero_resolucion", "observaciones"],
            [
                [2998, 1, 'Planeamiento Estratégico en Empresas de Turismo Rural', 's', NULL, NULL],
                [2999, 4, 'Biodiversidad Vegetal', 's', NULL, NULL],
                [3000, 10, 'Química Básica', 's', NULL, NULL],
                [3001, 10, 'Laboratorio de Química', 's', NULL, NULL],
                [3002, 10, 'Química y Electroquímica', 's', NULL, NULL],
                [3003, 10, 'Química General', 's', NULL, NULL],
                [3004, 10, 'Química de los Hidrocarburos', 's', NULL, NULL],
                [3005, 10, 'Termodinámica del no-equilibrio', 's', NULL, NULL],

                              
            ]
        );

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
//                [474, 11, 'Departamento de Microbiología, Parasitología e Inmunología', 1],
            ]
        );

        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-02833286-   -UBA-DMESA#SSA_FAGRO',    2, 1, 2, 3,   433, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'Área de Forrajicultura', '' ], 
                ['EX-2024-04552534-   -UBA-DMESA#SSA_FAGRO',    4, 1, 4, 3,   428, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'Cátedra de Administración Rural', '' ], 
                ['EX-2024-04552639-   -UBA-DMESA#SSA_FAGRO',    4, 1, 4, 1,   428, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'Cátedra de Administración Rural', '' ],
                ['EX-2024-04552734-   -UBA-DMESA#SSA_FAGRO',    4, 1, 4, 2,   428, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'Cátedra de Administración Rural', '' ],
                ['EX-2024-04821777-   -UBA-DMESA#SSA_FAGRO',    1, 1, 4, 2,   433, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'Cátedra de Fisiología Animal', '' ],
                ['EX-2024-03950321-   -UBA-DMESA#FCEN',         1, 4, 3, 3,   410, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'Área Biología y Sistemática Vegetal', '' ],
                ['EX-2024-03986929-   -UBA-DMESA#FCEN',         1, 4, 4, 1,   410, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'Área Biología y Sistemática Vegetal', '' ],
                ['EX-2024-04931090-   -UBA-DMESA#FCEN',         1, 4, 4, 3,   415, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'Área Climatología', '' ],
                ['EX-2024-04931128-   -UBA-DMESA#FCEN',         1, 4, 3, 1,   415, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'Área Oceanografía Costera', '' ],
                ['EX-2024-02546494-   -UBA-DIMEDA#SA_FI',       4, 10, 4, 3,  434, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'Área de docencia Química Básica, Área de investigación: Preparación y caracterización de matrices poliméricas biodegradables', '' ],
                ['EX-2024-02546644-   -UBA-DIMEDA#SA_FI',       4, 10, 4, 3,  434, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'Área de docencia Química Básica, Área de investigación: Desarrollo de procesos de remediación aplicados a suelos contaminados', '' ],
                ['EX-2024-02575594-   -UBA-DIMEDA#SA_FI',       4, 10, 4, 3,  434, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'área de docencia Química Física, área de investigación: Estudio teórico y empírico del escalado de reactores de adsorción', '' ],
                ['EX-2024-05077894-   -UBA-DMEA#FMED',          2, 11, 2, 1,  449, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, '', '' ],
                ['EX-2024-05077942-   -UBA-DMEA#FMED',          2, 11, 4, 1,  449, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, '', '' ],
                ['EX-2024-05180858- -UBA-DMEDA#FODON',          1, 12, 2, 2, null, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, 'Cátedra Cirugía y Traumatología Bucomaxilofacial II', '' ],        
                ['EX-2024-05025049-   -UBA-DMRD#SHA_FPSI',      1, 13, 4, 2,    1, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, '', '' ],
                ['EX-2024-05025072-   -UBA-DMRD#SHA_FPSI',      1, 13, 4, 2,    1, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, '', '' ],
                ['EX-2024-05025101-   -UBA-DMRD#SHA_FPSI',      1, 13, 4, 2,    1, 2, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, '', '' ],
                ['EX-2024-05025119-   -UBA-DMRD#SHA_FPSI',      1, 13, 4, 2,    1, 1, '2024-11-04 09:00:00', '2024-12-05 18:00:00', '09:00', '18:00', '2024-11-04', 1, '', '' ],

            ]
        );



            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2611,
                1
                from concurso c
                where c.numero_expediente = 'EX-2024-02833286-   -UBA-DMESA#SSA_FAGRO'
            ";
            Yii::$app->db->createCommand($sql)->execute();


# EX-2024-04552534-   -UBA-DMESA#SSA_FAGRO

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2601,
                1
                from concurso c
                where c.numero_expediente = 'EX-2024-04552534-   -UBA-DMESA#SSA_FAGRO'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                4,
                1
                from concurso c
                where c.numero_expediente = 'EX-2024-04552534-   -UBA-DMESA#SSA_FAGRO'
            ";
            Yii::$app->db->createCommand($sql)->execute();

# EX-2024-04552639-   -UBA-DMESA#SSA_FAGRO

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2601,
                1
                from concurso c
                where c.numero_expediente = 'EX-2024-04552639-   -UBA-DMESA#SSA_FAGRO'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2998,
                1
                from concurso c
                where c.numero_expediente = 'EX-2024-04552639-   -UBA-DMESA#SSA_FAGRO'
            ";
            Yii::$app->db->createCommand($sql)->execute();

# EX-2024-04552734-   -UBA-DMESA#SSA_FAGRO

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2601,
                1
                from concurso c
                where c.numero_expediente = 'EX-2024-04552734-   -UBA-DMESA#SSA_FAGRO'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2650,
                1
                from concurso c
                where c.numero_expediente = 'EX-2024-04552734-   -UBA-DMESA#SSA_FAGRO'
            ";
            Yii::$app->db->createCommand($sql)->execute();

# EX-2024-04821777-   -UBA-DMESA#SSA_FAGRO

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                120,
                1
                from concurso c
                where c.numero_expediente = 'EX-2024-04821777-   -UBA-DMESA#SSA_FAGRO'
            ";
            Yii::$app->db->createCommand($sql)->execute();


# EX-2024-03950321-   -UBA-DMESA#FCEN	- 4

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                746,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2999,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2805,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2799,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2800,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2631,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2334,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2632,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2801,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2633,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2634,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2654,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2802,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2635,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2636,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


# EX-2024-03986929-   -UBA-DMESA#FCEN	- 4

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                746,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2999,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2805,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2799,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2800,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2631,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2334,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2632,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2801,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2633,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2634,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2654,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2802,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2635,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2636,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-04931090-   -UBA-DMESA#FCEN	- 4

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            930,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2729,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            198,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2732,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";

        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2730,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2731,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2754,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1754,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2759,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";

        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2761,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2731,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2754,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1754,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2759,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";

        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2761,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


# EX-2024-04931128-   -UBA-DMESA#FCEN	- 4

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1026,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            934,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2726,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
  
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2610,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            900,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            188,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2611,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2781,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
  
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2727,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2612,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2615,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2617,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2616,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
  
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2782,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2783,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2728,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
  
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2618,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2784,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-02546494-   -UBA-DIMEDA#SA_FI		- 10

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3000,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02546494-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3001,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02546494-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3002,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02546494-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3003,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02546494-   -UBA-DIMEDA#SA_FI'
        ";

        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2585,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02546494-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-02546644-   -UBA-DIMEDA#SA_FI		- 10

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3000,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02546644-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3001,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02546644-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3002,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02546644-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3003,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02546644-   -UBA-DIMEDA#SA_FI'
        ";

        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2585,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02546644-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-02575594-   -UBA-DIMEDA#SA_FI		- 10

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2581,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02575594-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2582,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02575594-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3004,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02575594-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2237,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02575594-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3005,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02575594-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-05077894-   -UBA-DMEA#FMED - 11
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1000,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-05077894-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-05077942-   -UBA-DMEA#FMED - 11

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1000,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-05077942-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-05180858- -UBA-DMEDA#FODON

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            195,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05180858- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2026,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05180858- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-05025049-   -UBA-DMRD#SHA_FPSI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1264,
            13
            from concurso c
            where c.numero_expediente = 'EX-2024-05025049-   -UBA-DMRD#SHA_FPSI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-05025072-   -UBA-DMRD#SHA_FPSI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2288,
            13
            from concurso c
            where c.numero_expediente = 'EX-2024-05025072-   -UBA-DMRD#SHA_FPSI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-05025101-   -UBA-DMRD#SHA_FPSI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            656,
            13
            from concurso c
            where c.numero_expediente = 'EX-2024-05025101-   -UBA-DMRD#SHA_FPSI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-05025119-   -UBA-DMRD#SHA_FPSI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1234,
            13
            from concurso c
            where c.numero_expediente = 'EX-2024-05025119-   -UBA-DMRD#SHA_FPSI'
        ";
        Yii::$app->db->createCommand($sql)->execute();




        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Rita María Andrea', 'MARRA', '00000274',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Víctor Fabián', 'PIÑEYRO', '00000275',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Cristina Helena', 'RAS', '00000276',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Rafael', 'FERNÁNDEZ Y MARTÍN', '00000277',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gabriela', 'AMODEO', '00000278',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Leopoldo Javier', 'IANNONE', '00000279',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Laura', 'BETTOLLI', '00000280',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Walter César', 'DRAGANI', '00000281',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María valeria', 'DEBANDI', '00000282',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Analia Veronica', 'RUSSO', '00000283',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Jorge Pablo', 'DE CELIS', '00000284',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Federico', 'STOLBIZER', '00000285',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Claudio', 'GODOY', '00000286',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Patricia', 'ALVAREZ', '00000287',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Florencia', 'IBARRA', '00000288',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Pablo Emilio', 'PAVESI', '00000289',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcela', 'BOTTINELLI', '00000290',0)";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000274',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04552534-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000275',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04552639-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000276',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04552734-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000277',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04821777-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000278',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03950321-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000279',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03986929-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000280',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04931090-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000281',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04931128-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000282',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02546494-   -UBA-DIMEDA#SA_FI'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000283',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02546644-   -UBA-DIMEDA#SA_FI'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000284',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02575594-   -UBA-DIMEDA#SA_FI'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000285',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05180858- -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000286',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05025049-   -UBA-DMRD#SHA_FPSI'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000287',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05025072-   -UBA-DMRD#SHA_FPSI'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 


        $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000288',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-05025101-   -UBA-DMRD#SHA_FPSI'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000289',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-05025101-   -UBA-DMRD#SHA_FPSI'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000290',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-05025119-   -UBA-DMRD#SHA_FPSI'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 












    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241104_145117_create_nuevos_concursos_20241104 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241104_145117_create_nuevos_concursos_20241104 cannot be reverted.\n";

        return false;
    }
    */
}
