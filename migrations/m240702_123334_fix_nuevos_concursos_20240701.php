<?php

use yii\db\Migration;

/**
 * Class m240702_123334_fix_nuevos_concursos_20240701
 */
class m240702_123334_fix_nuevos_concursos_20240701 extends Migration
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
                [457, 1, 'Departamento de Biología Aplicada y Alimentos', 1],
                [458, 10, 'Departamento de Energía', 1],
                [459, 13, 'carrera de Licenciatura en Musicoterapia', 1],
            ]
        );



        $this->batchInsert(
            "asignatura",
            ["id_asignatura", "id_facultad", "descripcion_asignatura", "habilitada", "numero_resolucion", "observaciones"],
            [
                [2909, 1, 'Agroecosistemas - carreras de Licenciatura en Ciencias Ambientales y de Profesorado de Enseñanza Secundaria y Superior en Ciencias Ambientales', 's', NULL, NULL],

                [2910, 1, 'Biomoléculas - carreras de Agronomía y de Licenciatura en Ciencias Ambientales', 's', NULL, NULL],
                [2911, 1, 'Introducción a las Biomoléculas - carreras de Tecnicatura en Jardinería', 's', NULL, NULL],
                [2912, 1, 'de Tecnicatura en Producción Vegetal Orgánica y de Tecnicatura en Floricultura y Biomoléculas y Metabolismo Vegetal - carreras de Tecnicatura Universitaria en Jardinería', 's', NULL, NULL],
                [2913, 1, 'de Tecnicatura Universitaria en Producción Vegetal Orgánica y de Tecnicatura Universitaria en Producción Florihortícola', 's', NULL, NULL],
                [2914, 1, 'Floricultura - carrera de Agronomía', 's', NULL, NULL],
                [2915, 1, 'Producción de Flores y Verdes de Corte I - carrera de Tecnicatura en Floriculturaa', 's', NULL, NULL],
                [2916, 1, 'Producción de Flores y Verdes de Corte II - carrera de Tecnicatura en Floriculturaa', 's', NULL, NULL],
                [2917, 1, 'Riego Aplicado a la Floricultura', 's', NULL, NULL],
                [2918, 1, 'Trabajo Final - carrera de Tecnicatura en Floricultura', 's', NULL, NULL],
                [2919, 1, 'Producción de Especies Florícolas - carrera de Tecnicatura Universitaria en Producción Florihortícola', 's', NULL, NULL],
                [2920, 1, 'Riego Aplicado a la Florihorticultura - carrera de Tecnicatura Universitaria en Producción Florihortícola', 's', NULL, NULL],
                [2921, 1, 'Gestión de Cadenas Agroalimentarias - carrera de Licenciatura en Gestión de Agroalimentos', 's', NULL, NULL],
                [2922, 1, 'Gestión Competitiva de Cadenas Agroalimentarias - carrera de Agronomía', 's', NULL, NULL],
                [2923, 1, 'Fruticultura - carrera de Agronomía', 's', NULL, NULL],
                [2924, 1, 'Análisis de Riesgo Ambiental - carrera de Licenciatura en Ciencias Ambientales', 's', NULL, NULL],
                [2925, 1, 'Modelos de Simulación - carrera de Licenciatura en Ciencias Ambientales', 's', NULL, NULL],
                [2926, 1, 'Gestión y Conservación de los Recursos Naturales - carrera de Licenciatura en Ciencias Ambientales', 's', NULL, NULL],
                [2927, 1, 'Gestión y Conservación de los Recursos Naturales - carrera de Profesorado de Enseñanza Secundaria y Superior en Ciencias Ambientales', 's', NULL, NULL],
                [2928, 1, 'Botánica Morfológica - carrera de Agronomía', 's', NULL, NULL],
                [2929, 1, 'Botánica - carreras de Licenciatura en Ciencias Ambientales y de Profesorado de Enseñanza Secundaria y Superior en Ciencias Ambientales', 's', NULL, NULL],
                [2930, 1, 'Botánica Morfológica - carreras de Tecnicatura en Jardinería de Tecnicatura en Producción Vegetal Orgánica y de Tecnicatura en Floricultura', 's', NULL, NULL],
                [2931, 1, 'Botánica - carreras de Tecnicatura Universitaria en Jardinería, de Tecnicatura Universitaria en Producción Vegetal Orgánica y de Tecnicatura Universitaria en Producción Florihortícola', 's', NULL, NULL],
                
                [2932, 8, 'Matemática y Bioestadística', 's', NULL, NULL],

                [2933, 10, 'Geología de los Hidrocarburos', 's', NULL, NULL],
                [2934, 10, 'Electromagnetismo Aplicado', 's', NULL, NULL],
                [2935, 10, 'Compatibilidad Electromagnética', 's', NULL, NULL],
                [2936, 10, 'Electrónica de Alta Frecuencia', 's', NULL, NULL],
                [2937, 10, 'Instrumentos Electrónicos y Metrología', 's', NULL, NULL],
                [2938, 10, 'Estática', 's', NULL, NULL],
                [2939, 10, '64-11 Estabilidad I B', 's', NULL, NULL],
                [2940, 10, '64-11 84-03 Estabilidad II', 's', NULL, NULL],
                [2941, 10, '64-12 Estabilidad II B', 's', NULL, NULL],

                [2942, 4, 'Anatomía', 's', NULL, NULL],
            ]
        );


        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-00007079-   -UBA-DMESA#SSA_FAGRO', 4,  1, 4, 3, 165, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'cátedra de Fertilidad y Fertilizantes', ''],
                ['EX-2024-00007358-   -UBA-DMESA#SSA_FAGRO', 4,  1, 4, 1, 457, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'cátedra de Química de Biomoléculas', ''],
                ['EX-2024-00008305-   -UBA-DMESA#SSA_FAGRO', 4,  1, 4, 3,   1, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'cátedra de Floricultura', ''],
                ['EX-2024-00010012-   -UBA-DMESA#SSA_FAGRO', 4,  1, 4, 1, 428, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'cátedra de Sistemas Agroalimentarios', ''],
                ['EX-2024-00010046-   -UBA-DMESA#SSA_FAGRO', 4,  1, 4, 3,   1, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'cátedra de Fruticultura', ''],
                ['EX-2024-00010158-   -UBA-DMESA#SSA_FAGRO', 4,  1, 4, 1, 153, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, '', ''],
                ['EX-2024-00012302-   -UBA-DMESA#SSA_FAGRO', 1,  1, 4, 1, 153, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, '', ''],
                ['EX-2023-07291942-   -UBA-DMESA#SSA_FAGRO', 4,  1, 3, 3, 111, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'cátedra de Botánica General', ''],
                ['EX-2023-07311003-   -UBA-DMESA#SSA_FAGRO', 4,  1, 3, 3, 111, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'cátedra de Botánica General', ''],

                ['EX-2024-02483056-   -UBA-DME#SSA_FFYB', 4,  8, 4, 3, 12,  1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'cátedra Matemática', ''],

                ['EX-2022-05234370-   -UBA-DIMEDA#SA_FI', 4, 10, 4, 3, 458, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'área de docencia: Ciencia y Tecnología de la Tierra aplicada a los Hidrocarburos área de investigación: Estudios técnicos y mecánicos de formación de cuencas y sus fluidos, para la prospección de recursos hidrocarburíferos y geotérmicos destinados a aplicaciones en energía y secuestro y almacenamiento de CO2', ''],
                ['EX-2022-05361585-   -UBA-DIMEDA#SA_FI', 1, 10, 4, 3, 429, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'área de docencia: Comunicaciones y Redes área de investigación: Propagación. Sistemas Irradiantes. Ingeniería Electromagnética', ''],
                ['EX-2022-05526067-   -UBA-DIMEDA#SA_FI', 4, 10, 4, 1, 104, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'área de docencia: Mecánica del Sólido I', ''],

                ['EX-2024-02725516-   -UBA-DMEA#FMED', 2, 11, 3, 1, 121, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, '', ''],
                ['EX-2024-02725652-   -UBA-DMEA#FMED', 2, 11, 3, 1, 121, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, '', ''],
                ['EX-2024-02725760-   -UBA-DMEA#FMED', 2, 11, 4, 1, 449, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, '', ''],

                ['EX-2024-02387298-   -UBA-DMRD#SHA_FPSI', 2, 13, 4, 1, 459, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, '', ''],
                ['EX-2024-03029135-   -UBA-DDMEA#CBC', 2, 75, 4, 1, null, 5, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'área de Matemática', ''],
                ['EX-2024-03029173-   -UBA-DDMEA#CBC', 2, 75, 2, 1, null, 1, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'área de Matemática', ''],
                ['EX-2024-03030215-   -UBA-DDMEA#CBC', 2, 75, 4, 1, null, 4, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'área de Matemática', ''],
                ['EX-2024-03032226-   -UBA-DDMEA#CBC', 2, 75, 4, 1, null, 5, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'área de Matemática', ''],
                ['EX-2024-03032270-   -UBA-DDMEA#CBC', 2, 75, 4, 1, null, 5, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'área de Metodología de las Ciencias Sociales', ''],
                ['EX-2024-03032316-   -UBA-DDMEA#CBC', 2, 75, 4, 1, null, 5, '2024-07-02 09:00:00', '2024-07-30 18:00:00', '09:00', '18:00', '2024-07-01', 1, 'área de Economía', ''],
            ]
        );

        // EX-2024-00007079-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2909,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00007079-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();





        // EX-2024-00007358-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2910,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00007358-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2911,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00007358-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2912,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00007358-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2913,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00007358-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        // EX-2024-00008305-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2914,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00008305-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2915,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00008305-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
           2916,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00008305-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2917,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00008305-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2918,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00008305-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
           2919,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00008305-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2920,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00008305-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        // EX-2024-00010012-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2921,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00010012-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2922,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00010012-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-00010046-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2923,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00010046-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-00010158-   -UBA-DMESA#SSA_FAGRO

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2924,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00010158-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2925,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00010158-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        // EX-2024-00012302-   -UBA-DMESA#SSA_FAGRO


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2926,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00012302-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2927,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-00012302-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        # EX-2023-07291942-   -UBA-DMESA#SSA_FAGRO
        ##########################################

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2928,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07291942-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2929,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07291942-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2930,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07291942-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2931,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07291942-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2023-07311003-   -UBA-DMESA#SSA_FAGRO
        ##########################################

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2928,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07311003-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2929,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07311003-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2930,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07311003-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2931,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-07311003-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        # 
        # EX-2024-02483056-   -UBA-DME#SSA_FFYB

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2932,
            1
            from concurso c
            where c.numero_expediente = 'EX-2024-02483056-   -UBA-DME#SSA_FFYB'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2022-05234370-   -UBA-DIMEDA#SA_FI

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2933,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-05234370-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2022-05361585-   -UBA-DIMEDA#SA_FI

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2934,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-05361585-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2935,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-05361585-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2249,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-05361585-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2936,
            1
            from concurso c
            where c.numero_expediente = 'EX-2022-05361585-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2937,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-05361585-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2022-05526067-   -UBA-DIMEDA#SA_FI

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2938,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-05526067-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2939,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-05526067-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2940,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-05526067-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2941,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-05526067-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2638,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-05526067-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-02725516-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            110,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-02725516-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-02725652-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1029,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-02725652-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-02725760-   -UBA-DMEA#FMED

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            993,
            11
            from concurso c
            where c.numero_expediente = 'EX-2024-02725760-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-02387298-   -UBA-DMRD#SHA_FPSI

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1264,
            13
            from concurso c
            where c.numero_expediente = 'EX-2024-02387298-   -UBA-DMRD#SHA_FPSI'
        ";
        Yii::$app->db->createCommand($sql)->execute();







        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Patricia Lilia', 'FERNÁNDEZ', '00000122',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Paula Virginia', 'FERNÁNDEZ', '00000123',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gabriel Antonio','LORENZO' , '00000124',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Ignacio', 'PINA' , '00000125',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Víctor Hugo', 'ZIEGLER' , '00000126',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcos Alexis', 'TEXEIRA GONZÁLEZ', '00000127',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Santiago Ramón','VERÓN' , '00000128',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Pablo', 'TORRETTA' , '00000129',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrea Susana', 'VEGA' , '00000130',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María José', 'CASTRO', '00000136',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Silvia Patricia','BARREDO' , '00000137',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Walter Gustavo', 'TORREFANOTTA' , '00000138',0)";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alfredo Alberto', 'CORRAL' , '00000139',0)";
        Yii::$app->db->createCommand($sql)->execute();



        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000122',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00007079-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000123',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00007358-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000124',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00008305-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000125',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00010012-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000126',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00010046-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000127',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00010158-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000128',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00012302-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000129',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07291942-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000130',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07311003-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000136',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02483056-   -UBA-DME#SSA_FFYB'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000137',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-05234370-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000138',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-05361585-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000139',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-05526067-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();



        # CORRECCIONES:

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2764,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2908,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-01786079-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $this->update("concurso", ["id_tipo_concurso" => 4], ["numero_expediente" => "EX-2024-02079984-   -UBA-DME#SSA_FFYB"]);


        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-02 09:00:00","fecha_publicacion"=>"2024-07-01","area" => "área Química Analítica"], ["numero_expediente" => "EX-2024-01713496-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-02 09:00:00","fecha_publicacion"=>"2024-07-01","area" => "área Química Inorgánica, Analítica y Química Física"], ["numero_expediente" => "EX-2024-01714245-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-02 09:00:00","fecha_publicacion"=>"2024-07-01","area" => "área Química Inorgánica, Analítica y Química Física"], ["numero_expediente" => "EX-2024-01714760-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-02 09:00:00","fecha_publicacion"=>"2024-07-01","area" => "área Química Ambiental  área de investigación: Química Ambiental"], ["numero_expediente" => "EX-2024-01715181-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-02 09:00:00","fecha_publicacion"=>"2024-07-01","area" => "área Biología Molecular y Bioquímica Analítica y Estructural, Química Fisiológica, Toxicológica y Biomédica y Microbiología y Virología"], ["numero_expediente" => "EX-2024-01786079-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-02 09:00:00","fecha_publicacion"=>"2024-07-01","area" => "área Didáctica de la Biología área de investigación: Didáctica de la Biología"], ["numero_expediente" => "EX-2024-02343297-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-02 09:00:00","fecha_publicacion"=>"2024-07-01","area" => "área docente: Física Estadística / Dinámica no Lineal / Biofísica / Materia Blanda / Nuclear / Partículas / Campos / Gravitación / Cosmología"], ["numero_expediente" => "EX-2024-02357757-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion"=>"2024-07-02 09:00:00","fecha_publicacion"=>"2024-07-01","area" => "área Física Aplicada"], ["numero_expediente" => "EX-2024-02357806-   -UBA-DMESA#FCEN"]);

        $this->update("asignatura", ["descripcion_asignatura"=>"Anatomía"],["id_asignatura"=>2908]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240702_123334_fix_nuevos_concursos_20240701 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240702_123334_fix_nuevos_concursos_20240701 cannot be reverted.\n";

        return false;
    }
    */
}
