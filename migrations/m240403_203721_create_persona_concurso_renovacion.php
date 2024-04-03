<?php

use yii\db\Migration;

/**
 * Class m240403_203721_create_persona_concurso_renovacion
 */
class m240403_203721_create_persona_concurso_renovacion extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {


        $this->execute("INSERT INTO persona_concurso_renovacion
            (id_concurso, id_tipo_documento, numero_documento, id_categoria, id_dedicacion, id_designacion, subcargo, digito)
            select  
            c.id_concurso, id_tipo_documento, numero_documento, pcr.id_categoria, pcr.id_dedicacion, id_designacion, subcargo, digito
            from concurso c 
            join concurso c2 on left(c2.numero_expediente ,8) = right(left(c.numero_expediente,16), 8)
            join persona_concurso_renovacion pcr on pcr.id_concurso = c2.id_concurso 
            where left(c.numero_expediente,2) = 'EX'
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240403_203721_create_persona_concurso_renovacion cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240403_203721_create_persona_concurso_renovacion cannot be reverted.\n";

        return false;
    }
    */
}
