<?php

use yii\db\Migration;

/**
 * Class m240607_020857_create_nuevos_concursos_20240610
 */
class m240607_020857_create_nuevos_concursos_20240610 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        /*
1	Renovación de Cargo
2	Nuevo Cargo
3	Cesación de Cargo por Art. 51
4	Provisión Designación Interina
*/

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [451, 7, 'Departamento de Derecho Público I', 1],
                [452, 12, 'cátedra Fisiología', 1],
                [453, 12, 'cátedra Bioquímica General y Bucal', 1],
                [454, 12, 'cátedra Ortodoncia', 1],
                [455, 12, 'cátedra Medicina Interna', 1],
            ]
        );

        $this->batchInsert(
            "asignatura",
            ["id_asignatura", "id_facultad", "descripcion_asignatura", "habilitada", "numero_resolucion", "observaciones"],
            [
                [2903, 4, 'Fundamentos de la Preservación de Alimentos I', 's', NULL, NULL],
                [2904, 4, 'Fundamentos de la Preservación de Alimentos II', 's', NULL, NULL],
                [2905, 12, 'Odontología Preventiva Y Mínimamente invasiva I (N 206)', 's', NULL, NULL],
            ]
        );


        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2023-07662383-   -UBA-DME#FCE',      1, 3, 2, 1, 106, 1, '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2023-07662437-   -UBA-DME#FCE',      1, 3, 4, 1, 106, 1, '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2023-07662478-   -UBA-DME#FCE',      1, 3, 4, 1, 106, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2023-07662523-   -UBA-DME#FCE',      1, 3, 4, 1, 106, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2023-07662590-   -UBA-DME#FCE',      1, 3, 4, 1, 106, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2023-03437461-   -UBA-DMESA#FCEN',   1, 4, 4, 3, 450, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2023-05526426-   -UBA-DC#SA_FDER',   1, 7, 4, 1, 451, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2023-05527253-   -UBA-DC#SA_FDER',   1, 7, 2, 1, 118, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2024-02079984-   -UBA-DME#SSA_FFYB', 1, 8, 4, 3, 17, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2024-02080046-   -UBA-DME#SSA_FFYB', 4, 8, 3, 3, 17, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2024-2080125-   -UBA-DME#SSA_FFYB',  4, 8, 2, 3, 17, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2024-02482997-   -UBA-DME#SSA_FFYB', 4, 8, 4, 1, 12, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2024-01386943-   -UBA-DMEDA#FODON', 1, 12, 2, 3, 452, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2024-01387347-   -UBA-DMEDA#FODON', 3, 12, 3, 3, 453, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2023-06761836-   -UBA-DMEDA#FODON', 3, 12, 4, 1, 454, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],
                ['EX-2024-00938109-   -UBA-DMEDA#FODON', 4, 12, 4, 2, 455, 1,  '2024-06-10 09:00:00', '2024-07-12 18:00:00', '09:00', '18:00', '2024-06-09', 1, '', ''],

            ]
        );


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            975,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07662383-   -UBA-DME#FCE'
        ";

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            253,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07662437-   -UBA-DME#FCE'
        ";

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            336,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07662478-   -UBA-DME#FCE'
        ";

        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            871,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07662523-   -UBA-DME#FCE'
        ";

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2549,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07662590-   -UBA-DME#FCE'
        ";

        // Ciencias Exactas y Naturales

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2563,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";
    
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2564,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2576,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2903,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2904,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";

        // derecho

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            369,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2523,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05527253-   -UBA-DC#SA_FDER'
        ";        

        // Farmacia y Bioquímica
        // 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1271,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-02079984-   -UBA-DME#SSA_FFYB'
        ";    


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1271,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-02080046-   -UBA-DME#SSA_FFYB'
        ";    
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1271,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-2080125-   -UBA-DME#SSA_FFYB'
        ";        

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            510,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-02482997-   -UBA-DME#SSA_FFYB'
        ";        
        
        // Odontología

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2037,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01386943-   -UBA-DMEDA#FODON'
        ";    


    
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2037,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";    
    
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2066,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";    

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2905,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";    


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2019,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";    

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2022
            from concurso c
            where c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";   



        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1061
            from concurso c
            where c.numero_expediente = 'EX-2023-06761836-   -UBA-DMEDA#FODON'
        ";   


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2869
            from concurso c
            where c.numero_expediente = 'EX-2023-06761836-   -UBA-DMEDA#FODON'
        ";   

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2880
            from concurso c
            where c.numero_expediente = 'EX-2023-06761836-   -UBA-DMEDA#FODON'
        ";   

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2881
            from concurso c
            where c.numero_expediente = 'EX-2023-06761836-   -UBA-DMEDA#FODON'
        ";   

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2869
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2012
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2054
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";          

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2876
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";   

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2064
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";   

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2065
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";  


        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Diego', 'PETRECOLLA', '00000094',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Martín', 'GRANDES', '00000095',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Hernán Javier', 'SOLTZ', '00000096',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Alfredor', 'CERRUTI REVERDITO', '00000097',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Guillermo César', 'ANLLÓ QUIROGA', '00000098',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Fernanda', 'GLIEMMO', '00000099',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandra María', 'RODRÍGUEZ GALÁN', '00000100',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandra Marcela', 'LÁZZARO', '00000101',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Erica Elizabeth', 'GORBAK', '00000102',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Margarita', 'DJEDJEIAN', '00000103',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Walter Fabián', 'CARNOTA', '00000104',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Osvaldo Andrés', 'PÉREZ SANMARTINO', '00000105',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Félix Vicente', 'LONIGRO', '00000106',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Guido Idelmar', 'RISSO', '00000107',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandro Patricio', 'MARANIELLO', '00000108',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Héctor Eduardo', 'SABELLI', '00000109',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Ignacio', 'SÁENZ', '00000110',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrea Mercedes', 'PÉREZ', '00000111',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandro Enzo', 'ADAGLIO', '00000112',0)";
        Yii::$app->db->createCommand($sql)->execute(); 
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mariano Raúl', 'GARRETA LECLERCQ', '00000113',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Paolo Nicolás', 'CATALANO', '00000114',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Silvia', 'ALVAREZ', '00000115',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mónica Liliana', 'GALLEANO', '00000116',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Federico', 'MONCZOR', '00000117',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Carlos', 'ELVERDIN', '00000118',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Patricia Noemí', 'RODRIGUEZ', '00000119',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María del Carmen', 'MINUTOLO', '00000120',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Anabel', 'LAMA', '00000121',0)";
        Yii::$app->db->createCommand($sql)->execute(); 




        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000094',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07662383-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000095',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07662437-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000096',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07662478-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000097',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07662523-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000098',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07662590-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000099',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000100',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000101',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000102',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000103',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000104',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000105',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000106',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000107',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000108',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000109',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000110',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000111',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000112',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000113',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05527253-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000114',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02079984-   -UBA-DME#SSA_FFYB'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000115',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02080046-   -UBA-DME#SSA_FFYB'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000116',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-2080125-   -UBA-DME#SSA_FFYB'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000117',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02482997-   -UBA-DME#SSA_FFYB'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000118',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01386943-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000119',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000120',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-06761836-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000121',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();






    }




    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240607_020857_create_nuevos_concursos_20240610 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240607_020857_create_nuevos_concursos_20240610 cannot be reverted.\n";

        return false;
    }
    */
}
