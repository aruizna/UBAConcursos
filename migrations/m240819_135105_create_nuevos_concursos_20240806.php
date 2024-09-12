<?php

use yii\db\Migration;

/**
 * Class m240819_135105_create_nuevos_concursos_20240806
 */
class m240819_135105_create_nuevos_concursos_20240806 extends Migration
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
                [2948, 1, 'Principios de Ecología y Biodiversidad', 's', NULL, NULL],
                [2949, 1, 'Producción Orgánica de Granos y Forrajes y Agroecología', 's', NULL, NULL],
                [2950, 1, 'Arbolado Urbano', 's', NULL, NULL],
                [2951, 2, 'Gestión Industrial', 's', NULL, NULL],
                [2952, 4, 'y todas las materias que dicte el Departamento de Matemática', 's', NULL, NULL],
                [2953, 4, 'y todas las materias que dicte el Departamento de Matemática. Área de investigación: Álgebra', 's', NULL, NULL],
                [2954, 4, 'y todas las materias que dicte el Departamento de Matemática. Área de investigación: Topología y Geometría', 's', NULL, NULL],
                [2955, 4, 'y todas las materias que dicte el Departamento de Matemática. Área de investigación: Análisis y/o Probabilidad', 's', NULL, NULL],
                [2956, 4, 'Introducción a la Programación', 's', NULL, NULL],
                [2957, 4, 'Algoritmos y Estructura de Datos', 's', NULL, NULL],
                [2958, 4, 'Ingeniería de Software', 's', NULL, NULL],
                [2959, 4, 'Lenguajes Formales', 's', NULL, NULL],
                [2960, 4, 'Autómatas y Computabilidad', 's', NULL, NULL],
                [2961, 4, 'Complejidad Computacional', 's', NULL, NULL],
                [2962, 4, 'Programación Concurrente y Paralela', 's', NULL, NULL],
                [2963, 5, 'Semiótica I', 's', NULL, NULL],
                [2964, 6, 'Salud Pública y Principios de la Epidemiología', 's', NULL, NULL],
                [2965, 8, 'Práctica Social Educativa', 's', NULL, NULL],

                [2966, 8, 'Tecnicatura Universitaria en Óptica y Contactología', 's', NULL, NULL],
                [2967, 8, 'Práctica Profesional Farmacéutica', 's', NULL, NULL],
                [2968, 8, 'área Farmacia Clínica y Asistencial', 's', NULL, NULL],
                
                [2969, 9, 'Didáctica II', 's', NULL, NULL],

                
            ]
        );

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [465, 2, 'Carrera de Diseño Gráfico', 1],
                [466, 4, 'CDepartamento de Matemática', 1],
                
            ]
        );

        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-00006534-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 1, 457, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Bioquímica', ''],
                ['EX-2024-00006606-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 3, 457, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Genética', ''],
                ['EX-2024-00006659-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 3, 457, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Microbiología Agrícola', ''],
                ['EX-2024-00006799-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 3, 111, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Química Inorgánica y Analítica', ''],
                ['EX-2024-00006835-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 1, 111, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Botánica General', ''],
                ['EX-2024-00008225-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 1, 457, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Genética', ''],
                ['EX-2024-00008398-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 3, 111, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Ecología', ''],
                ['EX-2024-00008873-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 3, 457, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Fisiología Vegetal', ''],
                ['EX-2024-00009248-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 1, 457, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Bioquímica', ''],
                ['EX-2024-00009392-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 3, 457, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Bioquímica', ''],
                ['EX-2024-00009953-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 1, 457, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Fisiología Vegetal', ''],
                ['EX-2024-00010052-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 3, 460, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Fitopatología', ''],
                ['EX-2024-02606333-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 3, 435, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área de Agroecología', ''],
                ['EX-2024-02720269-   -UBA-DMESA#SSA_FAGRO' , 4,   1, 4, 1, 165, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Jardinería', ''],
                
                ['EX-2024-02622862-   -UBA-DME#SH_FADU'     , 2,   2, 5, 2, 465, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2024-03209052-   -UBA-DME#SH_FADU'     , 2,   2, 5, 1, 421, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                
                ['EX-2024-03130360-   -UBA-DME#FCE'         , 1,   3, 5, 1, 113, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2024-03130389-   -UBA-DME#FCE'         , 1,   3, 5, 1, 113, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2024-03130429- -UBA-DME#FCE'           , 1,   3, 5, 1, 113, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Grupo de asignaturas del área Matemática', ''],
                ['EX-2022-06201214-   -UBA-DME#FCE'         , 1,   3, 4, 1, 109, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                
                ['EX-2024-02704009-   -UBA-DMESA#FCEN'      , 1,   4, 4, 1, 466, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área Geometría Diofántica', ''],
                ['EX-2024-02704473-   -UBA-DMESA#FCEN'      , 1,   4, 4, 3, 466, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área Geometría Diferencial', ''],
                ['EX-2024-02704852-   -UBA-DMESA#FCEN'      , 1,   4, 3, 3, 466, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área Análisis Numérico', ''],
                ['EX-2024-02706455-   -UBA-DMESA#FCEN'      , 2,   4, 4, 3, 466, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área docente: Matemática', ''],
                ['EX-2024-02706487-   -UBA-DMESA#FCEN'      , 2,   4, 4, 3, 466, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área docente: Matemática', ''],
                ['EX-2024-02706565-   -UBA-DMESA#FCEN'      , 2,   4, 4, 3, 466, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área docente: Matemática', ''],
                ['EX-2024-02706654-   -UBA-DMESA#FCEN'      , 2,   4, 4, 1, 466, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área Matemática Computacional', ''],
                ['EX-2024-02728083- -UBA-DMESA#FCEN'        , 2,   4, 2, 1, 466, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área Teoría de Juegos y/o Matemática Aplicada', ''],
                ['EX-2024-02797518-   -UBA-DMESA#FCEN'      , 1,   4, 3, 1, 409, 3, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área Genética y Evolución', ''],
                ['EX-2024-02888246-   -UBA-DMESA#FCEN'      , 2,   4, 4, 1, 411, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área docente: Sistemas y Arquitectura y Organización de Computadores, con orientación profesional en la industria', ''],
                ['EX-2024-02961138-   -UBA-DMESA#FCEN'      , 2,   4, 4, 1, 411, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área para el dictado de todas las materias obligatorias que dicta el Departamento de Computación, con orientación en la investigación activa', ''],
                
                ['EX-2024-01621465-   -UBA-DME#SAHDU_FSOC'  , 1,   5, 2, 2, 37, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2023-02406492-   -UBA-DME#SAHDU_FSOC'  , 2,   5, 4, 1, 42, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2023-02461340-   -UBA-DME#SAHDU_FSOC'  , 2,   5, 2, 1, 420, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2021-02611433-   -UBA-DME#SAHDU_FSOC'  , 2,   5, 4, 1, 40, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Área Teoría Sociológica Área de investigación: Desafíos en la Investigación en las Agencias de Control Social Penal en la Argentina', ''],
                ['EX-2023-02658182-   -UBA-DME#SAHDU_FSOC'  , 2,   5, 2, 1, 420, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2023-02853201-   -UBA-DME#SAHDU_FSOC'  , 2,   5, 4, 1, 420, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2022-05564086-   -UBA-DME#SAHDU_FSOC'  , 2,   5, 4, 1, 42, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2022-05660506-   -UBA-DME#SAHDU_FSOC'  , 2,   5, 4, 1, 420, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2022-05687528-   -UBA-DME#SAHDU_FSOC'  , 2,   5, 4, 1, 42, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2021-06130383- -UBA-DME#SAHDU_FSOC'    , 2,   5, 4, 1, 420, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                
                ['EX-2024-03133734-   -UBA-DMESA#SG_FVET'   , 2,   6, 4, 3, null, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                
                ['EX-2024-02808883-   -UBA-DME#SSA_FFYB'    , 4,   8, 4, 1, 9, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra Farmacia Clínica', ''],
                ['EX-2024-02809113-   -UBA-DME#SSA_FFYB'    , 4,   8, 4, 1, 12, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra Física', ''],
                ['EX-2024-02809191-   -UBA-DME#SSA_FFYB'    , 1,   8, 3, 2, 12, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra Matemática', ''],
                ['EX-2024-03153750-   -UBA-DME#SSA_FFYB'    , 1,   8, 4, 2,  3, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra Tecnología Farmacéutica I', ''],
                ['EX-2024-03153810-   -UBA-DME#SSA_FFYB'    , 4,   8, 3, 1,  4, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra Fisiología', ''],
                ['EX-2024-03153852-   -UBA-DME#SSA_FFYB'    , 4,   8, 4, 3,  4, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra de Anatomía e Histología', ''],
                
                ['EX-2023-03114014- -UBA-DME#FFYL'          , 2,   9, 3, 1, 15, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2023-03114037- -UBA-DME#FFYL'          , 2,   9, 4, 1, 15, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                ['EX-2023-07100706-   -UBA-DME#FFYL'        , 2,   9, 4, 1, 422, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, '', ''],
                
                ['EX-2024-02443243-   -UBA-DMEDA#FODON'     , 4,  12, 4, 2, null, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra Materiales Dentales', ''],
                ['EX-2024-02720093-   -UBA-DMEDA#FODON'     , 1,  12, 4, 2, null, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra Preclínica de Odontología Restauradora', ''],
                ['EX-2024-02746515-   -UBA-DMEDA#FODON'     , 1,  12, 4, 2, null, 1, '2024-08-23 09:00:00', '2024-09-23 18:00:00', '09:00', '18:00', '2024-08-23', 1, 'Cátedra Preclínica de Odontología Restauradora', ''],
            ]
        );


// EX-2024-00006534-   -UBA-DMESA#SSA_FAGRO

        $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2587,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00006534-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();


// EX-2024-00006606-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2595,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00006606-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1419,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00006606-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00006659-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2604,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00006659-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2656,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00006659-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2631,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00006659-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00006799-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2576,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00006799-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00006835-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        157,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00006835-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        154,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00006835-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        156,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00006835-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00008225-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2595,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00008225-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1618,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00008225-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00008398-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        320,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00008398-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2621,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00008398-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        321,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00008398-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2948,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00008398-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00008873-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2603,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00008873-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        540,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00008873-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00009248-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2587,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00009248-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00009392-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2587,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00009392-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00009953-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2603,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00009953-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        540,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00009953-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-00010052-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2612,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-00010052-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-02606333-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2949,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-02606333-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-02720269-   -UBA-DMESA#SSA_FAGRO

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2950,
        1
        from concurso c
        where c.numero_expediente = 'EX-2024-02720269-   -UBA-DMESA#SSA_FAGRO'
    ";
    Yii::$app->db->createCommand($sql)->execute();


# EX-2024-02622862-   -UBA-DME#SH_FADU

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2545,
        2
        from concurso c
        where c.numero_expediente = 'EX-2024-02622862-   -UBA-DME#SH_FADU'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2546,
        2
        from concurso c
        where c.numero_expediente = 'EX-2024-02622862-   -UBA-DME#SH_FADU'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2547,
        2
        from concurso c
        where c.numero_expediente = 'EX-2024-02622862-   -UBA-DME#SH_FADU'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2548,
        2
        from concurso c
        where c.numero_expediente = 'EX-2024-02622862-   -UBA-DME#SH_FADU'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-03209052-   -UBA-DME#SH_FADU

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2951,
        2
        from concurso c
        where c.numero_expediente = 'EX-2024-03209052-   -UBA-DME#SH_FADU'
    ";
    Yii::$app->db->createCommand($sql)->execute();


# EX-2024-03130360-   -UBA-DME#FCE

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2562,
        3
        from concurso c
        where c.numero_expediente = 'EX-2024-03130360-   -UBA-DME#FCE'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-03130389-   -UBA-DME#FCEE

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        58,
        3
        from concurso c
        where c.numero_expediente = 'EX-2024-03130389-   -UBA-DME#FCE'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-03130429- -UBA-DME#FCE

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        57,
        3
        from concurso c
        where c.numero_expediente = 'EX-2024-03130429- -UBA-DME#FCE'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        26,
        3
        from concurso c
        where c.numero_expediente = 'EX-2024-03130429- -UBA-DME#FCE'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        58,
        3
        from concurso c
        where c.numero_expediente = 'EX-2024-03130429- -UBA-DME#FCE'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2022-06201214-   -UBA-DME#FCE

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        682,
        3
        from concurso c
        where c.numero_expediente = 'EX-2022-06201214-   -UBA-DME#FCE'
    ";
    Yii::$app->db->createCommand($sql)->execute();









# EX-2024-02704009-   -UBA-DMESA#FCEN

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        27,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        28,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        30,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        31,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        43,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        49,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        51,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        52,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        61,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        63,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        163,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        340,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        341,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        365,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        434,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        597,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        599,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        600,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        790,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        868,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        918,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1755,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1164,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1464,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1539,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1548,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2952,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();




    
# EX-2024-02704473-   -UBA-DMESA#FCEN

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        27,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        28,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        30,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        31,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        43,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        49,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        51,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        52,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        61,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        63,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        163,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        340,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        341,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        365,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        434,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        597,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        599,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        600,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        790,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        868,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        918,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1755,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1164,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1464,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1539,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1548,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2952,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();




# EX-2024-02704852-   -UBA-DMESA#FCEN

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        27,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        28,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        30,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        31,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        43,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        49,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        51,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        52,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        61,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        63,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        163,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        340,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        341,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        365,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        434,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        597,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        599,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        600,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        790,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        868,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        918,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1755,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1164,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1464,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1539,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1548,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2952,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

# EX-2024-02706455-   -UBA-DMESA#FCEN

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        27,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        28,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        30,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        31,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        43,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        49,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        51,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        52,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();




    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        57,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2766,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        61,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        63,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        163,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        340,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        341,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        365,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();



    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        434,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        597,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        599,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        600,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        790,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        868,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        918,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1755,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


        $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1164,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1464,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1539,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1548,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2953,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706455-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


# EX-2024-02706487-   -UBA-DMESA#FCEN


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        27,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        28,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        30,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        31,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        43,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        49,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        51,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        52,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();




    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        57,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2766,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        61,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        63,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        163,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        340,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        341,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        365,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        434,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        597,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        599,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        600,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        790,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        868,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        918,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1755,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


        $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1164,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1464,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1539,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1548,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2954,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706487-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();



// *****************************************************************************************
# EX-2024-02706565-   -UBA-DMESA#FCEN


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        27,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        28,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        30,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        31,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        43,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        49,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        51,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        52,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        57,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2766,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        61,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        63,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        163,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        340,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        341,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        365,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        434,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        597,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        599,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        600,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        790,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        868,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        918,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1755,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1164,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1464,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1539,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1548,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2955,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706565-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();



// *****************************************************************************************
# EX-2024-02706654-   -UBA-DMESA#FCEN


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        27,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        28,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        30,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        31,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        43,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        49,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        51,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        52,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        57,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2766,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        61,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        63,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        163,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        340,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        341,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        365,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        434,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        597,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        599,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        600,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        790,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        868,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        918,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1755,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1164,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1464,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1539,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1548,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2952,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02706654-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();



// *****************************************************************************************
# EX-2024-02728083- -UBA-DMESA#FCEN


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        27,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        28,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        30,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        31,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        43,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        49,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        51,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        52,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        57,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2766,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        61,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        63,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        163,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        340,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        341,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        365,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        434,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        597,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        599,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        600,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        790,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        868,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        918,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1755,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1164,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1464,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1539,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1548,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2952,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02728083- -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


// *******************************************************

# EX-2024-02797518-   -UBA-DMESA#FCEN


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2659,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02797518-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        477,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02797518-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2660,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02797518-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        579,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02797518-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2810,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02797518-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2661,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02797518-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2587,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02797518-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1071,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02797518-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2589,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02797518-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2588,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02797518-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1385,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02797518-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();



# EX-2024-02888246-   -UBA-DMESA#FCEN

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2895,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02888246-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2897,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02888246-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1381,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02888246-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


# EX-2024-02961138-   -UBA-DMESA#FCEN


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2956,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2957,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1076,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2828,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2897,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2958,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2959,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2960,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2895,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2811,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2961,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1381,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2894,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2962,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2896,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2814,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2812,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2883,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2833,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-02961138-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

  #  EX-2024-01621465-   -UBA-DME#SAHDU_FSOC

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1258,
        5
        from concurso c
        where c.numero_expediente = 'EX-2024-01621465-   -UBA-DME#SAHDU_FSOC'
    ";
    Yii::$app->db->createCommand($sql)->execute();


  #  EX-2023-02406492-   -UBA-DME#SAHDU_FSOC

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2597,
        5
        from concurso c
        where c.numero_expediente = 'EX-2023-02406492-   -UBA-DME#SAHDU_FSOC'
    ";
    Yii::$app->db->createCommand($sql)->execute();


  #  EX-2023-02461340-   -UBA-DME#SAHDU_FSOC

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2645,
        5
        from concurso c
        where c.numero_expediente = 'EX-2023-02461340-   -UBA-DME#SAHDU_FSOC'
    ";
    Yii::$app->db->createCommand($sql)->execute();


  #  EX-2021-02611433-   -UBA-DME#SAHDU_FSOC

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1397,
        5
        from concurso c
        where c.numero_expediente = 'EX-2021-02611433-   -UBA-DME#SAHDU_FSOC'
    ";
    Yii::$app->db->createCommand($sql)->execute();

  #  EX-2023-02658182-   -UBA-DME#SAHDU_FSOC

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2638,
        5
        from concurso c
        where c.numero_expediente = 'EX-2023-02658182-   -UBA-DME#SAHDU_FSOC'
    ";
    Yii::$app->db->createCommand($sql)->execute();

  #  EX-2023-02853201-   -UBA-DME#SAHDU_FSOC

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2641,
        5
        from concurso c
        where c.numero_expediente = 'EX-2023-02853201-   -UBA-DME#SAHDU_FSOC'
    ";
    Yii::$app->db->createCommand($sql)->execute();


  #  EX-2022-05564086-   -UBA-DME#SAHDU_FSOC

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1791,
        5
        from concurso c
        where c.numero_expediente = 'EX-2022-05564086-   -UBA-DME#SAHDU_FSOC'
    ";
    Yii::$app->db->createCommand($sql)->execute();



  #  EX-2022-05660506-   -UBA-DME#SAHDU_FSOC

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2635,
        5
        from concurso c
        where c.numero_expediente = 'EX-2022-05660506-   -UBA-DME#SAHDU_FSOC'
    ";
    Yii::$app->db->createCommand($sql)->execute();


  #  EX-2022-05687528-   -UBA-DME#SAHDU_FSOC

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2963,
        5
        from concurso c
        where c.numero_expediente = 'EX-2022-05687528-   -UBA-DME#SAHDU_FSOC'
    ";
    Yii::$app->db->createCommand($sql)->execute();


  #  EX-2021-06130383- -UBA-DME#SAHDU_FSOC

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2591,
        5
        from concurso c
        where c.numero_expediente = 'EX-2021-06130383- -UBA-DME#SAHDU_FSOC'
    ";
    Yii::$app->db->createCommand($sql)->execute();

  # EX-2024-03133734-   -UBA-DMESA#SG_FVET

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2964,
        6
        from concurso c
        where c.numero_expediente = 'EX-2024-03133734-   -UBA-DMESA#SG_FVET'
    ";
    Yii::$app->db->createCommand($sql)->execute();

  # EX-2024-02808883-   -UBA-DME#SSA_FFYB

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2965,
        8
        from concurso c
        where c.numero_expediente = 'EX-2024-02808883-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2968,
        8
        from concurso c
        where c.numero_expediente = 'EX-2024-02808883-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();


  # EX-2024-02809113-   -UBA-DME#SSA_FFYB

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1040,
        8
        from concurso c
        where c.numero_expediente = 'EX-2024-02809113-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1041,
        8
        from concurso c
        where c.numero_expediente = 'EX-2024-02809113-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2966,
        8
        from concurso c
        where c.numero_expediente = 'EX-2024-02809113-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

  # EX-2024-02809191-   -UBA-DME#SSA_FFYB

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2932,
        8
        from concurso c
        where c.numero_expediente = 'EX-2024-02809191-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

  # EX-2024-03153750-   -UBA-DME#SSA_FFYB

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2967,
        8
        from concurso c
        where c.numero_expediente = 'EX-2024-03153750-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

  # EX-2024-03153810-   -UBA-DME#SSA_FFYB

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        533,
        8
        from concurso c
        where c.numero_expediente = 'EX-2024-03153810-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

  # EX-2024-03153852-   -UBA-DME#SSA_FFYB

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2398,
        8
        from concurso c
        where c.numero_expediente = 'EX-2024-03153852-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

  # EX-2023-03114014- -UBA-DME#FFYL

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        850,
        9
        from concurso c
        where c.numero_expediente = 'EX-2023-03114014- -UBA-DME#FFYL'
    ";
    Yii::$app->db->createCommand($sql)->execute();

  # EX-2023-03114037- -UBA-DME#FFYL

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        850,
        9
        from concurso c
        where c.numero_expediente = 'EX-2023-03114037- -UBA-DME#FFYL'
    ";
    Yii::$app->db->createCommand($sql)->execute();

  # EX-2023-07100706-   -UBA-DME#FFYL

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2969,
        9
        from concurso c
        where c.numero_expediente = 'EX-2023-07100706-   -UBA-DME#FFYL'
    ";
    Yii::$app->db->createCommand($sql)->execute();



  # EX-2024-02443243-   -UBA-DMEDA#FODON

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2039,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-02443243-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2040,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-02443243-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2041,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-02443243-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();


  # EX-2024-02720093-   -UBA-DMEDA#FODON

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2012,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-02720093-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2056,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-02720093-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2057,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-02720093-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();


  # EX-2024-02746515-   -UBA-DMEDA#FODON

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2012,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-02746515-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2056,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-02746515-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2057,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-02746515-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();



    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Carla Paula', 'CAPUTO SUÁREZ', '00000167',0)";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Luciana Laura', 'COUSO', '00000168',0)";
    Yii::$app->db->createCommand($sql)->execute();
     
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Victoria', 'CRIADO', '00000169',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcelo Silvano', 'DE SIERVI', '00000170',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sandra Silvina', 'ALISCIONI', '00000171',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sergio Claudio', 'GHIO', '00000172',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Analía Inés', 'MENÉNDEZ', '00000173',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Federico Pedro Otto', 'MOLLARD', '00000174',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Eliana Rosa', 'MUNARRIZ', '00000175',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrés', 'PETON', '00000176',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Verónica', 'RODRÍGUEZ', '00000177',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Francisco José', 'SAUTUA', '00000178',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Santiago Miguel', 'COTRONEO', '00000179',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gabriela Eda', 'CAMPARI', '00000180',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Silvia', 'VIETRI', '00000181',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María José', 'BIANCO', '00000182',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Roberto Armando', 'GARCIA', '00000183',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Pablo', 'VOLKIND', '00000184',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Román Jorge', 'SASYK', '00000185',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Guillermo Sebastián', 'HENRY', '00000186',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gabriel', 'ACOSTA RODRÍGUEZ', '00000187',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Martín Javier', 'RAMÍREZ', '00000188',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Daniel', 'LUTZKY', '00000189',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Santiago', 'ZUGBI', '00000190',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Judith', 'MONTENEGRO BRUSOTTI', '00000191',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Claudia Patricia', 'MOLINARI', '00000192',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Karina Andrea', 'MANCO', '00000193',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Analía Lorena', 'TOMAT', '00000194',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Hyun Jin', 'LEE', '00000195',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María José', 'MOLINA', '00000196',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Daniel Gustavo', 'MARTUCCI', '00000197',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Lucio Eduardo', 'SCALZO', '00000198',0)";
    Yii::$app->db->createCommand($sql)->execute();
       
     
     
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000167',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-00006534-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();
 
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000168',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-00006606-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();        

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000169',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-00006659-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000170',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-00006799-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000171',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-00006835-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000172',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-00008225-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000173',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-00008398-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000174',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-00008873-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000175',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-00009248-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000176',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-00009392-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000177',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-00009953-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000178',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-00010052-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();  
 
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000179',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-02606333-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();      
 
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000180',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-02720269-   -UBA-DMESA#SSA_FAGRO'
    ";    
    Yii::$app->db->createCommand($sql)->execute();    
 
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000181',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03130360-   -UBA-DME#FCE'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 
 
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000182',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03130389-   -UBA-DME#FCE'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 
 
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000183',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03130429- -UBA-DME#FCE'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 
 
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000184',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2022-06201214-   -UBA-DME#FCE'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 
 
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000185',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-02704009-   -UBA-DMESA#FCEN'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 
 
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000186',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-02704473-   -UBA-DMESA#FCEN'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 
 
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000187',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-02704852-   -UBA-DMESA#FCEN'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 
 
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000188',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-02797518-   -UBA-DMESA#FCEN'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000189',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-01621465-   -UBA-DME#SAHDU_FSOC'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000190',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-02808883-   -UBA-DME#SSA_FFYB'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000191',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-02809113-   -UBA-DME#SSA_FFYB'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000192',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-02809191-   -UBA-DME#SSA_FFYB'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000193',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03153750-   -UBA-DME#SSA_FFYB'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000194',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03153810-   -UBA-DME#SSA_FFYB'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000195',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03153852-   -UBA-DME#SSA_FFYB'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000196',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-02443243-   -UBA-DMEDA#FODON'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000197',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-02720093-   -UBA-DMEDA#FODON'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000198',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-02746515-   -UBA-DMEDA#FODON'
    ";    
    Yii::$app->db->createCommand($sql)->execute(); 





    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240819_135105_create_nuevos_concursos_20240806 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240819_135105_create_nuevos_concursos_20240806 cannot be reverted.\n";

        return false;
    }
    */
}
