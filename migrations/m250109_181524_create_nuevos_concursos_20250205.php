<?php

use yii\db\Migration;

/**
 * Class m250109_181524_create_nuevos_concursos_20250205
 */
class m250109_181524_create_nuevos_concursos_20250205 extends Migration
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
                [3035, 3, 'Seguridad de los Sistemas de Información', 's', NULL, NULL],  
                [3036, 3, 'Teoría de los Lenguajes y Algoritmos', 's', NULL, NULL], 
                [3037, 3, 'Introducción a la Tecnología de la Información Y Comunicaciones', 's', NULL, NULL],  
                [3038, 3, 'Introducción a la Tecnología de la Información Y las Comunicaciones', 's', NULL, NULL], 
                [3039, 3, 'Tecnología de los Computadores Y Sistemas Operativos', 's', NULL, NULL], 
                [3040, 3, 'Gestión de Recursos Informáticos', 's', NULL, NULL], 
                [3041, 9, 'Didácticas Específicas', 's', NULL, NULL], 
                [3042, 9, 'Problemas de Antropología Social y Política', 's', NULL, NULL], 
                [3043, 10, '67-13 Conocimiento de Materiales I', 's', NULL, NULL], 
                [3044, 10, '67-16 Ensayos Industriales', 's', NULL, NULL], 
                [3045, 10, 'Conocimiento de materiales metálicos', 's', NULL, NULL], 
                [3046, 10, 'Daño Y fractura de elementos mecánicos', 's', NULL, NULL], 
                [3047, 10, 'Tratamientos Térmicos Y de superficie', 's', NULL, NULL], 
                [3048, 10, 'Materiales metálicos Y sus aplicaciones', 's', NULL, NULL], 
                [3049, 10, '76-53 Diseño de Reactores', 's', NULL, NULL], 
                [3050, 10, '76-63 Diseño avanzado de Reactores', 's', NULL, NULL], 
                [3051, 10, '76-08 Ingeniería de las Reacciones Químicas', 's', NULL, NULL], 
                [3052, 10, 'Hidrógeno como vector energético y aplicaciones industriales', 's', NULL, NULL], 
                [3053, 11, 'Patología', 's', NULL, NULL], 
            ]
        );

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [479, 3, 'Departamento de Matemática', 1],
                [480, 9, 'Departamento de Geografía', 1],
                [481, 10, 'Departamento Ingeniería Mecánica', 1],
                [482, 11, 'Departamento de Patología', 1],
                [483, 11, 'Departamento de Salud Pública', 1],
                
            ]
        );



        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-05346002-   -UBA-DMESA#SSA_FAGRO' , 1,  1, 4, 1, 428, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, 'Cátedra de Economía General', '' ], 
                ['EX-2024-03654673-   -UBA-DME#FCE'         , 4,  3, 4, 1, 106, 2, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ], 
                ['EX-2024-03977161-  -UBA-DME#FCE'          , 2,  3, 4, 1, 478, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-04316888-   -UBA-DME#FCE'         , 1,  3, 4, 1, 436, 4, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05096159-   -UBA-DME#FCE'         , 1,  3, 4, 1, 478, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05096224-   -UBA-DME#FCE'         , 1,  3, 4, 1, 478, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05100102-  -UBA-DME#FCE'          , 1,  3, 4, 1, 478, 2, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05167671-   -UBA-DME#FCE'         , 1,  3, 2, 3, 478, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, 'Grupo de asignaturas del Área Actuarial, tema de investigación: Modelos de Inteligencia Artificial explicables en la gestión de Riesgo Financiero', '' ],
                ['EX-2024-05651337-   -UBA-DME#FCE'         , 4,  3, 2, 1, 478, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05651352-  -UBA-DME#FCE'          , 4,  3, 4, 1, 478, 5, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05651363-   -UBA-DME#FCE'         , 4,  3, 4, 1, 478, 3, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05651372-   -UBA-DME#FCE'         , 4,  3, 4, 1, 478, 2, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05651380-   -UBA-DME#FCE'         , 4,  3, 4, 1, 478, 2, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05651385-   -UBA-DME#FCE'         , 4,  3, 2, 1, 478, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05651395-   -UBA-DME#FCE'         , 4,  3, 4, 1, 478, 2, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05652713-   -UBA-DME#FCE'         , 4,  3, 2, 1, 478, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05652754-   -UBA-DME#FCE'         , 4,  3, 4, 1, 478, 2, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05652770-   -UBA-DME#FCE'         , 4,  3, 4, 1, 478, 2, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05655324- -UBA-DME#FCE'           , 4,  3, 4, 1, 478, 2, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-04342364-   -UBA-DME#FCE'         , 4,  3, 4, 1, 112, 2, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, 'Grupo de Asignaturas de Contabilidad', '' ],
                ['EX-2024-04931107-   -UBA-DMESA#FCEN'      , 1,  4, 3, 3, 415, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, 'Área Climatología, Meteorología Aplicada', '' ],
                ['EX-2024-01432663-   -UBA-DME#FFYL'        , 1,  9, 4, 2, 432, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ], 
                ['EX-2024-02363436-   -UBA-DME#FFYL'        , 1,  9, 3, 3, 430, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-03182525-   -UBA-DME#FFYL'        , 1,  9, 4, 1,  15, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2023-04746104-   -UBA-DME#FFYL'        , 2,  9, 4, 1, 422, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2023-04746165-   -UBA-DME#FFYL'        , 2,  9, 4, 1, 422, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05037358-   -UBA-DME#FFYL'        , 1,  9, 4, 1, 473, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05222594- -UBA-DME#FFYL'          , 1,  9, 4, 1, 480, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-05222617-   -UBA-DME#FFYL'        , 1,  9, 2, 1, 480, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-04112735-   -UBA-DIMEDA#SA_FI'    , 4, 10, 4, 1, 429, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, 'Área de docencia Comunicaciones y Redes', '' ],
                ['EX-2024-05281716-   -UBA-DIMEDA#SA_FI'    , 1, 10, 4, 3, 481, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, 'Área de docencia: Materiales, área de investigación: Tecnología de Soldadura y en materiales mecánicos', '' ],
                ['EX-2022-06940945-   -UBA-DIMEDA#SA_FI'    , 4, 10, 4, 3, 461, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, 'área de docencia: Reacciones Químicas y Biológicas, área de investigación: Catálisis', '' ],
                ['EX-2024-06003877-   -UBA-DMEA#FMED'       , 2, 11, 2, 1, 438, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-06446529-   -UBA-DMEA#FMED'       , 1, 11, 4, 1, 438, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-06446634-   -UBA-DMEA#FMED'       , 1, 11, 4, 1, 438, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-06446974-   -UBA-DMEA#FMED'       , 1, 11, 2, 1, 471, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-06447623-   -UBA-DMEA#FMED'       , 1, 11, 4, 1, 482, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-06447725-   -UBA-DMEA#FMED'       , 1, 11, 4, 1, 471, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ],
                ['EX-2024-06447977-   -UBA-DMEA#FMED'       , 1, 11, 4, 1, 483, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, '', '' ], 
                ['EX-2024-05962630- -UBA-DMEDA#FODON'       , 1, 12, 4, 1, null, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, 'Cátedra Endodoncia', '' ],
                ['EX-2024-05962639- -UBA-DMEDA#FODON'       , 1, 12, 4, 1, null, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, 'Cátedra Endodoncia', '' ],
                ['EX-2024-05962686-   -UBA-DMEDA#FODON'     , 1, 12, 4, 1, null, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, 'Cátedra Materiales Dentales', '' ],
                ['EX-2024-05962698- -UBA-DMEDA#FODON'       , 1, 12, 4, 2, null, 1, '2025-01-09 09:00:00', '2025-03-07 09:00:00', '09:00', '18:00', '2025-02-05', 1, 'Cátedra Odontología Integral Niños', '' ]
            ]
        );


        # EX-2024-05346002-   -UBA-DMESA#SSA_FAGRO
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1113,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-05346002-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05346002-   -UBA-DMESA#SSA_FAGRO
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            337,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-05346002-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-03654673-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            679,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03654673-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-03977161-  -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            112,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03977161-  -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-03977161-  -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3035,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03977161-  -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04316888-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            7,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04316888-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05096159-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3036,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05096159-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05096224-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            112,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05096224-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05096224-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3035,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05096224-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05100102-  -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            440,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05100102-  -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05167671-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            61,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05167671-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05167671-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            118,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05167671-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05651337-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3037,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05651337-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        # EX-2024-05651352-  -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3038,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05651352-  -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();      

        # EX-2024-05651363-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3039,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05651363-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05651372-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2559,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05651372-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05651380-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2560,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05651380-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05651385-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1371,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05651385-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();        

        # EX-2024-05651395-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            944,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05651395-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05652713-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1453,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05652713-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05652754-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3040,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05652754-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05652770-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1371,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05652770-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05655324- -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2541,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05655324- -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04342364-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1469,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04342364-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04342364-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1368,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04342364-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04342364-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2551,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04342364-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04931107-   -UBA-DMESA#FCEN
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2743,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();        

        # EX-2024-01432663-   -UBA-DME#FFYL
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            299,
            9
            from concurso c
            where c.numero_expediente = 'EX-2024-01432663-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-02363436-   -UBA-DME#FFYL
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            504,
            9
            from concurso c
            where c.numero_expediente = 'EX-2024-02363436-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-03182525-   -UBA-DME#FFYL
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            846,
            9
            from concurso c
            where c.numero_expediente = 'EX-2024-03182525-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2023-04746104-   -UBA-DME#FFYL
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            229,
            9
            from concurso c
            where c.numero_expediente = 'EX-2023-04746104-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2023-04746165-   -UBA-DME#FFYL
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3041,
            9
            from concurso c
            where c.numero_expediente = 'EX-2023-04746165-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05037358-   -UBA-DME#FFYL
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3042,
            9
            from concurso c
            where c.numero_expediente = 'EX-2024-05037358-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05222594- -UBA-DME#FFYL
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            588,
            9
            from concurso c
            where c.numero_expediente = 'EX-2024-05222594- -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05222617-   -UBA-DME#FFYL
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            754,
            9
            from concurso c
            where c.numero_expediente = 'EX-2024-05222617-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04112735-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2934,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-04112735-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04112735-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2935,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-04112735-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04112735-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2249,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-04112735-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04112735-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2936,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-04112735-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04112735-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            740,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-04112735-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04112735-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2165,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-04112735-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05281716-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3043,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-05281716-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05281716-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3044,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-05281716-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05281716-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3045,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-05281716-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05281716-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1964,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-05281716-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05281716-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3046,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-05281716-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05281716-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3047,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-05281716-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05281716-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3048,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-05281716-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2022-06940945-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3049,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-06940945-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2022-06940945-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3050,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-06940945-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2022-06940945-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3051,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-06940945-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2022-06940945-   -UBA-DIMEDA#SA_FI
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3052,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-06940945-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-06003877-   -UBA-DMEA#FMED
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1032,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-06003877-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-06446529-   -UBA-DMEA#FMED
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1032,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-06446529-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-06446634-   -UBA-DMEA#FMED
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1032,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-06446634-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-06446974-   -UBA-DMEA#FMED
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1357,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-06446974-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-06447623-   -UBA-DMEA#FMED
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3053,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-06447623-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();
       
        # EX-2024-06447725-   -UBA-DMEA#FMED
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            983,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-06447725-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-06447977-   -UBA-DMEA#FMED
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1315,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-06447977-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962630- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2878,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962630- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962630- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2873,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962630- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962630- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2874,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962630- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962630- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2876,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962630- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962630- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2035,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962630- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962630- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2877,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962630- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        

        # EX-2024-05962639- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2878,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962639- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962639- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2873,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962639- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962639- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2874,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962639- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962639- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2876,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962639- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962639- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2035,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962639- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962639- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2877,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962639- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        # EX-2024-05962686-   -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2039,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962686-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    
        # EX-2024-05962686-   -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2040,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962686-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    
        # EX-2024-05962686-   -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2041,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962686-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962698- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            212,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962698- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05962698- -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2044,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-05962698- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();






        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Eduardo Luis ', 'POLCAN ', '00000393',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Iván Carlos ', 'CARRINO ', '00000394',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Martín Joel ', 'GONILSKI PACIN ', '00000395',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Giselle Leticia ', 'CRESPO ', '00000396',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mónica Susana ', 'GOMEZ ', '00000397',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Rubén Antonio ', 'LARUMBE ', '00000398',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ethel Edith ', 'ZULLI ', '00000399',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Víctor Gustavo ', 'VERIANSKY ', '00000400',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gastón Ignacio ', 'MARRA ', '00000401',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Cintia Mónica ', 'MARTINEZ ', '00000402',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Luis Alberto ', 'TRAJTENBERG ', '00000403',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Javier Ignacio ', 'GARCIA FRONTI ', '00000404',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Cecilia ', 'ORIOLO ', '00000405',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Germán Kurt ', 'GRIN ', '00000406',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Enrique Oscar ', 'DONDERO ', '00000407',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Noelia Carolina ', 'MASSONE ', '00000408',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Fernándo Javier ', 'MARTINI ', '00000409',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Pablo Cristóbal ', 'ROTA ', '00000410',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Miguel Antonio ', 'MARTINEZ ', '00000411',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Javier Fernando ', 'GIUGGIO ', '00000412',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Verónika Lisseth ', 'QUISPE QUINTANA ', '00000413',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Rodrigo Luis ', 'ABULAFIA ', '00000414',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Víctor Gustavo ', 'VERIANSKY ', '00000415',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ricardo Eduardo ', 'CRIVARO ', '00000416',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gustavo Damián Fernando ', 'GUZMAN ', '00000417',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcelo Esteban ', 'BLANCO ', '00000418',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Daniel Federico ', 'COTUREL ', '00000419',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Fernando Luis ', 'GOLDFRYD ', '00000420',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ernesto ', 'CHINKES ', '00000421',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Cinthia Beatriz ', 'GUALTIERI ', '00000422',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gabriel Ilidio ', 'SANCHEZ CAPALBO ', '00000423',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Diego Hernán ', 'CARRALBAL ', '00000424',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Héctor Augusto  ', 'TORCHAN ', '00000425',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Virginia Eduarda ', 'CHAINA ', '00000426',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Carla Andrea ', 'YUDOSWSKY ', '00000427',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gastón Patricio ', 'DRAQUE ', '00000428',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Edgardo Martín ', 'JELENEK ', '00000429',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gustavo Hernán ', 'SCHNEIDER ', '00000430',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Pablo ', 'VILLA ', '00000431',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Vicente Javier ', 'IUORIO ', '00000432',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Jhon Edison ', 'ESCOBAR DUQUE ', '00000433',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Griselda Mabel ', 'SANTIAGO ', '00000434',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Claudio Guillermo ', 'MENÉNDEZ ', '00000435',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marisa Raquel ', 'MASSONE ', '00000436',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Eleonora Eva ', 'ORLANDO ', '00000437',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Claudia Andrea ', 'ROMÁN ', '00000438',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Virginia Lilian ', 'MANZANO ', '00000439',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Hortensia ', 'CASTRO ', '00000440',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Perla Brígida ', 'ZUSMAN ', '00000441',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ricardo Javier ', 'IUZZOLINO ', '00000442',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Hernán Gabriel ', 'SVOBODA ', '00000443',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Laura ', 'DIEUZEIDE ', '00000444',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Javier Fernando ', 'CASIRAGHI ', '00000445',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Josué Marcelo ', 'ZAS ', '00000446',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Aníbal Marcelo ', 'ALTAMIRANO ', '00000447',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Verónica Irene D’ANNUNZIO ', '', '00000448',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Diego Esteban ', 'PITIOT ', '00000449',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Federico Ariel ', 'AUGUSTOVSKI ', '00000450',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Pablo Javier ', 'PEREZ RODRIGUEZ ', '00000451',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Pablo Alejandro ', 'MARTINEZ ', '00000452',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Eleonora ', 'MACCHI ', '00000453',0)";
        Yii::$app->db->createCommand($sql)->execute();
       $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Verónica Herminia ', 'PAVAN ', '00000454',0)";
        Yii::$app->db->createCommand($sql)->execute(); 





        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000393',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05346002-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000394',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03654673-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000395',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03654673-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000396',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04316888-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000397',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04316888-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000398',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04316888-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000399',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04316888-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000400',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05096159-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000401',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05096224-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000402',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05100102-  -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000403',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05100102-  -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000404',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05167671-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000405',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651337-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000406',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651352-  -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000407',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651352-  -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000408',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651352-  -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000409',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651352-  -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000410',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651352-  -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000411',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651363-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000412',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651363-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000413',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651363-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000414',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651363-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000415',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651372-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000416',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651372-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000417',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651372-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000418',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651380-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000419',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651380-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000420',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651380-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000421',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651385-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000422',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651385-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000423',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651395-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000424',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651395-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000425',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05651395-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000426',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05652713-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000427',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05652754-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000428',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05652754-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000429',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05652770-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000430',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05652770-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000431',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05655324- -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000432',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05655324- -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000433',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04342364-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000434',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04342364-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000435',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000436',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01432663-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000437',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02363436-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000438',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03182525-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000439',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05037358-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000440',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05222594- -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000441',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05222617-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000442',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04112735-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000443',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05281716-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000444',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-06940945-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000445',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-06446529-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000446',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-06446634-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000447',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-06446974-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000448',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-06447623-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();
     
        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000449',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-06447725-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000450',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-06447977-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000451',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05962630- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000452',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05962639- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000453',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05962686-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion
            select
            c.id_concurso,
            NULL,
            '00000454',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05962698- -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
















    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250109_181524_create_nuevos_concursos_20250205 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250109_181524_create_nuevos_concursos_20250205 cannot be reverted.\n";

        return false;
    }
    */
}
