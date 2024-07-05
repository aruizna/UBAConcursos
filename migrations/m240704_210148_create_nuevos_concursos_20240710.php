<?php

use yii\db\Migration;

/**
 * Class m240704_210148_create_nuevos_concursos_20240710
 */
class m240704_210148_create_nuevos_concursos_20240710 extends Migration
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
                [2943, 1, 'Producción de Granos ;  Malezas', 's', NULL, NULL],
            ]
        );

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [460, 1, 'Departamento de Producción Vegetal', 1],
                [461, 10, 'Departamento de Ingeniería Química', 1],
                [462, 11, 'Departamento de Tocoginecología', 1],
                [463, 13, 'Carrera de Licenciatura en Nutrición', 1],
            ]
        );

        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-00012292-   -UBA-DMESA#SSA_FAGRO' , 1,  1, 4, 3, 460, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Cerealicultura', ''],
                ['EX-2024-00012297- -UBA-DMESA#SSA_FAGRO'   , 1,  1, 4, 3, 460, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Cultivos Industriales', ''],
                ['EX-2024-00012299- -UBA-DMESA#SSA_FAGRO'   , 1,  1, 4, 3, 460, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Cerealicultura', ''],
                ['EX-2024-00012304- -UBA-DMESA#SSA_FAGRO'   , 1,  1, 4, 3, 460, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Cátedra de Fruticultura', ''],
                ['EX-2024-01907137- -UBA-DMESA#FCEN'        , 1,  4, 2, 3, 418, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Área Materia Condensada o Partículas y Campos o Mecánica Estadística', 'otras materias que dicte el Departamento de Física'],
                ['EX-2024-02704305- -UBA-DMESA#FCEN'        , 1,  4, 4, 1, 113, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Área Métodos Numéricos y Aplicaciones', 'todas las materias que dicte el Departamento de Matemática'],
                ['EX-2022-07146640-   -UBA-DIMEDA#SA_FI'    , 1, 10, 4, 1, 461, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, 'Área de docencia: Aplicaciones de la Ingeniería Química, subárea: Aplicaciones de la Ingeniería Química IV', ''],
                ['EX-2024-02806814-   -UBA-DMEA#FMED'       , 1, 11, 4, 1, 438, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, '', ''],
                ['EX-2024-02806842-   -UBA-DMEA#FMED'       , 1, 11, 4, 1, 438, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, '', ''],
                ['EX-2024-02806872-   -UBA-DMEA#FMED'       , 1, 11, 4, 1, 462, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, '', ''],
                ['EX-2024-02806901-   -UBA-DMEA#FMED'       , 1, 11, 4, 1, 462, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, '', ''],
                ['EX-2024-02807197-   -UBA-DMEA#FMED'       , 1, 11, 2, 1, 463, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, '', ''],
                ['EX-2024-02807226-   -UBA-DMEA#FMED'       , 1, 11, 3, 1, 463, 1, '2024-07-05 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-08-07', 1, '', ''],
            ]
        );


# EX-2024-00012292-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1190,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00012292-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00012297- -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2943,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00012297- -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00012299- -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1190,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00012299- -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00012304- -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1591,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00012304- -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();


# EX-2024-01907137- -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2695,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01907137- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2690,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01907137- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2691,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01907137- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2692,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01907137- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2693,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01907137- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2696,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01907137- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2697,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01907137- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2706,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01907137- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            898,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01907137- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


# EX-2024-02704305- -UBA-DMESA#FCEN


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            27,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            28,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            30,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            31,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            43,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            49,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            51,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            52,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            61,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            63,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            163,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            340,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            341,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            365,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            434,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            597,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            599,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            600,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            790,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            868,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            918,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1755,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1164,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1464,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1539,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1548,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2022-07146640-   -UBA-DIMEDA#SA_FI

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2303,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-07146640-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-02806814-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            192,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-02806814-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-02806842-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            192,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-02806842-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-02807226-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            192,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-02807226-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-02807197-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            192,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-02807197-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-02806901-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            415,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-02806901-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();        

# EX-2024-02806872-   -UBA-DMEA#FMED       

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1107,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-02806872-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();        




        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Leonor Gabriela', 'ABELEDO', '00000140',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Diego', 'BATLLA', '00000141',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Diego Omar','FERRARO' , '00000142',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Miriam Mercedes', 'IZAGUIRRE' , '00000143',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gustavo Sergio', 'LOZANO' , '00000144',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sandra Rita', 'MARTÍNEZ', '00000145',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Beatriz Ethel','FERNÁNDEZ' , '00000146',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Pablo', 'CORDOBA' , '00000147',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Diego Luís', 'SINAGRA' , '00000148',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandro Héctor José', 'SODERINI', '00000149',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Adriana','BERMUDEZ' , '00000150',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Elena', 'BOSCHI' , '00000151',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sonia Ana ', 'NAUMANN' , '00000152',0)";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000140',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00012292-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000141',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00012297- -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000142',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EEX-2024-00012299- -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000143',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00012304- -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000144',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01907137- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000145',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02704305- -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000146',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-07146640-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000147',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02806814-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000148',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02806842-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000149',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02806872-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000150',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02806901-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000150',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02807197-   -UBA-DMEA#FMEDD'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000150',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02807226-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

/*
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-01713496-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-01714245-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-01714760-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-01715181-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-01786079-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-02343297-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-02357757-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-02357806-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-01715181-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-01786079-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-02343297-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-02357757-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-10 09:00:00","fecha_publicacion"=>"2024-08-06"], ["numero_expediente" => "EX-2024-02357806-   -UBA-DMESA#FCEN"]);
*/

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240704_210148_create_nuevos_concursos_20240710 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240704_210148_create_nuevos_concursos_20240710 cannot be reverted.\n";

        return false;
    }
    */
}
