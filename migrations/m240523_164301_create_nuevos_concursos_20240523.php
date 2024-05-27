<?php

use yii\db\Migration;

/**
 * Class m240523_164301_create_nuevos_concursos_20240523
 */
class m240523_164301_create_nuevos_concursos_20240523 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->alterColumn('area_departamento', 'descripcion_area_departamento', $this->string(500));

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [ 441, 3, 'Departamento de Derecho', 1 ],
                [ 442, 4, 'Departamento de Industrias, área docente: Fundamentos de la Preservación de Alimentos I (operaciones básicas de preservación de alimentos y estabilidad), Fundamentos de la Preservación de Alimentos II (tecnologías emergentes de preservación de alimentos, tecnologías de membranas, reología y texturas), Operaciones Unitarias II (transferencia de masa y equipos de separación)',1],
                [ 443, 4, 'Comisión de Carrera de los Profesorados de Enseñanza Media y Superior, área docente: dictado de materias relacionadas con la Didáctica de las Ciencias',1],
                [ 444, 8, 'Departamento de Sanidad, Nutrición, Bromatología y Toxicología, cátedra Salud Pública e Higiene Ambiental',1],
                [ 445, 8, 'Departamento de Microbiología, Inmunología, Biotecnología y Genética, cátedra Inmunología',1],
                [ 446, 8, 'Departamento de Tecnología Farmacéutica, cátedra Tecnología Farmacéutica I',1],
                [ 447, 8, 'Departamento de Química Biológica, cátedra Química Biológica',1],
                [ 448, 8, 'Departamento de Tecnología Farmacéutica, cátedra Tecnología Farmacéutica II',1],
                [ 449, 11, 'Departamento de Medicina', 1],
                
            ]
        );

        $this->batchInsert(
            "asignatura",
            ["id_asignatura", "id_facultad", "descripcion_asignatura", "habilitada", "numero_resolucion", "observaciones"],
            [
                [2894, 4, 'Almacenamiento Y Recuperación de la Información', 's', NULL, NULL],
                [2895, 4, 'Arquitectura Y Organización de Computadores', 's', NULL, NULL],
                [2896, 4, 'Redes de Comunicaciones Y Cómputo Distribuido', 's', NULL, NULL],
                [2897, 4, 'Sistemas Digitales', 's', NULL, NULL],
                [2898, 6, 'Salud Pública y Epidemiología', 's', NULL, NULL],
                [2899, 8, 'Inmunología (Bioquímica) e Inmunología (Farmacia)', 's', NULL, NULL],
                [2900, 4, 'Ondas en la Atmósfera 1', 's', NULL, NULL],
                [2901, 4, 'Ondas en el Atmósfera 2', 's', NULL, NULL],
                [2902, 4, 'Paleo y Neoclima', 's', NULL, NULL],
            ]
        );


        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", 
            
            "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2022-06782021-   -UBA-DME#FCE', 2, 3, 4, 1, 112, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, '', ''],
                ['EX-2023-07662348-   -UBA-DME#FCE', 4, 3, 4, 1, 441, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, '', ''],
                ['EX-2023-07662503-   -UBA-DME#FCE', 2, 3, 4, 1, 436, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, '', ''],
                ['EX-2024-01713042-   -UBA-DMESA#FCEN', 1, 4, 4, 1, 442, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'área docente: Fundamentos de la Preservación de Alimentos I (operaciones básicas de preservación de alimentos y estabilidad), Fundamentos de la Preservación de Alimentos II (tecnologías emergentes de preservación de alimentos, tecnologías de membranas, reología y texturas), Operaciones Unitarias II (transferencia de masa y equipos de separación)', ''],
                ['EX-2024-01715159-   -UBA-DMESA#FCEN', 1, 4, 4, 3, 343, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'Biofísica', ''],
                ['EX-2024-01739491-   -UBA-DMESA#FCEN', 1, 4, 3, 3, 344, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'Física de Fluidos y Plasmas o Astrofísica', ''],
                ['EX-2024-01739534-   -UBA-DMESA#FCEN', 1, 4, 2, 3, 143, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'Sistemas No Lineales o Sistemas Complejos', ''],
                ['EX-2024-01785323-   -UBA-DMESA#FCEN', 1, 4, 4, 1, 169, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'Sistemas', ''],
                ['EX-2024-01785539-   -UBA-DMESA#FCEN', 1, 4, 4, 1, 340, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'Psicología y Aprendizaje, Subárea Aprendizaje', ''],
                ['EX-2024-01786359-   -UBA-DMESA#FCEN', 1, 4, 4, 3, 443, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'área docente: dictado de materias relacionadas con la Didáctica de las Ciencias', ''],
                ['EX-2023-05003766-   -UBA-DMESA#FCEN', 2, 4, 4, 3, 271, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'Ciencias de la Atmósfera', ''],
                ['EX-2024-02159777-   -UBA-DMESA#SG_FVET', 2, 6, 4, 3, null, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, '', ''],
                ['EX-2023-03624618-   -UBA-DME#SSA_FFYB', 4, 8, 2, 3, 444, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'cátedra Salud Pública e Higiene Ambiental', ''],
                ['EX-2023-06888613-   -UBA-DME#SSA_FFYB', 4, 8, 2, 3, 445, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'cátedra Inmunología', ''],
                ['EX-2023-06888731-   -UBA-DME#SSA_FFYB', 1, 8, 3, 2, 446, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'cátedra Tecnología Farmacéutica I', ''],
                ['EX-2023-07350123-   -UBA-DME#SSA_FFYB', 1, 8, 4, 3, 447, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'cátedra Química Biológica', ''],
                ['EX-2023-07350246-   -UBA-DME#SSA_FFYB', 1, 8, 4, 1, 448, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'cátedra Tecnología Farmacéutica II', ''],
                ['EX-2024-00897735-   -UBA-DMEA#FMED', 2, 11, 4, 1, 449, 2, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, '', ''],
                ['EX-2024-01387164-   -UBA-DMEDA#FODON', 3, 12, 2, 3, 168, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'cátedra Materiales Dentales', ''],
                ['EX-2023-06761884-   -UBA-DMEDA#FODON', 1, 12, 4, 1, 180, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'cátedra Histología y Embriología', ''],
                ['EX-2023-06761926-   -UBA-DMEDA#FODON', 1, 12, 4, 3, 178, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'cátedra Farmacología', ''],
                ['EX-2023-07146497-   -UBA-DMEDA#FODON', 1, 12, 2, 3, 125, 1, '2024-05-28 09:00:00', '2024-06-27 18:00:00', '09:00', '18:00', '2024-05-27', 1, 'cátedra Anatomía Patológica', ''],
            ]
        );





    // ***** 
        
    $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1368,
            3
            from concurso c
            where c.numero_expediente = 'EX-2022-06782021-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

    // ***** 

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1495,
        3
        from concurso c
        where c.numero_expediente = 'EX-2023-07662348-   -UBA-DME#FCE'
    ";
    Yii::$app->db->createCommand($sql)->execute();

// ****

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        17,
        3
        from concurso c
        where c.numero_expediente = 'EX-2023-07662503-   -UBA-DME#FCE'
    ";
    Yii::$app->db->createCommand($sql)->execute();


// *** 4 
// EX-2024-01713042-   -UBA-DMESA#FCEN

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2664,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01713042-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2665,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01713042-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2663,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01713042-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

// **** 
// EX-2024-01715159-   -UBA-DMESA#FCEN

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        518,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01715159-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        520,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01715159-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        523,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01715159-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        525,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01715159-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        898,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01715159-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


// ***  EX-2024-01739491-   -UBA-DMESA#FCEN

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        452,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01739491-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        452,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01739491-   -UBA-DMESA#FCEN'
    ";

    Yii::$app->db->createCommand($sql)->execute();

        $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2690,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01739491-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

        $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2691,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01739491-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2692,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01739491-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();



    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2696,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01739491-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        898,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01739491-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();


// ** EX-2024-01739534-   -UBA-DMESA#FCEN

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2690,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01739534-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2691,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01739534-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2692,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01739534-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2693,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01739534-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        898,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01739534-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    


// EX-2024-01785323-   -UBA-DMESA#FCEN

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1381,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01785323-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2894,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01785323-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2895,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01785323-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2896,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01785323-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2897,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01785323-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    


// *** EX-2024-01785539-   -UBA-DMESA#FCEN


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1257,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01785539-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    


// *** EX-2024-01786359-   -UBA-DMESA#FCEN

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        300,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        301,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2829,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2830,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2831,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2832,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2833,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2834,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2835,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2836,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2837,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2838,
        4
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();    



// *** EX-2024-02159777-   -UBA-DMESA#SG_FVET

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2898,
        6
        from concurso c
        where c.numero_expediente = 'EX-2024-02159777-   -UBA-DMESA#SG_FVET'
        ";
    Yii::$app->db->createCommand($sql)->execute();    

// *** EX-2023-03624618-   -UBA-DME#SSA_FFYB


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2410,
        8
        from concurso c
        where c.numero_expediente = 'EX-2023-03624618-   -UBA-DME#SSA_FFYB'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 


// *** EX-2023-06888613-   -UBA-DME#SSA_FFYB

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2899,
        8
        from concurso c
        where c.numero_expediente = 'EX-2023-06888613-   -UBA-DME#SSA_FFYB'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 


// *** EX-2023-06888731-   -UBA-DME#SSA_FFYB

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2404,
        8
        from concurso c
        where c.numero_expediente = 'EX-2023-06888731-   -UBA-DME#SSA_FFYB'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

// *** EX-2023-07350123-   -UBA-DME#SSA_FFYB

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2400,
        8
        from concurso c
        where c.numero_expediente = 'EX-2023-06888731-   -UBA-DME#SSA_FFYB'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

// *** EX-2023-07350246-   -UBA-DME#SSA_FFYB

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2408,
        8
        from concurso c
        where c.numero_expediente = 'EX-2023-06888731-   -UBA-DME#SSA_FFYB'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

// *** EX-2024-00897735-   -UBA-DMEA#FMED

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1010,
        11
        from concurso c
        where c.numero_expediente = 'EX-2024-00897735-   -UBA-DMEA#FMED'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

// *** EX-2024-01387164-   -UBA-DMEDA#FODON

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2039,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-00897735-   -UBA-DMEA#FMED'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2040,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-00897735-   -UBA-DMEA#FMED'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2041,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-00897735-   -UBA-DMEA#FMED'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

// *** EX-2023-06761884-   -UBA-DMEDA#FODON

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2038,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-00897735-   -UBA-DMEA#FMED'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2021,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-00897735-   -UBA-DMEA#FMED'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

// *** EX-2023-06761926-   -UBA-DMEDA#FODON

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2036,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-00897735-   -UBA-DMEA#FMED'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2027,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-00897735-   -UBA-DMEA#FMED'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

// *** EX-2023-07146497-   -UBA-DMEDA#FODON

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2017,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-00897735-   -UBA-DMEA#FMED'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2018,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-00897735-   -UBA-DMEA#FMED'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2019,
        12
        from concurso c
        where c.numero_expediente = 'EX-2024-00897735-   -UBA-DMEA#FMED'
        ";
    Yii::$app->db->createCommand($sql)->execute(); 


    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2761,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1754,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

        $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2759,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        198,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2753,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2746,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  



    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2769,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2747,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

        $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2748,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2729,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2754,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2736,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

//--

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        1751,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2755,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2756,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

//--

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2731,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2749,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2744,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

//--

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2745,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2624,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2625,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  


//--

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2737,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        930,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        931,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  


//--

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        959,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2572,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2738,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  


//--

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2739,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2740,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2763,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  


    //--

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2733,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2741,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2730,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  


    //--

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2742,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2750,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2751,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    //--

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2732,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2762,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2752,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    //--

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2758,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();   

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2743,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2757,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2777,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2900,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2901,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  

    $sql = "
        insert INTO concurso_asignatura 
        select  
        c.id_concurso,
        2902,
        4
        from concurso c
        where c.numero_expediente = 'EX-2023-05003766-   -UBA-DMESA#FCEN'
        ";
    Yii::$app->db->createCommand($sql)->execute();  










    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Roberto Hernán', 'FERREIRA', '00000077',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Silvia Karina', 'FLORES', '00000078',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Pablo', 'BALENZUELA', '00000079',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Fernando Oscar', 'MINOTTI', '00000080',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Fernando Oscar', 'MINOTTI', '00000081',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcelo Raúl', 'RISK', '00000082',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Laura Cecilia', 'ACEVEDO', '00000083',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrea Fernanda', 'REVEL CHION', '00000084',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sonia Edith', 'KOROL', '00000085',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Pablo Cesar', 'BALDI', '00000086',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Diego Andrés', 'CHIAPPETTA', '00000087',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Nora Mariel', 'MARDER', '00000088',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Daniela Elisa', 'CALANDRI', '00000089',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrea Edith', 'KAPLAN', '00000090',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Luciana Marina', 'SANCHEZ', '00000091',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Betina Esther', 'ORMAN', '00000092',0)";
    Yii::$app->db->createCommand($sql)->execute();
    $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Daniel Gustavo', 'OLMEDO', '00000093',0)";
    Yii::$app->db->createCommand($sql)->execute();


    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000077',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2023-07662348-   -UBA-DME#FCE'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000078',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-01713042-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000079',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-01715159-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000080',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-01739491-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000081',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-01739534-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000082',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-01785323-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000083',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-01785539-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000084',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-01786359-   -UBA-DMESA#FCEN'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000085',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2023-03624618-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000086',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2023-06888613-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000087',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2023-06888731-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000088',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2023-07350123-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000089',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2023-07350246-   -UBA-DME#SSA_FFYB'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000090',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-01387164-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000091',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2023-06761884-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000092',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2023-06761926-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000093',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2023-07146497-   -UBA-DMEDA#FODON'
    ";
    Yii::$app->db->createCommand($sql)->execute();
    




    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240523_164301_create_nuevos_concursos_20240523 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240523_164301_create_nuevos_concursos_20240523 cannot be reverted.\n";

        return false;
    }
    */
}


/*


        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],

        );


*/