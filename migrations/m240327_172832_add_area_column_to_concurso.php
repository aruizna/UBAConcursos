<?php

use yii\db\Migration;

/**
 * Class m240327_172832_add_area_column_to_concurso
 */
class m240327_172832_add_area_column_to_concurso extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('concurso', 'area', $this->text(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240327_172832_add_area_column_to_concurso cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240327_172832_add_area_column_to_concurso cannot be reverted.\n";

        return false;
    }
    */
}
