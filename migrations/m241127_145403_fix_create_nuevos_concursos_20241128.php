<?php

use yii\db\Migration;

/**
 * Class m241127_145403_fix_create_nuevos_concursos_20241128
 */
class m241127_145403_fix_create_nuevos_concursos_20241128 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {


        # EX-2024-03769751-   -UBA-DME#FCE
        # --------------------------------
        # alta: Joaquín Oscar PASTOR y Agostina MYRONEC 

        $sql = "
            DELETE FROM persona_concurso_renovacion 
            WHERE id_concurso IN (SELECT id_concurso FROM concurso WHERE numero_expediente = 'EX-2024-03769751-   -UBA-DME#FCE')
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000314',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03769751-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000315',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03769751-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000316',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03769751-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 


        # EX-2024-03988252-   -UBA-DME#FCE
        #---------------------------------
        # alta Hernán Miguel D'AGOSTINO, Angel Gustavo GRABINA, Raúl Alberto MUÑOZ y Gustavo GONZÁLEZ
        # baja Hernán Diego SERRANO

        $sql = "
            DELETE FROM persona_concurso_renovacion 
            WHERE id_concurso IN (SELECT id_concurso FROM concurso WHERE numero_expediente = 'EX-2024-03988252-   -UBA-DME#FCE')
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000317',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03988252-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000318',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03988252-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000319',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03988252-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000320',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03988252-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 


        # EX-2024-02376056-   -UBA-DIMEDA#SA_FI
        # -------------------------------------
        # alta Juan Pablo MEDINA
        # baja Hernán Diego SERRANO

        $sql = "
            DELETE FROM persona_concurso_renovacion 
            WHERE id_concurso IN (SELECT id_concurso FROM concurso WHERE numero_expediente = 'EX-2024-02376056-   -UBA-DIMEDA#SA_FI')
        ";   
        Yii::$app->db->createCommand($sql)->execute();         

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000335',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02376056-   -UBA-DIMEDA#SA_FI'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
        # -------------------------------------
        # alta Marcelo Fabián PIVA
        # Baja Hernán Diego SERRANO

        $sql = "
            DELETE FROM persona_concurso_renovacion 
            WHERE id_concurso IN (SELECT id_concurso FROM concurso WHERE numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI')
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000343',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 


        # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
        # -------------------------------------
        # alta Josefina María SILVEYRA
        # baja Hernán Diego SERRANO

        $sql = "
            DELETE FROM persona_concurso_renovacion 
            WHERE id_concurso IN (SELECT id_concurso FROM concurso WHERE numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI')
        ";   
        Yii::$app->db->createCommand($sql)->execute();         

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000344',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241127_145403_fix_create_nuevos_concursos_20241128 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241127_145403_fix_create_nuevos_concursos_20241128 cannot be reverted.\n";

        return false;
    }
    */
}
