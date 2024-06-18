<?php

use yii\db\Migration;

/**
 * Class m240615_134953_fix_cantidad_de_puestos
 */
class m240615_134953_fix_cantidad_de_puestos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "
            UPDATE concurso SET cantidad_de_puestos = 13 WHERE id_concurso = 7356
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240615_134953_fix_cantidad_de_puestos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240615_134953_fix_cantidad_de_puestos cannot be reverted.\n";

        return false;
    }
    */
}
