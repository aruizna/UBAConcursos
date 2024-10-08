<?php

use yii\db\Migration;

/**
 * Class m241008_171755_fix_nuevos_concursos_20241009
 */
class m241008_171755_fix_nuevos_concursos_20241009 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert(
            "asignatura",
            ["id_asignatura", "id_facultad", "descripcion_asignatura", "habilitada", "numero_resolucion", "observaciones"],
            [
                [2992, 4, 'Palinoestratigrafía de Biofacies', 's', NULL, NULL],
                
            ]
        );

        
        $this->update("concurso", ["cantidad_de_puestos" => 5], ["numero_expediente" => "EX-2024-03127600-   -UBA-DME#FCE"]);

        
        $this->update("concurso_asignatura", ["id_concurso" => 7524], ["id_concurso" => 7523, "id_asignatura" => 124]);
        $this->update("concurso_asignatura", ["id_concurso" => 7524], ["id_concurso" => 7523, "id_asignatura" => 571]);
        $this->update("concurso_asignatura", ["id_concurso" => 7524], ["id_concurso" => 7523, "id_asignatura" => 1071]);
        $this->update("concurso_asignatura", ["id_concurso" => 7524], ["id_concurso" => 7523, "id_asignatura" => 1072]);
        $this->update("concurso_asignatura", ["id_concurso" => 7524], ["id_concurso" => 7523, "id_asignatura" => 1073]);
        $this->update("concurso_asignatura", ["id_concurso" => 7524], ["id_concurso" => 7523, "id_asignatura" => 1074]);
        $this->update("concurso_asignatura", ["id_concurso" => 7524], ["id_concurso" => 7523, "id_asignatura" => 2720]);
        $this->update("concurso_asignatura", ["id_concurso" => 7524], ["id_concurso" => 7523, "id_asignatura" => 2723]);
        $this->update("concurso_asignatura", ["id_concurso" => 7524], ["id_concurso" => 7523, "id_asignatura" => 2703]);


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            427,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03913058-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2702,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03913058-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2992,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-03913058-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();        


//427 2702

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241008_171755_fix_nuevos_concursos_20241009 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241008_171755_fix_nuevos_concursos_20241009 cannot be reverted.\n";

        return false;
    }
    */
}
