<?php

use yii\db\Migration;

/**
 * Class m240404_195055_update_id_tipo_concurso
 */
class m240404_195055_update_id_tipo_concurso extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update("concurso", ["id_tipo_concurso" => 2], ["numero_expediente" => "EX-2023-04652968-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_tipo_concurso" => 2], ["numero_expediente" => "EX-2023-05003399-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_tipo_concurso" => 2], ["numero_expediente" => "EX-2023-05164911-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_tipo_concurso" => 4], ["numero_expediente" => "EX-2023-03623530-   -UBA-DIMEDA#SA_FI"]);
        $this->update("concurso", ["id_tipo_concurso" => 4], ["numero_expediente" => "EX-2023-05213279-   -UBA-DMEDA#FODON"]);
        $this->update("concurso", ["id_tipo_concurso" => 3], ["numero_expediente" => "EX-2023-05300780-   -UBA-DMEDA#FODON"]);
        $this->update("concurso", ["id_tipo_concurso" => 4], ["numero_expediente" => "EX-2023-05121189-   -UBA-DMEDA#FODON"]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240404_195055_update_id_tipo_concurso cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240404_195055_update_id_tipo_concurso cannot be reverted.\n";

        return false;
    }
    */
}
