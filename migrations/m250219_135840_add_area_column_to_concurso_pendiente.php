<?php

use yii\db\Migration;

/**
 * Class m250219_135840_add_area_column_to_concurso_pendiente
 */
class m250219_135840_add_area_column_to_concurso_pendiente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('concurso_pendiente', 'area', $this->string(500)->null()->after('id_area_departamento'));
    }

    public function safeDown()
    {
        $this->dropColumn('concurso_pendiente', 'area');
    }
}