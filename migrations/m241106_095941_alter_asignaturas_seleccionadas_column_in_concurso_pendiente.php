<?php

use yii\db\Migration;

/**
 * Class m241106_095941_alter_asignaturas_seleccionadas_column_in_concurso_pendiente
 */
class m241106_095941_alter_asignaturas_seleccionadas_column_in_concurso_pendiente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%concurso_pendiente}}', 'asignaturas_seleccionadas', $this->text()->null()->comment('Asignaturas seleccionadas en formato JSON'));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%concurso_pendiente}}', 'asignaturas_seleccionadas');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241106_095941_alter_asignaturas_seleccionadas_column_in_concurso_pendiente cannot be reverted.\n";

        return false;
    }
    */
}
