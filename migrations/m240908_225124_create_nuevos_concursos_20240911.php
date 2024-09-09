<?php

use yii\db\Migration;

/**
 * Class m240908_225124_create_nuevos_concursos_20240911
 */
class m240908_225124_create_nuevos_concursos_20240911 extends Migration
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
                [2970, 4, 'Química Orgánica Analítica', 's', NULL, NULL],
                [2971, 4, 'Neurofisiología Integrativa', 's', NULL, NULL],
                [2972, 4, 'Conceptos y Técnicas en Biotecnología', 's', NULL, NULL],
                
                
            ]
        );

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [467, 2, 'Carreras de Diseño Industrial y Diseño Gráfico', 1],
                [468, 4, 'Departamento de Fisiología, Biología Molecular y Celular', 1],
                
            ]
        );

        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-00010020-   -UBA-DMESA#SSA_FAGRO' , 4,   1,  4, 3,  460, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, 'Cátedra de Fitopatología', ''],
                ['EX-2024-02673564-   -UBA-DME#SH_FADU'     , 2,   2,  4, 1,  419, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, '', ''],
                ['EX-2024-02953621-   -UBA-DME#SH_FADU'     , 2,   2,  2, 1,  467, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, '', ''],
                ['EX-2024-02985720-   -UBA-DME#FCE'         , 4,   3,  2, 1,  109, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, '', ''],
                ['EX-2024-02985831-   -UBA-DME#FCE'         , 4,   3,  4, 1,  109, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, '', ''],
                ['EX-2024-03127568-   -UBA-DME#FCE'         , 4,   3,  4, 1,  436, 4, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, '', ''],
                ['EX-2024-03130330-   -UBA-DME#FCE'         , 1,   3,  4, 1,  113, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, 'Grupo de asignaturas del Área Matemática', ''],
                ['EX-2024-03133744-   -UBA-DME#FCE'         , 2,   3,  4, 1,  115, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, '', ''],
                ['EX-2024-02462592-   -UBA-DMESA#FCEN'      , 1,   4,  3, 1,  417, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, 'Área Química y Microbiología de Alimentos', ''],
                ['EX-2024-03302369-   -UBA-DMESA#FCEN'      , 2,   4,  4, 2,  468, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, 'Área Fisiología y Neurociencias, subárea: Aprendizaje y Memoria', ''],
                ['EX-2024-03302439-   -UBA-DMESA#FCEN'      , 2,   4,  4, 1,  468, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, 'Área Fisiología y Neurociencias, subárea: Neurofisiología', ''],
                ['EX-2024-03302538-   -UBA-DMESA#FCEN'      , 2,   4,  4, 1,  468, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, 'Área Biotecnología, subárea: Biotecnología General con énfasis en las tecnologías de aplicación', ''],
                ['EX-2024-01555648-   -UBA-DC#SA_FDER'      , 2,   7,  2, 1,  424, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, 'Área de Sociología Jurídica', ''],
                ['EX-2024-01555974-   -UBA-DC#SA_FDER'      , 3,   7,  2, 1,  426, 2, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, '', ''],
                ['EX-2022-06611044-   -UBA-DME#FFYL'        , 2,   9,  4, 1,   15, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, '', ''],
                ['EX-2022-06611066-   -UBA-DME#FFYL'        , 2,   9,  4, 1,   15, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, '', ''],
                ['EX-2024-03164369-   -UBA-DMEDA#FODON'     , 4,   12, 3, 3, null, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, 'Cátedra Bioquímica General y Bucal', ''],
                ['EX-2024-03164384-   -UBA-DMEDA#FODON'     , 4,   12, 4, 3, null, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, 'Cátedra Bioquímica General y Bucal', ''],
                ['EX-2024-03164393-   -UBA-DMEDA#FODON'     , 4,   12, 4, 2, null, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, 'Cátedra Bioquímica General y Bucal', ''],
                ['EX-2024-03267491-   -UBA-DMEDA#FODON'     , 4,   12, 4, 2, null, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, 'Cátedra Microbiología y Parasitología', ''],
                ['EX-2024-03478304-   -UBA-DMEDA#FODON'     , 4,   12, 2, 2, null, 1, '2024-09-08 09:00:00', '2024-10-09 18:00:00', '09:00', '18:00', '2024-09-08', 1, 'Cátedra Odontología Legal, Forense e Historia de la Odontología', ''],
             
            ]
        );




        // # EX-2024-00010020-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2612,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00010020-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2623,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00010020-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2497,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00010020-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        // # EX-2024-02673564-   -UBA-DME#SH_FADU

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            314,
            2
            from concurso c
            where c.numero_expediente = 'EX-2024-02673564-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        // # EX-2024-02953621-   -UBA-DME#SH_FADU

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2444,
            2
            from concurso c
            where c.numero_expediente = 'EX-2024-02953621-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        // # EX-2024-02985720-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1495,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-02985720-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();


// # EX-2024-02985831-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            866,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-02985831-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();


// # EX-2024-03127568-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            220,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03127568-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();


// # EX-2024-03130330-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            58,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03130330-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            890,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03130330-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

// # EX-2024-03133744-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1511,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03133744-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();


// # EX-2024-02462592-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2970,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2562,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2565,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2561,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2563,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2564,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2576,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2771,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2718,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2570,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2560,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2563,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2564,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2576,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2561,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2565,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


// # EX-2024-03302369-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2776,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03302369-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2666,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03302369-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2971,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03302369-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

// # EX-2024-03302439-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2667,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03302439-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2804,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03302439-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

// # EX-2024-03302538-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2972,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03302538-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


// # EX-2024-01555974-   -UBA-DC#SA_FDER

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            247,
            7
            from concurso c
            where c.numero_expediente = 'EX-2024-01555974-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();




// # EX-2022-06611044-   -UBA-DME#FFYL

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1951,
            9
            from concurso c
            where c.numero_expediente = 'EX-2022-06611044-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();


// # EX-2022-06611066-   -UBA-DME#FFYL

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1942,
            9
            from concurso c
            where c.numero_expediente = 'EX-2022-06611066-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

// # EX-2024-03164369-   -UBA-DMEDA#FODON

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1030,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164369-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2066,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164369-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2021,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164369-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2017,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164369-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2019,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164369-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2022,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164369-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

// # EX-2024-03164384-   -UBA-DMEDA#FODON

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1030,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164384-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2066,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164384-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2021,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164384-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2017,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164384-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2019,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164384-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2022,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164384-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

// # EX-2024-03164393-   -UBA-DMEDA#FODON

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1030,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164393-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2066,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164393-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2021,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164393-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2017,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164393-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2019,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164393-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2022,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03164393-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();


// # EX-2024-03267491-   -UBA-DMEDA#FODON

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2011,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03267491-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2012,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03267491-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2042,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03267491-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2017,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03267491-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2019,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03267491-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();


// # EX-2024-03478304-   -UBA-DMEDA#FODON

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            354,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03478304-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            655,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03478304-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1121,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03478304-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2045,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03478304-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2046,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03478304-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2047,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-03478304-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();



        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Damian', 'VEGA', '00000199',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandro', 'ESTEVEZ', '00000200',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Valeria Sol', 'VALIÑO', '00000201',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Martín Leonardo', 'POGLIANO', '00000202',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandra María Inés', 'AULICINO', '00000203',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('José Antonio', 'STRACQUADAINI', '00000204',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Fernanda Beatriz', 'SANTANGELO', '00000205',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Verónica María', 'GARCÍA FRONTI', '00000206',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Lidia', 'HERRERA', '00000207',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Graciela Isabel', 'LOVECE', '00000208',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Eduardo Antonio', 'BARBIER', '00000209',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Elisa Vanesa', 'MACRI', '00000210',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrea Gloria', 'FERREIRA MONTEIRO', '00000211',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Leonardo Damian', 'CACCIAGIU', '00000212',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Celina Fernanda', 'CORNEJO', '00000213',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Luis Reinaldo', 'RANNELUCCI', '00000214',0)";
        Yii::$app->db->createCommand($sql)->execute();
        
         
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000199',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00010020-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();         


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000200',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02985720-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();     

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000201',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02985831-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

//********** */
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000202',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127568-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  
        
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000203',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127568-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  
        
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000204',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127568-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000205',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127568-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000206',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03130330-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000207',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02462592-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000208',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01555974-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000209',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01555974-   -UBA-DC#SA_FDER'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000210',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03164369-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000211',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03164384-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000212',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03164393-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000213',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03267491-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000214',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03478304-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  






    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240908_225124_create_nuevos_concursos_20240911 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240908_225124_create_nuevos_concursos_20240911 cannot be reverted.\n";

        return false;
    }
    */
}
