<?php

use yii\db\Migration;

/**
 * Class m240604_152700_fix_docente
 */
class m240604_152700_fix_docente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('profile',['apellido'=>'PONCE DAWSON','nombre'=>'Silvina Martha'],['numero_documento'=>'00000081']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240604_152700_fix_docente cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240604_152700_fix_docente cannot be reverted.\n";

        return false;
    }
    */
}
