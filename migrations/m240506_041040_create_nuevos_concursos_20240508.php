<?php

use yii\db\Migration;

/**
 * Class m240506_041040_create_nuevos_concursos_20240508
 */
class m240506_041040_create_nuevos_concursos_20240508 extends Migration
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
                [436, 3, 'Departamento de Administración', 1],
                [437, 7, 'Departamento de Derecho Económico y Empresarial', 1],
                [438, 11, 'Departamento de Cirugía', 1],
                [439, 11, 'Departamento de Histología, Biología Celular, Embriología y Genética', 1],
                [440, 11, 'Departamento de Medicina Legal y Deontología Médica', 1],
            ]
        );

        $this->batchInsert(
            "asignatura",
            ["id_asignatura", "id_facultad", "descripcion_asignatura", "habilitada", "numero_resolucion", "observaciones"],
            [
                [2889, 10, 'Circuitos Microelectrónicos', 's', NULL, NULL],
                [2890, 10, 'Taller de Diseño de Circuitos Electrónicos', 's', NULL, NULL],
                [2891, 10, 'Visión por Computadora', 's', NULL, NULL],
                [2892, 11, 'Histología', 's', NULL, NULL],
                [2893, 11, 'Embriología', 's', NULL, NULL],
            ]
        );

        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2022-06200751-   -UBA-DME#FCE', 1, 3, 3, 1, 436, 1, '2024-05-08 09:00:00', '2024-06-04 18:00:00', '09:00', '18:00', '2024-05-07', 1, '', ''],
                ['EX-2022-07090174-   -UBA-DME#FCE', 1, 3, 4, 1, 436, 4, '2024-05-08 09:00:00', '2024-06-04 18:00:00', '09:00', '18:00', '2024-05-07', 1, '', ''],
                ['EX-2023-05526002-   -UBA-DC#SA_FDER', 1, 7, 4, 1, 431, 10, '2024-05-08 09:00:00', '2024-06-04 18:00:00', '09:00', '18:00', '2024-05-07', 1, '', ''],
                ['EX-2023-05526914-   -UBA-DC#SA_FDER', 1, 7, 2, 1, 437, 1, '2024-05-08 09:00:00', '2024-06-04 18:00:00', '09:00', '18:00', '2024-05-07', 1, '', ''],
                ['EX-2021-04404562-   -UBA-DIMEDA#SA_FI', 4, 10, 2, 3, 429, 1, '2024-05-08 09:00:00', '2024-06-04 18:00:00', '09:00', '18:00', '2024-05-07', 1, 'Procesamiento de Señales e Información, área de investigación: Tratamiento de la información en problemas de clasificación y estimación', ''],
                ['EX-2021-04404582-   -UBA-DIMEDA#SA_FI', 4, 10, 4, 1, 429, 1, '2024-05-08 09:00:00', '2024-06-04 18:00:00', '09:00', '18:00', '2024-05-07', 1, 'Electrónica Analógica', ''],
                ['EX-2023-05284665-   -UBA-DIMEDA#SA_FI', 4, 10, 4, 1, 429, 1, '2024-05-08 09:00:00', '2024-06-04 18:00:00', '09:00', '18:00', '2024-05-07', 1, 'Automatización y Control', ''],
                ['EX-2024-01180686-   -UBA-DMEA#FMED', 2, 11, 2, 1, 438, 1, '2024-05-08 09:00:00', '2024-06-04 18:00:00', '09:00', '18:00', '2024-05-07', 1, '', ''],
                ['EX-2024-01180958-   -UBA-DMEA#FMED', 2, 11, 4, 2, 439, 1, '2024-05-08 09:00:00', '2024-06-04 18:00:00', '09:00', '18:00', '2024-05-07', 1, '', ''],
                ['EX-2024-01181066-   -UBA-DMEA#FMED', 2, 11, 4, 1, 440, 1, '2024-05-08 09:00:00', '2024-06-04 18:00:00', '09:00', '18:00', '2024-05-07', 1, '', ''],
                ['EX-2024-01181135-   -UBA-DMEA#FMED', 2, 11, 4, 2, 439, 1, '2024-05-08 09:00:00', '2024-06-04 18:00:00', '09:00', '18:00', '2024-05-07', 1, '', ''],
            ]
        );


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            7,
            3
            from concurso c
            where c.numero_expediente = 'EX-2022-06200751- -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1098,
            3
            from concurso c
            where c.numero_expediente = 'EX-2022-07090174- -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1488,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05526002- -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            368,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05526914- -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1360,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2188,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2847,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2848,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2185,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2321,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2849,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2671,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404582- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            44,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404582- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2889,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404582- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2890,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404582- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2856,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284665-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2857,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284665-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2885,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284665-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2858,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284665-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2127,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284665-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2886,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284665-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2198,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284665-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2859,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284665-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2891,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284665-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2888,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284665-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2103,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284665-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            994,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-01180686-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2892,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-01180958-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            915,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-01181066-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2893,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-01181135-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ladislao Ludovico', 'HUBER', '00000058',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcelo Alejandro', 'CORTI', '00000059',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Fernando Andrés','ETZENSBERGER' , '00000060',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Vanina Lorena', 'GIGANTE' , '00000061',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcela Lorena', 'SEGGIARO' , '00000062',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Santiago', 'LEGARRE', '00000063',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Florencia Carla', 'SANTÁGATA' , '00000064',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sebastián Ernesto', 'TEDESCHI' , '00000065',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Virginia Valeria', 'DEMCZUK' , '00000066',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Liliana', 'RODRÍGUEZ FERNÁNDEZ' , '00000067',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Eliana María', 'SANTANATOGLIA' , '00000068',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Daniel', 'VIDELA MONTILLA' , '00000069',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('HEFFES', 'HEFFES' , '00000070',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Carlos Elián', 'PREGNO' , '00000071',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Cecilia Mariana', 'SGRAZUTTI' , '00000072',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Martín', 'PAOLANTONIO' , '00000073',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Cecilia Gabriela', 'GALARZA' , '00000074',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('José Alberto', 'BERTUCCIO' , '00000075',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Roberto', 'SACO' , '00000076',0)";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000058',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-06200751- -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000059',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-07090174- -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000060',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-07090174- -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000061',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-07090174- -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000062',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-07090174- -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000063',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000064',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000065',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000066',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000067',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000068',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000069',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000070',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000071',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000072',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000073',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526914- -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000074',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000075',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2021-04404582- -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000076',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05284665-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-04652968-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05003399-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05018619-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05164911-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-02397009-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05004502-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05004557-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05018503-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05003285-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05003795-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05004215-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05138214-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05138264-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05164318-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05233079-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05254860-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o las materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05233121-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "área de investigación: Diseño de Sistemas Químicos con Transporte de Masa Selectiva"], ["numero_expediente" => "EX-2023-01613440-   -UBA-DIMEDA#SA_FI"]);

        $this->update("concurso", ["comentario" => "área de investigación: Procesamiento de la Información"], ["numero_expediente" => "EX-2021-02823449-   -UBA-DIMEDA#SA_FI"]);

        $this->update("concurso", ["comentario" => "área de investigación: Teoría de Control aplicada a Robótica"], ["numero_expediente" => "EX-2021-02823430-   -UBA-DIMEDA#SA_FI"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-05004595-   -UBA-DMESA#FCEN"]);

        $this->update("concurso", ["comentario" => "y/o aquellas materias que oportunamente se incorporen al plan de estudios o materias que la autoridad departamental dispusiese"], ["numero_expediente" => "EX-2023-06101036-   -UBA-DMESA#FCEN"]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240506_041040_create_nuevos_concursos_20240508 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240506_041040_create_nuevos_concursos_20240508 cannot be reverted.\n";

        return false;
    }
    */
}
