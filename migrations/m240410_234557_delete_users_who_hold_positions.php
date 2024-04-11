<?php

use yii\db\Migration;

/**
 * Class m240410_234557_delete_users_who_hold_positions
 */
class m240410_234557_delete_users_who_hold_positions extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "DELETE FROM user WHERE id IN (
            SELECT * FROM (
                SELECT u.id
                FROM user AS u
                INNER JOIN profile AS p ON u.id = p.user_id
                INNER JOIN persona_concurso_renovacion AS pcr ON p.numero_documento = pcr.numero_documento
            ) AS subquery
        )";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240410_234557_delete_users_who_hold_positions cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240410_234557_delete_users_who_hold_positions cannot be reverted.\n";

        return false;
    }
    */
}
