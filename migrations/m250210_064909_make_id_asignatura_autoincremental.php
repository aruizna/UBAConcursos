<?php

use yii\db\Migration;

/**
 * Class m250210_064909_make_id_asignatura_autoincremental
 */
class m250210_064909_make_id_asignatura_autoincremental extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $maxId = $this->db->createCommand("SELECT MAX(id_asignatura) FROM asignatura")->queryScalar();

        $this->execute("
            SET @new_id = $maxId;
            
            UPDATE asignatura AS t1
            JOIN (
                SELECT id_asignatura, ROW_NUMBER() OVER (PARTITION BY id_asignatura ORDER BY id_asignatura) AS row_num
                FROM asignatura
            ) AS t2
            ON t1.id_asignatura = t2.id_asignatura
            SET t1.id_asignatura = (@new_id := @new_id + 1)
            WHERE t2.row_num > 1;
        ");

        $this->execute("
            ALTER TABLE asignatura 
            MODIFY id_asignatura INT NOT NULL AUTO_INCREMENT PRIMARY KEY;
        ");
    }

    public function safeDown()
    {
        echo "No se puede revertir esta migración completamente.\n";
        return false;
    }

}
