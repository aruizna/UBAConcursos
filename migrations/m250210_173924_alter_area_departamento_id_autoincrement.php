<?php

use yii\db\Migration;

/**
 * Class m250210_173924_alter_area_departamento_id_autoincrement
 */
class m250210_173924_alter_area_departamento_id_autoincrement extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('area_departamento', 'id_autoincrement', $this->primaryKey());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('area_departamento', 'id_autoincrement');
    }
}
