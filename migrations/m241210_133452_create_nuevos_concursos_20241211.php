<?php

use yii\db\Migration;

/**
 * Class m241210_133452_create_nuevos_concursos_20241211
 */
class m241210_133452_create_nuevos_concursos_20241211 extends Migration
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
                [3033, 3, 'Actuación Profesional del Licenciado en Sistemas de Información', 's', NULL, NULL],  
                [3034, 9, 'Psicolingüística II (Procesos de Comprensión y Producción)', 's', NULL, NULL],  
                
            ]
        );

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [478, 3, 'Departamento de Sistemas', 1],
            ]
        );



        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-02791512-   -UBA-DME#FCE',        2, 3, 4, 1, 112, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, 'Grupo de Asignaturas del Área Contabilidad', '' ], 
                ['EX-2024-03280301-   -UBA-DME#FCE',        2, 3, 2, 1, 109, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ], 
                ['EX-2024-03702650-   -UBA-DME#FCE',        1, 3, 2, 1, 441, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ], 
                ['EX-2024-04302482-   -UBA-DME#FCE',        1, 3, 4, 1, 436, 8, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ], 
                ['EX-2024-04316834-   -UBA-DME#FCE',        1, 3, 2, 1, 112, 2, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ], 
                ['EX-2024-04342004-   -UBA-DME#FCE',        4, 3, 4, 1, 112, 4, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ], 
                ['EX-2024-04362922-   -UBA-DME#FCE',        1, 3, 4, 1, 113, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, 'Grupo de Asignatura del Área Actuarial', '' ],   
                ['EX-2024-04362972-   -UBA-DME#FCE',        1, 3, 4, 1, 112, 3, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ], 
                ['EX-2024-04363012-   -UBA-DME#FCE',        1, 3, 4, 1, 112, 3, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ], 
                ['EX-2024-04363103-   -UBA-DME#FCE',        1, 3, 4, 1, 113, 3, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, 'Grupo de Asignaturas del Área Matemática', '' ], 
                ['EX-2024-04561092-   -UBA-DME#FCE',        1, 3, 4, 1, 436, 3, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ], 
                ['EX-2024-04363198-   -UBA-DME#FCE',        1, 3, 4, 1, 106, 2, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ], 
                ['EX-2024-05057793-   -UBA-DME#FCE',        4, 3, 4, 1, 478, 2, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ],
                ['EX-2024-05100804-   -UBA-DME#FCE',        1, 3, 4, 1, 436, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ],
                ['EX-2024-05208675-   -UBA-DME#FCE',        4, 3, 4, 1, 112, 3, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ],
                ['EX-2024-05215209-   -UBA-DME#FCE',        2, 3, 2, 1, 106, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ],
                ['EX-2024-05266528-   -UBA-DME#FCE',        4, 3, 4, 1, 112, 4, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ],
                ['EX-2024-05267342-   -UBA-DME#FCE',        4, 3, 4, 1, 112, 2, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ],
                ['EX-2024-01621543-   -UBA-DME#SAHDU_FSOC', 1, 5, 4, 1,  37, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ],
                ['EX-2023-03013670-   -UBA-DME#SAHDU_FSOC', 1, 5, 4, 1,  39, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ],
                ['EX-2023-03013707-   -UBA-DME#SAHDU_FSOC', 1, 5, 4, 1,  39, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ],
                ['EX-2023-05443883-   -UBA-DME#SAHDU_FSOC', 1, 5, 2, 1,  37, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ], 
                ['EX-2024-03182478-   -UBA-DME#FFYL',       1, 9, 4, 1,  15, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ],
                ['EX-2023-04958439-  -UBA-DME#FFYL',        2, 9, 4, 1, 432, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ],
                ['EX-2023-07096496-   -UBA-DME#FFYL',       2, 9, 4, 1, 432, 1, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ]
            ]

        );

        
        # EX-2024-02791512-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1469,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-02791512-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-02791512-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1368,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-02791512-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-02791512-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3551,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-02791512-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-03280301-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1393,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03280301-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-03702650-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            271,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03702650-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04302482-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            17,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04302482-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04316834-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            112,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04316834-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04342004-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2551,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04342004-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04362922-   -UBA-DME#FCE  
        $sql = "
            insert INTO concurso_asignatura 
            select
            c.id_concurso,
            1466,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04362922-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04362922-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1481,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04362922-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04362972-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1370,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04362972-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        

        # EX-2024-04363012-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            610,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04363012-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04363103-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            58,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04363103-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04363103-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            890,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04363103-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04561092-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2528,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04561092-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-04363068-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            975,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04363068-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05057793-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3033,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05057793-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05100804-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            7,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05100804-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05208675-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2554,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05208675-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05215209-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            976,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05215209-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05266528-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1469,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05266528-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-05267342-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1368,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05267342-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-01621543-   -UBA-DME#SAHDU_FSOC
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1258,
            5
            from concurso c
            where c.numero_expediente = 'EX-2024-01621543-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2023-03013670-   -UBA-DME#SAHDU_FSOC
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1253,
            5
            from concurso c
            where c.numero_expediente = 'EX-2023-03013670-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2023-03013707-   -UBA-DME#SAHDU_FSOC
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            676,
            5
            from concurso c
            where c.numero_expediente = 'EX-2023-03013707-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2023-05443883-   -UBA-DME#SAHDU_FSOC
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1413,
            5
            from concurso c
            where c.numero_expediente = 'EX-2023-05443883-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-03182478-   -UBA-DME#FFYL
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            3034,
            9
            from concurso c
            where c.numero_expediente = 'EX-2024-03182478-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2023-04958439-  -UBA-DME#FFYL
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            632,
            9
            from concurso c
            where c.numero_expediente = 'EX-2023-04958439-  -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2023-07096496-   -UBA-DME#FFYL
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            640,
            9
            from concurso c
            where c.numero_expediente = 'EX-2023-07096496-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        #EX-2024-03702650-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Paula Constanza', 'SARDEGNA', '00000348',0)";
        Yii::$app->db->createCommand($sql)->execute();    
        #EX-2024-04302482-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Carlos Esteban', 'AIRE', '00000349',0)";
        Yii::$app->db->createCommand($sql)->execute();    
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Claudio Alberto', 'ARIGANELLO', '00000350',0)";
        Yii::$app->db->createCommand($sql)->execute();    
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandro Daniel', 'BORGESE', '00000351',0)";
        Yii::$app->db->createCommand($sql)->execute();    
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandro Moisés', 'CALABRO', '00000352',0)";
        Yii::$app->db->createCommand($sql)->execute();    
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrés Ernesto', 'DI PELINO', '00000353',0)";
        Yii::$app->db->createCommand($sql)->execute();    
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('José Luis', 'FARRONI', '00000354',0)";
        Yii::$app->db->createCommand($sql)->execute();    
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Miguel Secundino', 'PEREZ RODRIGUEZ', '00000355',0)";
        Yii::$app->db->createCommand($sql)->execute();    
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Hernán Carlos', 'PIOTTI LOPEZ', '00000356',0)";
        Yii::$app->db->createCommand($sql)->execute();    
        #EX-2024-04316834-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Miguel Marcelo', 'CANETTI', '00000357',0)";
        Yii::$app->db->createCommand($sql)->execute();    
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Norberto Marcelo', 'NACUZZI', '00000358',0)";
        Yii::$app->db->createCommand($sql)->execute();    
        #EX-2024-04342004-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Lorena Sol', 'BALDERRABANO', '00000359',0)";
        Yii::$app->db->createCommand($sql)->execute();    
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Noralí Araceli', 'GRECO', '00000360',0)";
        Yii::$app->db->createCommand($sql)->execute();   
        #EX-2024-04362922-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gustavo Gabriel', 'GRINBLAT', '00000361',0)";
        Yii::$app->db->createCommand($sql)->execute();   
        #EX-2024-04362972-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gabriela Angela', 'GÓMEZ', '00000362',0)";
        Yii::$app->db->createCommand($sql)->execute();   
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gonzalo Hernán', 'HASDA', '00000363',0)";
        Yii::$app->db->createCommand($sql)->execute();   
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcelo Gustavo', 'PODMOGUILNYE', '00000364',0)";
        Yii::$app->db->createCommand($sql)->execute();   
        #EX-2024-04363012-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sabrina Concepción', 'ALIOTTA', '0000365',0)";
        Yii::$app->db->createCommand($sql)->execute();   
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandro Justo', 'GONZALEZ ESCUDERO', '00000366',0)";
        Yii::$app->db->createCommand($sql)->execute();   
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Bruno', 'JAUNARENA', '00000367',0)";
        Yii::$app->db->createCommand($sql)->execute();   
        #EX-2024-04363103-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrea Leonor', 'GACHE', '00000368',0)";
        Yii::$app->db->createCommand($sql)->execute();   
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Pablo Matías', 'HERRERA', '00000369',0)";
        Yii::$app->db->createCommand($sql)->execute();   
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Martín Ezequiel', 'MASCI', '00000370',0)";
        Yii::$app->db->createCommand($sql)->execute();   
        #EX-2024-04561092-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandro Bernardo', 'BURGOS', '00000371',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María del Carmen', 'MO', '00000372',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Pamela Carina', 'WILLERS', '00000373',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        #EX-2024-04363068-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ignacio Nicolás', 'CARCIOFI', '00000374',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Esteban Manuel', 'GRECO', '00000375',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        #EX-2024-05057793-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Bárbara', 'MICHALLA', '00000376',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Iván Ezequiel', 'DUARTE', '00000377',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        #EX-2024-05100804-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Claudia Nancy', 'MEDINA', '00000378',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        #EX-2024-05208675-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mariela Giselle', 'COLETTA', '00000379',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Matías Adrián ', 'RUIZ', '00000380',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Abelardo Gregorio', 'HARBIN', '00000381',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        #EX-2024-05266528-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrea Rosana', 'QUINTANA', '00000382',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Eugenia', 'FERNANDEZ NUÑEZ', '00000383',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Damián Aníbal', 'PISANI', '00000384',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Diego Sebastián', 'ESCOBAR', '00000385',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        #EX-2024-05267342-   -UBA-DME#FCE
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Christian David', 'CHINEN', '00000386',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Carla Joana', 'KANEVITTER', '00000387',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        #EX-2024-01621543-   -UBA-DME#SAHDU_FSOC
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sergio Luis', 'COM', '00000388',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        #EX-2023-03013670-   -UBA-DME#SAHDU_FSOC
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Esther', 'EPELE', '00000389',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        #EX-2023-03013707-   -UBA-DME#SAHDU_FSOC
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ezequiel', 'IPAR', '00000390',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        #EX-2023-05443883-   -UBA-DME#SAHDU_FSOC
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Martin', 'BECERRA', '00000391',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        #EX-2024-03182478-   -UBA-DME#FFYL
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Valeria', 'ABUSAMRA', '00000392',0)";
        Yii::$app->db->createCommand($sql)->execute(); 



        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000348',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03702650-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 



        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000349',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04302482-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000350',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04302482-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000351',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04302482-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000352',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04302482-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000353',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04302482-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000354',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04302482-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000355',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04302482-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000356',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04302482-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 
        
// ***********************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000357',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04316834-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000358',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04316834-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000359',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04342004-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000360',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04342004-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000361',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04362922-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 


        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000362',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04362972-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000363',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04362972-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000364',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04362972-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000365',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04363012-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000366',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04363012-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000367',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04363012-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000368',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04363103-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000369',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04363103-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000370',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04363103-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 
        
        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000371',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04561092-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000372',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04561092-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000373',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04561092-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000374',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04363068-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000375',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04363068-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 


        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000376',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05057793-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000377',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05057793-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000378',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05100804-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 
        
        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000379',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05208675-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000380',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05208675-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000381',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05208675-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000382',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05266528-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000383',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05266528-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000384',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05266528-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000385',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05266528-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000386',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05267342-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000387',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05267342-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000388',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01621543-   -UBA-DME#SAHDU_FSOC'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000389',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-03013670-   -UBA-DME#SAHDU_FSOC'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000390',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-03013707-   -UBA-DME#SAHDU_FSOC'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000391',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05443883-   -UBA-DME#SAHDU_FSOC'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 


        // *****************************

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000392',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03182478-   -UBA-DME#FFYL'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 






    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        echo "m241210_133452_create_nuevos_concursos_20241211 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241210_133452_create_nuevos_concursos_20241211 cannot be reverted.\n";

        return false;
    }
    */
}
