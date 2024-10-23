<?php

use yii\db\Migration;

/**
 * Class m241018_191306_create_nuevos_concursos_20241023
 */
class m241018_191306_create_nuevos_concursos_20241023 extends Migration
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
                [2992, 1, 'Planificación y Diseño del Paisaje IV', 's', NULL, NULL],
                [2993, 9, 'Historia y Teoría de la Antropología I', 's', NULL, NULL],
                [2994, 9, 'Orientación Bacteriología', 's', NULL, NULL],
                [2995, 9, 'Orientación Virología', 's', NULL, NULL],
                [2996, 9, 'Orientación Micología', 's', NULL, NULL],
                [2997, 9, 'Orientación Parasitología', 's', NULL, NULL],
                
            ]
        );

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [472, 1, 'Departamento de Recursos Naturales y Ambiente', 1],
                [473, 9, 'Departamento de Ciencias Antropológicas', 1],
                [474, 11, 'Departamento de Microbiología, Parasitología e Inmunología', 1],

            ]
        );

        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-04425629-   -UBA-DMESA#SSA_FAGRO',    4, 1, 4, 2, 433, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Cátedra de Acuicultura', '' ], 
                ['EX-2024-04425823-   -UBA-DMESA#SSA_FAGRO',    1, 1, 4, 3, 460, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Área de Producción Vegetal Orgánica', '' ], 
                ['EX-2024-04428188-   -UBA-DMESA#SSA_FAGRO',    4, 1, 3, 1, 457, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Cátedra de Bioquímica', '' ],
                ['EX-2024-04429355-   -UBA-DMESA#SSA_FAGRO',    1, 1, 3, 3, 457, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Cátedra de Química de Biomoléculas', '' ],
                ['EX-2024-04441775-   -UBA-DMESA#SSA_FAGRO',    4, 1, 2, 3, 472, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Cátedra de Química Inorgánica y Analítica', '' ],
                ['EX-2024-04552901-   -UBA-DMESA#SSA_FAGRO',    1, 1, 4, 3, 433, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Cátedra de Bovinos de Carne', '' ],
                ['EX-2024-04553492-   -UBA-DMESA#SSA_FAGRO',    4, 1, 3, 1, 472, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Cátedra de Edafología', '' ],
                ['EX-2024-04558032-   -UBA-DMESA#SSA_FAGRO',    3, 1, 2, 3, 472, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Cátedra de Ecología', '' ],
                ['EX-2024-04602006-   -UBA-DMESA#SSA_FAGRO',    1, 1, 4, 2, 165, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Cátedra de Planificación de Espacios Verde', '' ],
                ['EX-2024-03493386-   -UBA-DME#FCE',            4, 3, 2, 1, 106, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-03494314-   -UBA-DME#FCE',            4, 3, 2, 1, 106, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-03555064-   -UBA-DME#FCE',            1, 3, 4, 1, 106, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-03555142-   -UBA-DME#FCE',            1, 3, 3, 1, 106, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-03555307-   -UBA-DME#FCE',            1, 3, 3, 1, 106, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-03555349-   -UBA-DME#FCE',            1, 3, 4, 1, 106, 4, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-03655294-   -UBA-DME#FCE',            4, 3, 2, 3, 106, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'área de investigación: Análisis Macroeconómico Intertemporal', '' ],  
                ['EX-2024-03988195-   -UBA-DME#FCE',            2, 3, 3, 1, 115, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-03989886-   -UBA-DME#FCE',            4, 3, 4, 1, 115, 3, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-03990681-   -UBA-DME#FCE',            4, 3, 4, 1, 115, 5, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-04002878-   -UBA-DME#FCE',            1, 3, 4, 1, 115, 2, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2023-05825114-   -UBA-DME#FCE',            1, 3, 4, 1, 106, 5, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Grupo de asignaturas de Estructura Argentina', '' ],
                ['EX-2022-06782095-   -UBA-DME#FCE',            1, 3, 4, 1, 441, 3, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-03912889-   -UBA-DMESA#FCEN',         2, 4, 4, 3, 413, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, 'Área docente Geología General - Área de investigación Geoinformática', '' ],
                ['EX-2024-05091720-   -UBA-DMESA#SG_FVET',      1, 6, 4, 1, null, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-05091773-   -UBA-DMESA#SG_FVET',      1, 6, 2, 3, null, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ], 
                ['EX-2024-04570806-   -UBA-DME#FFYL',           1, 9, 4, 1, 473, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-04708101-   -UBA-DMEA#FMED',          2, 11, 4, 3, 474, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-04708188-   -UBA-DMEA#FMED',          2, 11, 2, 3, 474, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-04708271-   -UBA-DMEA#FMED',          2, 11, 4, 1, 474, 3, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-04708296-   -UBA-DMEA#FMED',          2, 11, 4, 1, 474, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-04708331-   -UBA-DMEA#FMED',          2, 11, 4, 2, 474, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-04708391-   -UBA-DMEA#FMED',          2, 11, 4, 1, 438, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-04708471-   -UBA-DMEA#FMED',          2, 11, 4, 1, 474, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-04708503-   -UBA-DMEA#FMED',          2, 11, 4, 2, 474, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-04708560-   -UBA-DMEA#FMED',          2, 11, 4, 1, 474, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-04708606-   -UBA-DMEA#FMED',          2, 11, 2, 2, 438, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ],
                ['EX-2024-04469068-   -UBA-DMRD#SHA_FPSI',      2, 13, 4, 1, 1, 1, '2024-10-21 09:00:00', '2024-11-21 18:00:00', '09:00', '18:00', '2024-10-02', 1, '', '' ]
            ]
        );



    # EX-2024-04425629-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1613,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04425629-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2646,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04425629-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

    # EX-2024-04425823-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2636,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04425823-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2637,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04425823-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1419,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04425823-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1680,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04425823-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

    # EX-2024-04428188-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2587,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04428188-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2592,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04428188-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2633,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04428188-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

    # EX-2024-04429355-   -UBA-DMESA#SSA_FAGRO

            $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2579,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04429355-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

    # EX-2024-04441775-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2576,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04441775-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1604,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04441775-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    
    # EX-2024-04552901-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1187,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04552901-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

    # EX-2024-04553492-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            342,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04553492-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2654,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04553492-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

    # EX-2024-04558032-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            320,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04558032-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

    # EX-2024-04602006-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2992,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04602006-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1680,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04602006-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2613,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-04602006-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

    # EX-2024-03493386-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            870,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03493386-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

    # EX-2024-03494314-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            871,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03494314-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
    # EX-2024-03555064-   -UBA-DME#FCE
    
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            288,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03555064-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();    

    # EX-2024-03555142-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1053,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03555142-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();    

    # EX-2024-03555307-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            254,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03555307-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();   

    # EX-2024-03555349-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            418,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03555349-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();   

    # EX-2024-03655294-   -UBA-DME#FCE

         $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            870,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03655294-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();      

    # EX-2024-03988195-   -UBA-DME#FCE

         $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1511,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03988195-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();      

    # EX-2024-03989886-   -UBA-DME#FCE

         $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1308,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03989886-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();   

    # EX-2024-03990681-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1510,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-03990681-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

    # EX-2024-04002878-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1510,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04002878-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

    # EX-2023-05825114-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            460,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-05825114-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            458,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-05825114-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();  

    # EX-2022-06782095-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            271,
            3
            from concurso c
            where c.numero_expediente = 'EX-2022-06782095-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

    # EX-2024-03912889-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            755,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912889-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            838,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912889-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            583,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912889-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            596,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912889-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            595,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912889-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            593,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912889-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2648,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03912889-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

    # EX-2024-05091720-   -UBA-DMESA#SG_FVET

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            912,
            6
            from concurso c
            where c.numero_expediente = 'EX-2024-05091720-   -UBA-DMESA#SG_FVET'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

    # EX-2024-05091773-   -UBA-DMESA#SG_FVET

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            912,
            6
            from concurso c
            where c.numero_expediente = 'EX-2024-05091773-   -UBA-DMESA#SG_FVET'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

    # EX-2024-04570806-   -UBA-DME#FFYL

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2993,
            9
            from concurso c
            where c.numero_expediente = 'EX-2024-04570806-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

    # EX-2024-04708101-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            970,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708101-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2994,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708101-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 
                
    # EX-2024-04708188-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            970,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708188-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2995,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708188-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

    # EX-2024-04708271-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            970,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708271-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2995,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708271-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

    # EX-2024-04708296-   -UBA-DMEA#FMED

            $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            970,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708296-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2996,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708296-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

    # EX-2024-04708331-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            970,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708331-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2996,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708331-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

    # EX-2024-04708391-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            994,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708391-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();     

    # EX-2024-04708471-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            970,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708471-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2994,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708471-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

    # EX-2024-04708503-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            970,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708503-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2997,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708503-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();     

    # EX-2024-04708560-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            970,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708560-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2997,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708560-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

    # EX-2024-04708606-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            994,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04708606-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 

    # EX-2024-04469068-   -UBA-DMRD#SHA_FPSI

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1264,
            13
            from concurso c
            where c.numero_expediente = 'EX-2024-04469068-   -UBA-DMRD#SHA_FPSI'
        ";
        Yii::$app->db->createCommand($sql)->execute(); 




        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Armando Martín', 'RENNELLA', '00000233',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mario Néstor', 'CLOZZA', '00000234',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrés Daniel', 'ZAMBELLI', '00000235',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marina', 'CIANCIA', '00000236',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ana Rosa', 'GARCÍA', '00000237',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandro', 'SCHOR', '00000238',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandro Oscar', 'COSTANTINI', '00000239',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Martín Roberto', 'AGUIAR', '00000240',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Damián André', 'PÉREZ', '00000241',0)";

        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Martín Gervasio', 'RAPETTI', '00000242',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Darío Alejandro', 'ROSSIGNOLO', '00000243',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Laura', 'ALZUA', '00000244',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Daniel Alejandro', 'MACEIRA', '00000245',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Federico Nelson', 'DORIN', '00000246',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Victoria', 'GIARRIZZO', '00000247',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sandra Beatriz', 'MACERI,', '00000248',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ruth Irene', 'PUSTILNIK', '00000249',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values (' César Hernán', 'RUGGERI', '00000250',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Danilo Rogelio', 'TRUPKIN', '00000251',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Fernando Francisco', 'LERENDEGUI', '00000252',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Diana Patricia', 'SAGARO', '00000253',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Edecio Miguel', 'MOYANO', '00000254',0)";
        Yii::$app->db->createCommand($sql)->execute();



        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcelo Daniel', 'RODRIGUEZ', '00000255',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Fernando LÓPEZ', 'CHIESA', '00000256',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Luisa Fernanda', 'INZA', '00000257',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Leandro Ariel', 'SCLAVO', '00000258',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Hernán Matías', 'LAMAGRANDE', '00000259',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Patricio Adrián', 'SOUZZI', '00000260',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Jorge Bernardo', 'ARIAS', '00000261',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Claudia Marcela', 'CERCHIARA', '00000262',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ana Laura', 'FERNÁNDEZ', '00000263',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mariana Laura', 'GONZÁLEZ', '00000264',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Damián', 'KENNEDY', '00000265',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Paula Irene', 'ESPAÑOL', '00000266',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Matías Sebastián', 'KULFAS', '00000267',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Pablo Alberto', 'GASQUET', '00000268',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Diego Marcelo', 'LEDESMA ITURBIDE', '00000269',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Carlos Javier', 'NAGATA', '00000270',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sergio', 'MARCANTONIO', '00000271',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcelo', 'MIRAGAYA', '00000272',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandra Rosario', 'ROCA', '00000273',0)";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000233',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04425629-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 
    
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000234',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04425823-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000235',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04428188-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000236',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04429355-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000237',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04441775-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000238',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04552901-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000239',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04553492-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000240',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04558032-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000241',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04602006-   -UBA-DMESA#SSA_FAGRO'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000242',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03493386-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000243',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03494314-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000244',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03555064-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000245',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03555142-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000246',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03555307-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000247',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03555349-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000248',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03555349-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000249',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03555349-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000250',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03555349-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000251',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03655294-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000252',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03989886-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000253',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03989886-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000254',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03989886-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000255',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03990681-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000256',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03990681-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000257',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03990681-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000258',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03990681-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000259',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03990681-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000260',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03990681-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000261',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04002878-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000262',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04002878-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000263',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05825114-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000264',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05825114-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000265',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05825114-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000266',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05825114-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000267',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05825114-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000268',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-06782095-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000269',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-06782095-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000270',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-06782095-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000271',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05091720-   -UBA-DMESA#SG_FVET'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000272',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-05091773-   -UBA-DMESA#SG_FVET'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000273',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04570806-   -UBA-DME#FFYL'
        ";    
        Yii::$app->db->createCommand($sql)->execute();



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241018_191306_create_nuevos_concursos_20241023 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241018_191306_create_nuevos_concursos_20241023 cannot be reverted.\n";

        return false;
    }
    */
}
