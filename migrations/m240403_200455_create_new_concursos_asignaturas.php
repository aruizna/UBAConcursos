<?php

use yii\db\Migration;

/**
 * Class m240403_200455_create_new_concursos_asignaturas
 */
class m240403_200455_create_new_concursos_asignaturas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("
        insert INTO concurso_asignatura 
        select  
        c.id_concurso, ca.id_asignatura, ca.id_facultad
        from concurso c 
        join concurso c2 on left(c2.numero_expediente ,8) = right(left(c.numero_expediente,16), 8)
        join concurso_asignatura ca on ca.id_concurso = c2.id_concurso 
        where left(c.numero_expediente,2) = 'EX'
    ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240403_200455_create_new_concursos_asignaturas cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240403_200455_create_new_concursos_asignaturas cannot be reverted.\n";

        return false;
    }
    */
}
