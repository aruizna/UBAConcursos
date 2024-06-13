<?php

use yii\db\Migration;

/**
 * Class m240612_151437_fix_areas_concursos
 */
class m240612_151437_fix_areas_concursos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $sql = "
            UPDATE concurso SET id_area_departamento = NULL WHERE numero_expediente LIKE 'EX-2024-01386943-   -UBA-DMEDA#FODON'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            UPDATE concurso SET id_area_departamento = NULL WHERE numero_expediente LIKE 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";  
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            UPDATE concurso SET id_area_departamento = NULL WHERE numero_expediente LIKE 'EX-2023-06761836-   -UBA-DMEDA#FODON'
        ";  
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
           UPDATE concurso SET id_area_departamento = NULL WHERE numero_expediente LIKE 'EX-2024-00938109-   -UBA-DMEDA#FODON'
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        // *****************

        $sql = "
            delete from concurso_asignatura WHERE id_concurso = '7359' and id_Asignatura = 1271
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        
        $sql = "
            delete from concurso_asignatura WHERE id_concurso = '7360' and id_Asignatura = 1271
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            delete from concurso_asignatura WHERE id_concurso = '7363' and id_Asignatura = 2037
        ";  
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            UPDATE concurso SET comentario = 'y/o aquellas materias que oportunamente se incorporen al plan de estudios de la Licenciatura en Ciencias Químicas o la Licenciatura en Ciencia y Tecnología de los Alimentos o materias que la autoridad departamental dispusiese' WHERE numero_expediente LIKE 'EX-2023-03437461-   -UBA-DMESA#FCEN'
        ";  
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            INSERT INTO concurso_asignatura 
            SELECT  
            c.id_concurso,
            530,
            8
            FROM concurso c
            WHERE c.numero_expediente = 'EX-2024-02080046-   -UBA-DME#SSA_FFYB'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            INSERT INTO concurso_asignatura 
            SELECT  
            c.id_concurso,
            530,
            8
            FROM concurso c
            WHERE c.numero_expediente = 'EX-2024-2080125-   -UBA-DME#SSA_FFYB'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            INSERT INTO concurso_asignatura 
            SELECT  
            c.id_concurso,
            1030,
            12
            FROM concurso c
            WHERE c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            INSERT INTO concurso_asignatura 
            SELECT  
            c.id_concurso,
            2021,
            12
            FROM concurso c
            WHERE c.numero_expediente = 'EX-2024-01387347-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();






    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240612_151437_fix_areas_concursos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240612_151437_fix_areas_concursos cannot be reverted.\n";

        return false;
    }
    */
}
