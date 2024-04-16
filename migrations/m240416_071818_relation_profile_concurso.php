<?php

use yii\db\Migration;

/**
 * Class m240416_071818_relation_profile_concurso
 */
class m240416_071818_relation_profile_concurso extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000012',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05547205-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000013',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05547498-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000014',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05558800-   -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000029',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07507148-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000030',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07507148-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000031',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07507148-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000032',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07507169-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000033',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07507169-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000034',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07507169-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000036',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07507197-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000037',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07507197-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000038',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07507197-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000039',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07507197-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000041',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-05552406-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000042',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-05552982-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000043',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-05553009-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000044',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-02540788-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000045',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-04171592-   -UBA-DME#SAHDU_FSOC'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000015',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526193-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000016',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526785-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000017',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-05680517-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000046',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526529-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000047',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526676-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000048',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05527142-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000049',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-04958462-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000018',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-01613440-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000019',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2021-02823449-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000020',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05284595-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000040',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2021-02823430-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000050',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-01667745-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000051',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2021-02705065-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000021',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05122004-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000022',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05209089-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000023',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05205171-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000024',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05637956-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000025',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05637988-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000026',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05887652-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000027',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05887666-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000052',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05588381-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000028',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05799896-   -UBA-DDMEA#CBC'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000053',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-04865618-   -UBA-DDMEA#CBC'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000054',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05795413-   -UBA-DDMEA#CBC'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000055',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
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
        echo "m240416_071818_relation_profile_concurso cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240416_071818_relation_profile_concurso cannot be reverted.\n";

        return false;
    }
    */
}
