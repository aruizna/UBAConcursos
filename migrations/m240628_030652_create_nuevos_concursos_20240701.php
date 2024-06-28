<?php

use yii\db\Migration;

/**
 * Class m240628_030652_create_nuevos_concursos_20240701
 */
class m240628_030652_create_nuevos_concursos_20240701 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        
        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [456, 4, 'Departamento de Química Biológica', 1],
            ]
        );

        $this->batchInsert(
            "asignatura",
            ["id_asignatura", "id_facultad", "descripcion_asignatura", "habilitada", "numero_resolucion", "observaciones"],
            [
                [2906, 4, 'cualquier materia que deba ser dictada para alumnos de las carreras en la Facultad de Ciencias Exactas y Naturales cuyo contenido esté relacionado con el área', 's', NULL, NULL],
                [2907, 4, 'otras materias de la Licenciatura en Ciencias Físicas', 's', NULL, NULL],
                [2908, 4, 'otras materias  de la Licenciatura en Ciencias Físicas', 's', NULL, NULL]
            ]
        );


        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-01713496-   -UBA-DMESA#FCEN', 1, 4, 2, 1, 416, 1, '2024-06-27 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-06-27', 1, '', ''],
                ['EX-2024-01714245-   -UBA-DMESA#FCEN', 1, 4, 3, 3, 416, 1, '2024-06-27 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-06-27', 1, '', ''],
                ['EX-2024-01714760-   -UBA-DMESA#FCEN', 1, 4, 4, 3, 416, 1, '2024-06-27 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-06-27', 1, '', ''],
                ['EX-2024-01715181-   -UBA-DMESA#FCEN', 1, 4, 4, 3, 416, 1, '2024-06-27 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-06-27', 1, '', ''],
                ['EX-2024-01786079-   -UBA-DMESA#FCEN', 1, 4, 4, 3, 456, 1, '2024-06-27 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-06-27', 1, '', ''],
                ['EX-2024-02343297-   -UBA-DMESA#FCEN', 2, 4, 4, 3, 311, 1, '2024-06-27 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-06-27', 1, '', ''],
                ['EX-2024-02357757-   -UBA-DMESA#FCEN', 2, 4, 4, 1, 418, 1, '2024-06-27 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-06-27', 1, '', ''],
                ['EX-2024-02357806-   -UBA-DMESA#FCEN', 2, 4, 3, 1, 418, 1, '2024-06-27 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-06-27', 1, '', ''],
            ]
        );
// 'EX-2024-01713496-   -UBA-DMESA#FCEN'

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1285,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01713496-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2831,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01713496-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2832,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01713496-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

// EX-2024-01714245-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1285,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714245-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2829,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714245-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2830,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714245-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2831,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714245-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2832,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714245-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2833,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714245-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2834,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714245-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2835,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714245-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2836,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714245-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2837,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714245-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2838,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714245-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

// EX-2024-01714760-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1285,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714760-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2829,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714760-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2830,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714760-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2831,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714760-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2832,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714760-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2833,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714760-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2834,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714760-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2835,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714760-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2836,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714760-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2837,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714760-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2838,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01714760-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

// 'EX-2024-01715181-   -UBA-DMESA#FCEN'

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1282,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01715181-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            604,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01715181-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1288,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01715181-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1296,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01715181-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2906,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01715181-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

//        EX-2024-01786079-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1274,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2808,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2603,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            55,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2554,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2605,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2777,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2650,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2796,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2789,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2774,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2797,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2549,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1553,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2798,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            965,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2790,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2652,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2656,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2791,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2792,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2772,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

// EX-2024-02343297-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            300,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02343297-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            301,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02343297-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

// EX-2024-02357757-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2694,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2705,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2690,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2691,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2692,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2693,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2696,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2697,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2706,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2707,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2708,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2709,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2710,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2711,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2712,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2713,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            898,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1539,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2907,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357757-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

//        EX-2024-02357806-   -UBA-DMESA#FCEN

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2694,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2695,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2704,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2705,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2690,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2691,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2692,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2693,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2696,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2697,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2706,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2707,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2708,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2709,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2710,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2711,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2712,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2713,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2907,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-02357806-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Roberto Argentino', 'ETCHENIQUE', '00000131',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ernesto José', 'MARCECA', '00000132',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Luciana','CAPECE' , '00000133',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Gabriela', 'LAGORIO' , '00000134',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ignacio Enrique', 'SÁNCHEZ MIGUEL' , '00000135',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000131',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01713496-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000132',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01714245-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000133',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01714760-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000134',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01715181-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000135',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";    
        Yii::$app->db->createCommand($sql)->execute();


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240628_030652_create_nuevos_concursos_20240701 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240628_030652_create_nuevos_concursos_20240701 cannot be reverted.\n";

        return false;
    }
    */
}
