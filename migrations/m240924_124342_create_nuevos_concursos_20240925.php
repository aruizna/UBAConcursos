<?php

use yii\db\Migration;

/**
 * Class m240924_124342_create_nuevos_concursos_20240925
 */
class m240924_124342_create_nuevos_concursos_20240925 extends Migration
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
                [2973, 4, 'Estadística 1', 's', NULL, NULL],
                [2974, 4, 'Estadística 2', 's', NULL, NULL],
                [2975, 4, 'Probabilidad', 's', NULL, NULL],
                [2976, 4, 'Laboratorio 1 de Química Orgánica', 's', NULL, NULL],
                [2977, 4, 'Laboratorio 2 de Química Orgánica', 's', NULL, NULL],
                [2978, 4, 'Métodos Espectroscópicos en Química Orgánica', 's', NULL, NULL],
                [2979, 4, 'Neurobiología del Aprendizaje Y la Memoria', 's', NULL, NULL],
                [2980, 4, 'Análisis Matemático 2', 's', NULL, NULL],
                [2981, 10, 'Sistemas Contables Y Gestión de Costos', 's', NULL, NULL],
                [2982, 10, 'Gestión Financiera Y Presupuestaria', 's', NULL, NULL],
                [2983, 4, 'Química Orgánica 1', 's', NULL, NULL],
                [2984, 4, 'Química Orgánica 2', 's', NULL, NULL],
            ]
        );

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [469, 4, 'Instituto de Cálculo', 1],
                [470, 10, 'Departamento de Gestión', 1],
                [471, 11, 'Carrera de Licenciatura en Kinesiología y Fisiatría', 1],
            ]
        );

        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-02953685-   -UBA-DME#SH_FADU'     , 2,   2,  3, 2,  419, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, '', ''],
                ['EX-2024-04583103-   -UBA-DME#FCE'         , 1,   3,  2, 1,  113, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Grupo de asignaturas del Área Matemática', ''],
                ['EX-2024-02708345-   -UBA-DMESA#FCEN'      , 2,   4,  4, 3,  469, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Área docente Estadística -  Área de investigación: Estadística', ''],
                ['EX-2024-02961015-   -UBA-DMESA#FCEN'      , 2,   4,  4, 3,  417, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Área Química Bioorgánica - Área de investigación Química Bioorgánica', ''],
                ['EX-2024-02961054-   -UBA-DMESA#FCEN'      , 2,   4,  4, 1,  417, 2, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Área Química Orgánica', ''],
                ['EX-2024-03302418-   -UBA-DMESA#FCEN'      , 2,   4,  4, 1,  468, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Área Biotecnología, Subárea Genómica', ''],
                ['EX-2024-03987766-   -UBA-DMESA#FCEN'      , 1,   4,  3, 1,  468, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Área Fisiología y Neurociencias', ''],
                ['EX-2024-04422204-   -UBA-DMESA#FCEN'      , 1,   4,  4, 1,  466, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Área para dictar las materias Análisis I, Análisis Matemático I, Análisis Matemático II, Matemática 1, Matemática 2, Matemática 3, Matemática 4, Algebra I, Cálculo Numérico, Análisis Matemático 1, Matemática I y Matemática II', ''],
                ['EX-2024-04615338-   -UBA-DMESA#SG_FVET'   , 2,   6,  4, 3, null, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, '', ''],
                ['EX-2024-03986845-   -UBA-DME#SSA_FFYB'    , 2,   8,  2, 3,    9, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Cátedra Farmacognosia', ''],
                ['EX-2024-03986945-   -UBA-DME#SSA_FFYB'    , 1,   8,  4, 3,    4, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Cátedra Biología Celular y Molecular', ''],
                ['EX-2024-03987056-   -UBA-DME#SSA_FFYB'    , 1,   8,  4, 1,   12, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Cátedra Física', ''],
                ['EX-2024-03987109-   -UBA-DME#SSA_FFYB'    , 1,   8,  4, 3,    4, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Cátedra Fisiopatología', ''],
                ['EX-2024-00405291-   -UBA-DIMEDA#SA_FI'    , 1,   10, 4, 1,  470, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Área de docencia: Economía, subárea: Ingeniería Económica', ''],
                ['EX-2021-02990709-   -UBA-DIMEDA#SA_FI'    , 1,   10, 4, 1,  470, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, 'Área de docencia: Economía, subárea: Ingeniería Económica', ''],
                ['EX-2024-03697780-   -UBA-DMEA#FMED'       , 1,   11, 2, 1,  471, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, '', ''],
                ['EX-2024-03697842-   -UBA-DMEA#FMED'       , 1,   11, 2, 2,  471, 1, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, '', ''],
                ['EX-2024-04336017-   -UBA-DMEA#FMED'       , 2,   11, 2, 1,  438, 2, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, '', ''],
                ['EX-2024-04333675-   -UBA-DMEA#FMED'       , 2,   11, 4, 1,  462, 2, '2024-09-25 09:00:00', '2024-10-24 18:00:00', '09:00', '18:00', '2024-09-25', 1, '', ''],
            ]
        );


        # EX-2024-02953685-   -UBA-DME#SH_FADU

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            96,
            2
            from concurso c
            where c.numero_expediente = 'EX-2024-02953685-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            97,
            2
            from concurso c
            where c.numero_expediente = 'EX-2024-02953685-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            98,
            2
            from concurso c
            where c.numero_expediente = 'EX-2024-02953685-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            100,
            2
            from concurso c
            where c.numero_expediente = 'EX-2024-02953685-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1217,
            2
            from concurso c
            where c.numero_expediente = 'EX-2024-02953685-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1214,
            2
            from concurso c
            where c.numero_expediente = 'EX-2024-02953685-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        # EX-2024-04583103-   -UBA-DME#FCE

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            57,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04583103-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            58,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04583103-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            26,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04583103-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-02708345-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2883,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02708345-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            434,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02708345-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();        

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2814,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02708345-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2973,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02708345-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2974,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02708345-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2822,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02708345-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();      

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2975,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02708345-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1164,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02708345-   -UBA-DMESA#FCEN'
        ";   
        Yii::$app->db->createCommand($sql)->execute();  


# EX-2024-02961015-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1296,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961015-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2983,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961015-   -UBA-DMESA#FCEN'
        ";        
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2984,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961015-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2976,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961015-   -UBA-DMESA#FCEN'
        ";  

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2977,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961015-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2688,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961015-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();      

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2978,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961015-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2970,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961015-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();


# EX-2024-02961054-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1296,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961054-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2983,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961054-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute();    

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2984,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961054-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2976,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961054-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2977,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961054-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2688,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961054-   -UBA-DMESA#FCEN'
        "; 
        Yii::$app->db->createCommand($sql)->execute();       

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2978,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961054-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2970,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02961054-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-03302418-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2775,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03302418-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-03987766-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2666,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03987766-   -UBA-DMESA#FCEN'
        "; 
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2667,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03987766-   -UBA-DMESA#FCEN'
        "; 
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2804,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03987766-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2979,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03987766-   -UBA-DMESA#FCEN'
        ";   
        Yii::$app->db->createCommand($sql)->execute();       

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2971,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03987766-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();


# EX-2024-04422204-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            27,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            51,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        "; 
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            57,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            58,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2778,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2980,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        "; 
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            166,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2766,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2767,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2768,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2769,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            886,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            887,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-04615338-   -UBA-DMESA#SG_FVET

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            912,
            6
            from concurso c
            where c.numero_expediente = 'EX-2024-04615338-   -UBA-DMESA#SG_FVET'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2354,
            6
            from concurso c
            where c.numero_expediente = 'EX-2024-04615338-   -UBA-DMESA#SG_FVET'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-03986845-   -UBA-DME#SSA_FFYB

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            484,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-03986845-   -UBA-DME#SSA_FFYB'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-03986945-   -UBA-DME#SSA_FFYB

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2399,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-03986945-   -UBA-DME#SSA_FFYB'
        "; 
        Yii::$app->db->createCommand($sql)->execute(); 


# EX-2024-03987056-   -UBA-DME#SSA_FFYB

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            510,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-03987056-   -UBA-DME#SSA_FFYB'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-03987109-   -UBA-DME#SSA_FFYB

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            544,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-03987109-   -UBA-DME#SSA_FFYB'
        ";  
        Yii::$app->db->createCommand($sql)->execute();


# EX-2024-00405291-   -UBA-DIMEDA#SA_FI

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2981,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-00405291-   -UBA-DIMEDA#SA_FI'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2142,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-00405291-   -UBA-DIMEDA#SA_FI'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2982,
            10
            from concurso c
            where c.numero_expediente = 'EX-2024-00405291-   -UBA-DIMEDA#SA_FI'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

# EX-2021-02990709-   -UBA-DIMEDA#SA_FI

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2981,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02990709-   -UBA-DIMEDA#SA_FI'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2142,
            10
            from concurso c
            where c.numero_expediente = 'EEX-2021-02990709-   -UBA-DIMEDA#SA_FI'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2982,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02990709-   -UBA-DIMEDA#SA_FI'
        ";  
        Yii::$app->db->createCommand($sql)->execute();


# EX-2024-03697780-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1356,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-03697780-   -UBA-DMEA#FMED'
        "; 
        Yii::$app->db->createCommand($sql)->execute();
        
# EX-2024-03697842-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            205,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-03697842-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-04336017-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1063,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04336017-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

# EX-2024-04333675-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            613,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-04333675-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();



        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gustavo Fabián Juan', 'ZORZOLI', '00000215',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandro', 'DELORENZI', '00000216',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Leandro Martín', 'DEL PEZZO', '00000217',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mónica Patricia', 'MAJOWICZ', '00000218',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Nora Isabel', 'SARACO', '00000219',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Elsa María de Luján', 'ZOTTA', '00000220',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Adrián Javier', 'ESCARDÓ', '00000221',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandro Oscar', 'DIEGO', '00000222',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sergio Eduardo', 'VARELA', '00000223',0)";
        Yii::$app->db->createCommand($sql)->execute();



        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000215',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04583103-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();       


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000216',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03987766-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute();    

        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000217',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04422204-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute();            
        

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000218',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03986945-   -UBA-DME#SSA_FFYB'
        ";    
        Yii::$app->db->createCommand($sql)->execute();   

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000219',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03987056-   -UBA-DME#SSA_FFYB'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000220',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03987109-   -UBA-DME#SSA_FFYB'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000221',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00405291-   -UBA-DIMEDA#SA_FI'
        ";    
        Yii::$app->db->createCommand($sql)->execute();         
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000222',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2021-02990709-   -UBA-DIMEDA#SA_FI'
        ";    
        Yii::$app->db->createCommand($sql)->execute();  

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000223',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03697780-   -UBA-DMEA#FMED'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 


        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000223',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03697842-   -UBA-DMEA#FMED'
        ";    
        Yii::$app->db->createCommand($sql)->execute();         
        
        
        
       


        


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240924_124342_create_nuevos_concursos_20240925 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240924_124342_create_nuevos_concursos_20240925 cannot be reverted.\n";

        return false;
    }
    */
}
