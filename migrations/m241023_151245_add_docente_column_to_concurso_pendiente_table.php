<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%concurso_pendiente}}`.
 */
class m241023_151245_add_docente_column_to_concurso_pendiente_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%concurso_pendiente}}', 'docente', $this->string()->comment(''));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%concurso_pendiente}}', 'docente');
    }
}