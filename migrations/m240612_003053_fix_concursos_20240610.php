<?php

use yii\db\Migration;

/**
 * Class m240612_003053_fix_concursos_20240610
 */
class m240612_003053_fix_concursos_20240610 extends Migration
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
            975,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07662383-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            253,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07662437-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            336,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07662478-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            871,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07662523-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2549,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07662590-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        // Ciencias Exactas y Naturales

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2563,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2564,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2576,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2903,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2904,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        // derecho

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            369,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05526426-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2523,
            7
            from concurso c
            where c.numero_expediente = 'EX-2023-05527253-   -UBA-DC#SA_FDER'
        ";        
    Yii::$app->db->createCommand($sql)->execute();
        // Farmacia y Bioquímica
        // 

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1271,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-02079984-   -UBA-DME#SSA_FFYB'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1271,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-02080046-   -UBA-DME#SSA_FFYB'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1271,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-2080125-   -UBA-DME#SSA_FFYB'
        ";        
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            510,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-02482997-   -UBA-DME#SSA_FFYB'
        ";        
        Yii::$app->db->createCommand($sql)->execute();        
        // Odontología

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2037,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01386943-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2037,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2066,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2905,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2019,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";    
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2022,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";   
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1061,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-06761836-   -UBA-DMEDA#FODON'
        ";   
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2869,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-06761836-   -UBA-DMEDA#FODON'
        ";   
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2880,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-06761836-   -UBA-DMEDA#FODON'
        ";   
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2881,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-06761836-   -UBA-DMEDA#FODON'
        ";   
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2869,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2012,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2054,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";          
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2876,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";   
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2064,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";   
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2065,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";  
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            update concurso
            set area = 'área docente: para el dictado de las siguientes materias: Tecnología de Alimentos I, Tecnología de Alimentos II, Tecnología de Alimentos III, Fundamentos de la Preservación de Alimentos I y Fundamentos de la Preservación de Alimentos II área de investigación:' 
            where numero_expediente = 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            update concurso
            set area = 'cátedra Química Analítica Instrumental' 
            where numero_expediente = 'EX-2024-02079984-   -UBA-DME#SSA_FFYB'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            update concurso
            set area = 'cátedra Fisicoquímica' 
            where numero_expediente = 'EX-2024-02080046-   -UBA-DME#SSA_FFYB'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            update concurso
            set area = 'cátedra Fisicoquímica' 
            where numero_expediente = 'EX-2024-2080125-   -UBA-DME#SSA_FFYB'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            update concurso
            set area = 'cátedra Física' 
            where numero_expediente = 'EX-2024-02482997-   -UBA-DME#SSA_FFYB'
        ";  
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            update concurso
            set area = 'cátedra Fisiología' 
            where numero_expediente = 'EX-2024-01386943-   -UBA-DMEDA#FODON'
        ";  
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            update concurso
            set area = 'cátedra Bioquímica General y Bucal' 
            where numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";  
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            update concurso
            set area = 'cátedra Ortodoncia' 
            where numero_expediente = 'EX-2023-06761836-   -UBA-DMEDA#FODON'
        ";  
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            update concurso
            set area = 'cátedra Medicina Interna' 
            where numero_expediente = 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";  
        Yii::$app->db->createCommand($sql)->execute();








    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240612_003053_fix_concursos_20240610 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240612_003053_fix_concursos_20240610 cannot be reverted.\n";

        return false;
    }
    */
}
