<?php

use yii\db\Migration;

/**
 * Class m240318_202456_add_cargos_to_profile_id
 */
class m240318_202456_add_cargos_to_profile_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('cargos_actuales', 'profile_id', $this->integer());
        // Agregar una clave foránea
        $this->addForeignKey(
            'fk-cargos_actuales-profile_id',
            'cargos_actuales',
            'profile_id',
            'profile',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
 

        
    }

}
