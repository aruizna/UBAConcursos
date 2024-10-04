<?php

use yii\db\Migration;

/**
 * Class m241002_214925_create_nuevos_concursos_20241009
 */
class m241002_214925_create_nuevos_concursos_20241009 extends Migration
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
                [2985, 4, 'Geología Y Ecología Ambiental de Áreas Costeras', 's', NULL, NULL],
                [2986, 4, 'Introducción al Modelado Continuo y Algebra Lineal Computacional', 's', NULL, NULL],
                [2987, 8, 'Laboratorio de fuentes abiertas e Instrumentación de Medicina Nuclear (TUMN)', 's', NULL, NULL],
                [2988, 10, 'Taller de Electrónica (Ingeniería Mecánica/Electricista)', 's', NULL, NULL],
                [2989, 10, 'Introducción a la Ingeniería Acústica', 's', NULL, NULL],
                [2990, 10, 'Acústica de Recintos', 's', NULL, NULL],
                [2991, 10, 'Electroacústica y Audio Profesional', 's', NULL, NULL],
                
            ]
        );

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
//                [469, 4, 'Instituto de Cálculo', 1],
            ]
        );

        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-04034491-   -UBA-DMESA#SSA_FAGRO', 1,   1,  3, 3, 111, 1, '2024-10-02 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Cátedra de Ecología', ''],
                ['EX-2024-03127489-   -UBA-DME#FCE'        , 4,   3,  3, 1, 436, 1, '2024-10-02 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', ''],
                ['EX-2024-03127600-   -UBA-DME#FCE'        , 4,   3,  4, 1, 436, 1, '2024-10-02 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', ''],
                ['EX-2024-03128261-   -UBA-DME#FCE'        , 2,   3,  3, 1, 436, 1, '2024-10-02 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', ''],
                ['EX-2024-03912996-   -UBA-DMESA#FCEN'     , 2,   4,  4, 1, 413, 1, '2024-10-02 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Área Geodinámica Exógena, subárea Geología Aplicada', ''],
                ['EX-2024-03913058-   -UBA-DMESA#FCEN'     , 2,   4,  4, 1, 413, 1, '2024-10-02 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Área Paleontología', ''],
                ['EX-2024-04514450-   -UBA-DMESA#FCEN'     , 2,   4,  4, 1, 466, 1, '2024-10-02 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Área docente: materias del Ciclo Superior de la Licenciatura en Ciencias de Datos, relacionadas con muestreo, teoría de wavelets y señales, modelado continuo, economía matemática y matemática financiera', ''],
                ['EX-2024-04035374-   -UBA-DME#SSA_FFYB'   , 4,   8,  4, 3,  12, 1, '2024-10-02 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Cátedra Física - área Medicina Nuclear', ''],
                ['EX-2024-02983808-   -UBA-DIMEDA#SA_FI'   , 4,  10,  2, 1, 429, 1, '2024-10-02 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Área de docencia Electrónica Analógica y Acústica', ''],
            ]
        );


        # EX-2024-04034491-   -UBA-DMESA#SSA_FAGRO

            $sql = "
                insert INTO concurso_asignatura 
                select  
                c.id_concurso,
                320,
                1
                from concurso c
                where c.numero_expediente = 'EX-2024-04034491-   -UBA-DMESA#SSA_FAGRO'
            ";
            Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-03127489-   -UBA-DME#FCE

            $sql = "
                insert INTO concurso_asignatura 
                select  
                c.id_concurso,
                220,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-03127489-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-03127600-   -UBA-DME#FCE

            $sql = "
                insert INTO concurso_asignatura 
                select  
                c.id_concurso,
                7,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-03127600-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-03128261-   -UBA-DME#FCE

            $sql = "
                insert INTO concurso_asignatura 
                select  
                c.id_concurso,
                6,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-03128261-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

# EX-2024-03912996-   -UBA-DMESA#FCEN - 4

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            601,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2332,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2647,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2331,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2330,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2333,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2676,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2985,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2649,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();        

# EX-2024-03913058-   -UBA-DMESA#FCEN - 4

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            124,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            571,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1071,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1072,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1073,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1074,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2720,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2703,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2072,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2807,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            427,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912996-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

# EX-2024-04514450-   -UBA-DMESA#FCEN - 4

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2883,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04514450-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2812,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04514450-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2986,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04514450-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();          


# EX-2024-04035374-   -UBA-DME#SSA_FFYB

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2987,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-04035374-   -UBA-DME#SSA_FFYB'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

# EX-2024-02983808-   -UBA-DIMEDA#SA_FI

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2671,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02983808-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            44,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02983808-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();         

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2889,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02983808-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2890,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02983808-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();        

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2988,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02983808-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2989,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02983808-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();         

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2990,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02983808-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2991,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-02983808-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();       


        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Roberto Javier', 'FERNÁNDEZ ALDÚNCIN', '00000224',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Claudia Isabel', 'ALTIERI', '00000225',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Romina Soledad', 'BALAYN', '00000226',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Patricia Raquel', 'DIAZ', '00000227',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mariano Alberto', 'BONELLI', '00000228',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sofía', 'VARIGLIA Y PONS', '00000229',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Arturo Gonzalo', 'POZZALI', '00000230',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mariel', 'NUÑEZ', '00000231',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gabriel Francisco Carlos', 'VENTURINO', '00000232',0)";
        Yii::$app->db->createCommand($sql)->execute();


        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000224',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04034491-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute();       


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000225',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127489-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();   

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000226',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127600-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();   

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000227',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127600-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000228',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127600-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000229',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127600-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000230',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127600-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000231',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04035374-   -UBA-DME#SSA_FFYB'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000232',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02983808-   -UBA-DIMEDA#SA_FI'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241002_214925_create_nuevos_concursos_20241009 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241002_214925_create_nuevos_concursos_20241009 cannot be reverted.\n";

        return false;
    }
    */
}
