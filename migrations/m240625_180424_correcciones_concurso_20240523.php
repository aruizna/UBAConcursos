<?php

use yii\db\Migration;

/**
 * Class m240625_180424_correcciones_concurso_20240523
 */
class m240625_180424_correcciones_concurso_20240523 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "
            DELETE FROM concurso_asignatura WHERE id_concurso = 7349 AND id_asignatura = 2017 AND id_facultad = 12
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            INSERT INTO concurso_asignatura (id_concurso, id_asignatura, id_facultad) VALUES (7349, 2016, 12)
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            INSERT INTO concurso_asignatura (id_concurso, id_asignatura, id_facultad) VALUES (7349, 2017, 12)
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            UPDATE concurso_asignatura SET id_asignatura = 738 WHERE id_concurso = 7329 and id_asignatura = 1495 and id_facultad = 3
        ";
        Yii::$app->db->createCommand($sql)->execute();

         

            
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240625_180424_correcciones_concurso_20240523 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240625_180424_correcciones_concurso_20240523 cannot be reverted.\n";

        return false;
    }
    */
}
