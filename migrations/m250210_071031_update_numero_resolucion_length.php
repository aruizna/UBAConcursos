<?php

use yii\db\Migration;

/**
 * Class m250210_071031_update_numero_resolucion_length
 */
class m250210_071031_update_numero_resolucion_length extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('asignatura', 'numero_resolucion', $this->string(50)->null());
    }

    public function safeDown()
    {
        $this->alterColumn('asignatura', 'numero_resolucion', $this->string(30)->null());
    }


}
