<?php

use yii\db\Migration;

/**
 * Class m241204_020051_fix_categoria_nuevos_concursos_20241128
 */
class m241204_020051_fix_categoria_nuevos_concursos_20241128 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update("concurso", ["id_categoria" => 3], ["numero_expediente" => "EX-2024-03128400-   -UBA-DME#FCE"]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241204_020051_fix_categoria_nuevos_concursos_20241128 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241204_020051_fix_categoria_nuevos_concursos_20241128 cannot be reverted.\n";

        return false;
    }
    */
}
