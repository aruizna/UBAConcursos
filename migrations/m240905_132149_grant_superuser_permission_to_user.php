<?php

use yii\db\Migration;

/**
 * Class m240905_132149_grant_superuser_permission_to_user
 */
class m240905_132149_grant_superuser_permission_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        
        $this->update('user', ['is_superuser' => 1], ['username' => 33036641]);
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->update('user', ['is_superuser' => 0], ['username' => 33036641]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240905_132149_grant_superuser_permission_to_user cannot be reverted.\n";

        return false;
    }
    */
}
