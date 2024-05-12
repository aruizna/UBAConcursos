<?php

use yii\db\Migration;

/**
 * Class m240512_202651_fix_concursos_nuevos
 */
class m240512_202651_fix_concursos_nuevos extends Migration
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
            7,
            3
            from concurso c
            where c.numero_expediente = 'EX-2022-06200751-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1098,
            3
            from concurso c
            where c.numero_expediente = 'EX-2022-07090174-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1488,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05526002-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            368,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05526914-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1360,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2188,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2847,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2848,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2185,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2321,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2849,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2671,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404582-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            44,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404582-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2889,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404582-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2890,
            10
            from concurso c
            where c.numero_expediente = 'EX-2021-04404582-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000058',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-06200751-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000059',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-07090174-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000060',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-07090174-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000061',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-07090174-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000062',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-07090174-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000073',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526914-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000074',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2021-04404562-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000075',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2021-04404582-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240512_202651_fix_concursos_nuevos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240512_202651_fix_concursos_nuevos cannot be reverted.\n";

        return false;
    }
    */
}
