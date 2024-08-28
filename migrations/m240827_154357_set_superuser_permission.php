<?php

use yii\db\Migration;

/**
 * Class m240827_154357_set_superuser_permission
 */
class m240827_154357_set_superuser_permission extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Asignar el permiso de superusuario (is_superuser = 1) al usuario con el ID 91
        $this->update('user', ['is_superuser' => 1], ['id' => 91]);
    }

    /**.
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Revertir el permiso de superusuario (is_superuser = 0) al usuario con el ID 91
        $this->update('user', ['is_superuser' => 0], ['id' => 91]);
    }
}