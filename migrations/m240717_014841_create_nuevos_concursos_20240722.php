<?php

use yii\db\Migration;

/**
 * Class m240717_014841_create_nuevos_concursos_20240722
 */
class m240717_014841_create_nuevos_concursos_20240722 extends Migration
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
                [2944, 1, 'Climatología y Agroclimatología', 's', NULL, NULL],
                [2945, 1, 'Mejoramiento Genético', 's', NULL, NULL],
                [2946, 1, 'Sistemas de Producción de Cultivos Extensivos', 's', NULL, NULL],
                [2947, 1, 'Metodología Cualitativa para los Estudios Socioculturales sobre Problemáticas Ambientales', 's', NULL, NULL],

                
                
            ]
        );

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [464, 1, 'Departamento Matemática, Área Algebra Homológica', 1],
            ]
        );

        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-00003941-   -UBA-DMESA#SSA_FAGRO' , 4,  1, 4, 3, 460, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra Cultivos Industriales', ''],
                ['EX-2024-00006566-   -UBA-DMESA#SSA_FAGRO' , 4,  1, 4, 3, 111, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Climatología y Fenología Agrícolas', ''],
                ['EX-2024-00006727-   -UBA-DMESA#SSA_FAGRO' , 4,  1, 4, 3, 460, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Cerealicultura', ''],
                ['EX-2024-00006769-   -UBA-DMESA#SSA_FAGRO' , 4,  1, 4, 3, 165, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Fertilidad y Fertilizantes', ''],
                ['EX-2024-00008068-   -UBA-DMESA#SSA_FAGRO' , 4,  1, 4, 3, 433, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Nutrición Animal', ''],
                ['EX-2024-00008161-   -UBA-DMESA#SSA_FAGRO' , 4,  1, 4, 2, 162, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, '', ''],
                ['EX-2024-00009976-   -UBA-DMESA#SSA_FAGRO' , 4,  1, 4, 2, 433, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Departamento Producción Animal', ''],
                ['EX-2024-00010119-   -UBA-DMESA#SSA_FAGRO' , 4,  1, 4, 3, 460, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Cerealicultura', ''],
                ['EX-2024-01696150-   -UBA-DMESA#SSA_FAGRO' , 1,  1, 3, 3, 460, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Cerealicultura', ''],
                ['EX-2024-01771586-   -UBA-DMESA#SSA_FAGRO' , 1,  1, 3, 3, 460, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Cultivos Industriales', ''],
                ['EX-2023-07307647-   -UBA-DMESA#SSA_FAGRO' , 4,  1, 3, 1, 428, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Extensión y Sociología Rurales', ''],
                ['EX-2023-07307689-   -UBA-DMESA#SSA_FAGRO' , 4,  1, 3, 1, 428, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Extensión y Sociología Rurales', ''],
                ['EX-2023-07307742-   -UBA-DMESA#SSA_FAGRO' , 4,  1, 3, 1, 428, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Extensión y Sociología Rurales', ''],
                ['EX-2024-02704275-   -UBA-DMESA#FCEN'      , 1,  4, 2, 3, 464, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Área Algebra Homológica', 'todas las materias que dicte el Departamento de Matemática'],
                ['EX-2024-02445697-   -UBA-DMRD#SHA_FPSI'   , 2, 13, 4, 1,   1, 1, '2024-07-17 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, '', ''],
            ]
        );



       // 'EX-2024-00003941-   -UBA-DMESA#SSA_FAGRO'

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1190,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00003941-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

     // EX-2024-00006566-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2590,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00006566-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1605,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00006566-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            202,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00006566-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2944,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00006566-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    
     // EX-2024-00006727-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1190,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00006727-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

     // EX-2024-00006769-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2620,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00006769-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

     // EX-2024-00008068-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1015,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00008068-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

     // EX-2024-00008161-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1588,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00008161-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            325,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00008161-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1650,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00008161-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

     // EX-2024-00009976-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2945,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00009976-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            926,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00009976-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

     // EX-2024-00010119-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            1190,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00010119-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
     // EX-2024-01696150-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            1190,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-01696150-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

      // EX-2024-01771586-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            1190,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-01771586-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            2946,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-01771586-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            2593,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-01771586-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

     // EX-2023-07307647-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            1400 ,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07307647-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            585,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07307647-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

      // EX-2023-07307689-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            1602,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07307689-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

     // EX-2023-07307742-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            2627,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07307742-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            2947,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07307742-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();


     // EX-2024-02704275-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            27,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            28,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            30,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            31,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();       

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            43,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            49,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            51,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            52,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            61,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            63,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            163,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            341,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            341,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            365,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            434,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            597,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            599,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            600,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            790,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            868,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            918,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            1755,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            1164,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            1464,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            1539,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            1548,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

     // EX-2024-02445697-   -UBA-DMRD#SHA_FPSI

        $sql = "
            insert INTO concurso_asignatura     
            select  
            c.id_concurso,
            2301,
            13
            from concurso c
            where c.numero_expediente = 'EX-2024-02445697-   -UBA-DMRD#SHA_FPSI'
        ";
        Yii::$app->db->createCommand($sql)->execute();



        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Ignacio', 'CAGNOLA', '00000153',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Danilo Alejandro', 'CARNELOSc', '00000154',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Karina Elizabeth', 'D’ANDREA' , '00000155',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Josefina Luisa', 'DE PAEPE' , '00000156',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Gabriela', 'FERNÁNDEZ PEPI' , '00000157',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Luis Enrique', 'FRANK', '00000158',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrés', 'ROGBERG MUÑOZ', '00000159',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Román Augusto', 'SERRAGO' , '00000160',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gustavo Ángel', 'MADDONNI' , '00000161',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Edmundo Leonardo', 'PLOSCHUK' , '00000162',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Beatriz Brígida', 'NUSSBAUMER', '00000163',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Hortensia', 'CASTRO', '00000164',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Cynthia Alejandra','PIZARRO' , '00000165',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrea Leonor', 'SOLOTAR' , '00000166',0)";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000153',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00003941-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000154',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00006566-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000155',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00006727-   -UBA-DMESA#SSA_FAGRO'
        ";

        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000156',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00006769-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000157',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00008068-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000158',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00008161-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000159',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00009976-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000160',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00010119-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000161',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01696150-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000162',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01771586-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000163',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07307647-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000164',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07307689-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000165',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07307742-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000166',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02704275-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240717_014841_create_nuevos_concursos_20240722 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240717_014841_create_nuevos_concursos_20240722 cannot be reverted.\n";

        return false;
    }
    */
}
