<?php

use yii\db\Migration;

/**
 * Class m240528_150652_fix_concursos_2024_05_28
 */
class m240528_150652_fix_concursos_2024_05_28 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [450, 4, 'Departamento de Industrias', 1],
                [451, 8, 'Departamento de Sanidad, Nutrición, Bromatología y Toxicología', 1],
            ]
        );
        
        $this->update("concurso", ["id_area_departamento" => 418], ["numero_expediente" => "EX-2024-01715159-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 418], ["numero_expediente" => "EX-2024-01739491-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 418], ["numero_expediente" => "EX-2024-01739534-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 411], ["numero_expediente" => "EX-2024-01785323-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 311], ["numero_expediente" => "EX-2024-01785539-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 311], ["numero_expediente" => "EX-2024-01786359-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 415], ["numero_expediente" => "EX-2023-05003766-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => null], ["numero_expediente" => "EX-2024-02159777-   -UBA-DMESA#SG_FVET"]);
        $this->update("concurso", ["id_area_departamento" => null], ["numero_expediente" => "EX-2024-01387164-   -UBA-DMEDA#FODON"]);
        $this->update("concurso", ["id_area_departamento" => null], ["numero_expediente" => "EX-2023-06761884-   -UBA-DMEDA#FODON"]);
        $this->update("concurso", ["id_area_departamento" => null], ["numero_expediente" => "EX-2023-06761926-   -UBA-DMEDA#FODON"]);
        $this->update("concurso", ["id_area_departamento" => null], ["numero_expediente" => "EX-2023-07146497-   -UBA-DMEDA#FODON"]);
        $this->update("concurso", ["id_area_departamento" => 16], ["numero_expediente" => "EX-2023-06888613-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["id_area_departamento" => 3], ["numero_expediente" => "EX-2023-06888731-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["id_area_departamento" => 11], ["numero_expediente" => "EX-2023-07350123-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["id_area_departamento" => 3], ["numero_expediente" => "EX-2023-07350246-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["id_area_departamento" => 450], ["numero_expediente" => "EX-2024-01713042-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 451], ["numero_expediente" => "EX-2023-03624618-   -UBA-DME#SSA_FFYB"]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240528_150652_fix_concursos_2024_05_28 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240528_150652_fix_concursos_2024_05_28 cannot be reverted.\n";

        return false;
    }
    */
}
