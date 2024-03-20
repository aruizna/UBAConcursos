<?php

use yii\db\Migration;

/**
 * Class m240311_152448_add_concurso_id_to_profile_table
 */
class m240311_152448_add_concurso_id_to_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {


        $this->dropForeignKey('fk_profile_user', 'profile');
        $this->dropPrimaryKey("PRIMARY", "profile");

        $this->addColumn('profile', 'id', $this->integer());
        $this->update('profile', ['id' => new \yii\db\Expression('user_id')]);
        $this->addPrimaryKey('id', 'profile', 'id');
        // Set 'id' as auto-incremented
        $this->alterColumn('profile', 'id', $this->integer()->notNull()->append('AUTO_INCREMENT'));

 
        $this->addColumn('profile', 'concurso_id', $this->integer());
        // Agregar una clave foránea
        $this->addForeignKey(
            'fk-profile-concurso_id',
            'profile',
            'concurso_id',
            'concurso',
            'id_concurso',
            'CASCADE'
        );
        
        $this->dropIndex("user_id_UNIQUE", "profile");
        $this->createIndex(
            'idx-profile-user_id',
            'profile',
            ['user_id'],
            false
        );
        // Crear una clave única compuesta para user_id y concurso_id
        $this->createIndex(
            'idx-profile-user_id-concurso_id',
            'profile',
            ['user_id', 'concurso_id'],
            true
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Eliminar la clave foránea primero
        $this->dropForeignKey('fk-profile-concurso_id', '{{%profile}}');

        // Eliminar la columna
        $this->dropColumn('{{%profile}}', 'concurso_id');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240311_152448_add_concurso_id_to_profile_table cannot be reverted.\n";

        return false;
    }
    */
}
