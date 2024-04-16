<?php

use yii\db\Migration;

/**
 * Class m240416_062618_relation_asignatures_concursos
 */
class m240416_062618_relation_asignatures_concursos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2841,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-05547205-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            926,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-05547205-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1420,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-05547498-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2598,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-05547498-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2842,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-05558800-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2843,
            1
            from concurso c
            where c.numero_expediente = 'EX-2023-05558800-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2559,
            2
            from concurso c
            where c.numero_expediente = 'EX-2023-05130655-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2560,
            2
            from concurso c
            where c.numero_expediente = 'EX-2023-05130655-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2561,
            2
            from concurso c
            where c.numero_expediente = 'EX-2023-05130655-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2562,
            2
            from concurso c
            where c.numero_expediente = 'EX-2023-05130655-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2563,
            2
            from concurso c
            where c.numero_expediente = 'EX-2023-05130655-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            773,
            2
            from concurso c
            where c.numero_expediente = 'EX-2023-07096619-   -UBA-DME#SH_FADU'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1511,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07507148-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1308,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07507169-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1511,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07507197-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            746,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-05233121-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2799,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-05233121-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2800,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-05233121-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2334,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-05233121-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2636,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-05233121-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2635,
            5
            from concurso c
            where c.numero_expediente = 'EX-2022-05552406-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2640,
            5
            from concurso c
            where c.numero_expediente = 'EX-2022-05552982-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2641,
            5
            from concurso c
            where c.numero_expediente = 'EX-2022-05553009-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2631,
            5
            from concurso c
            where c.numero_expediente = 'EX-2023-02540788-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1496,
            5
            from concurso c
            where c.numero_expediente = 'EX-2023-04171592-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            514,
            6
            from concurso c
            where c.numero_expediente = 'EX-2024-00408613-   -UBA-DMESA#SG_FVET'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            490,
            6
            from concurso c
            where c.numero_expediente = 'EX-2024-00408833-   -UBA-DMESA#SG_FVET'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1488,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05526193-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            247,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05526785-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2501,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05527051-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            280,
            7
            from concurso c
            where c.numero_expediente = 'EX-2022-05680517-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            282,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05526529-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2593,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05526676-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1946,
            9
            from concurso c
            where c.numero_expediente = 'EX-2022-01518335-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            616,
            9
            from concurso c
            where c.numero_expediente = 'EX-2022-02024410-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            857,
            9
            from concurso c
            where c.numero_expediente = 'EX-2022-02899041-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2844,
            9
            from concurso c
            where c.numero_expediente = 'EX-2022-02925712-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2845,
            9
            from concurso c
            where c.numero_expediente = 'EX-2022-02925546-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1389,
            9
            from concurso c
            where c.numero_expediente = 'EX-2022-02925342-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2846,
            9
            from concurso c
            where c.numero_expediente = 'EX-2022-05767989-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            502,
            9
            from concurso c
            where c.numero_expediente = 'EX-2023-05008819-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2519,
            9
            from concurso c
            where c.numero_expediente = 'EX-2023-05988144-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1931,
            9
            from concurso c
            where c.numero_expediente = 'EX-2023-04958462-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2581,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-01613440-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2847,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02823449-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2848,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02823449-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2185,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02823449-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2321,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02823449-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2849,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02823449-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2212,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284595-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2850,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284595-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2851,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284595-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2852,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284595-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2853,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284595-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2326,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284595-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2854,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284595-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2855,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-05284595-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2856,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02823430-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2857,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02823430-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2858,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02823430-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2127,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02823430-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2859,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02823430-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1955,
            10
            from concurso c
            where c.numero_expediente = 'EX-2023-01667745-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2860,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02705065-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2861,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02705065-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2862,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02705065-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2863,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02705065-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2864,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02705065-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2865,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02705065-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2866,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-02705065-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2867,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05122004-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2017,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05122004-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2048,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05122004-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2019,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05122004-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2049,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05122004-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2050,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05122004-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2868,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05122004-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2035,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05122004-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2062,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05122004-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            210,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05209089-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1030,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05209089-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2869,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05209089-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2022,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05209089-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            210,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05205171-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1030,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05205171-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2869,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05205171-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2022,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05205171-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2870,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637956-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2871,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637956-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2872,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637956-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2873,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637956-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2874,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637956-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2875,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637956-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2876,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637956-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2035,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637956-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2877,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637956-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2870,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637988-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2878,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637988-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2873,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637988-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2874,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637988-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2875,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637988-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2876,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637988-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2035,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637988-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2877,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05637988-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2870,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887652-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2878,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887652-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2873,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887652-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2874,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887652-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2875,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887652-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2876,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887652-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2035,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887652-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2877,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887652-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2870,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887666-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2878,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887666-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2873,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887666-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2874,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887666-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2875,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887666-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2876,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887666-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2035,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887666-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2877,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05887666-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2879,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05588381-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2880,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05588381-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2881,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-05588381-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1354,
            75
            from concurso c
            where c.numero_expediente = 'EX-2023-05799896-   -UBA-DDMEA#CBC'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            182,
            75
            from concurso c
            where c.numero_expediente = 'EX-2023-04865618-   -UBA-DDMEA#CBC'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2882,
            75
            from concurso c
            where c.numero_expediente = 'EX-2023-05795413-   -UBA-DDMEA#CBC'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            182,
            75
            from concurso c
            where c.numero_expediente = 'EX-2023-05795443-   -UBA-DDMEA#CBC'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240416_062618_relation_asignatures_concursos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240416_062618_relation_asignatures_concursos cannot be reverted.\n";

        return false;
    }
    */
}
