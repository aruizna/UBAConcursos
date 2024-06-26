<?php

use yii\db\Migration;

/**
 * Class m240626_145027_fix_tipo_concursos
 */
class m240626_145027_fix_tipo_concursos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update("concurso", ["id_tipo_concurso" => 4], ["numero_expediente" => "EX-2024-02079984-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["id_tipo_concurso" => 1], ["numero_expediente" => "EX-2024-02482997-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["id_tipo_concurso" => 3], ["numero_expediente" => "EX-2024-01386943-   -UBA-DMEDA#FODON"]);
        $this->update("concurso", ["id_tipo_concurso" => 1], ["numero_expediente" => "EX-2023-06761836-   -UBA-DMEDA#FODON"]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240626_145027_fix_tipo_concursos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240626_145027_fix_tipo_concursos cannot be reverted.\n";

        return false;
    }
    */
}
