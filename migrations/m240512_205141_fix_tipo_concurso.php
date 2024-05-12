<?php

use yii\db\Migration;

/**
 * Class m240512_205141_fix_tipo_concurso
 */
class m240512_205141_fix_tipo_concurso extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update("concurso",["id_tipo_concurso"=>1], ["numero_expediente" => "EX-2022-01868178-   -UBA-DIMEDA#SA_FI"]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240512_205141_fix_tipo_concurso cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240512_205141_fix_tipo_concurso cannot be reverted.\n";

        return false;
    }
    */
}
