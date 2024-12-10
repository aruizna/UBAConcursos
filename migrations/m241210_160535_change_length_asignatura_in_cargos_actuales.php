<?php

use yii\db\Migration;

/**
 * Class m241210_160535_change_length_asignatura_in_cargos_actuales
 */
class m241210_160535_change_length_asignatura_in_cargos_actuales extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('cargos_actuales', 'asignatura', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('cargos_actuales', 'asignatura', $this->string(45));
        echo "m241210_160535_change_length_asignatura_in_cargos_actuales cannot be reverted.\n";
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241210_160535_change_length_asignatura_in_cargos_actuales cannot be reverted.\n";

        return false;
    }
    */
}
