<?php

use yii\db\Migration;

/**
 * Class m240708_143022_fix_nuevos_concursos_20240710
 */
class m240708_143022_fix_nuevos_concursos_20240710 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->update("area_departamento", ["id_facultad" => 11], ["id_area_departamento" => 463]);

        $this->update("concurso_asignatura", ["id_asignatura" => 613], ["id_concurso" => 7406]);
        $this->update("concurso_asignatura", ["id_asignatura" => 613], ["id_concurso" => 7407]);

        $this->update("concurso_asignatura", ["id_asignatura" => 415], ["id_concurso" => 7408]);
        $this->update("concurso_asignatura", ["id_asignatura" => 1107], ["id_concurso" => 7409]);

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000142',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-00012299- -UBA-DMESA#SSA_FAGRO'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000151',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-02807197-   -UBA-DMEA#FMED'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $this->update("persona_concurso_renovacion", ["numero_documento" => '00000152'], ["id_concurso" => 7409]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240708_143022_fix_nuevos_concursos_20240710 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240708_143022_fix_nuevos_concursos_20240710 cannot be reverted.\n";

        return false;
    }
    */
}
