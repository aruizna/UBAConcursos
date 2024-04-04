<?php

use yii\db\Migration;

/**
 * Class m240404_060131_fixe_concursoss
 */
class m240404_060131_fixe_concursoss extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->update("area_departamento", ["id_area_departamento"=>411], ["id_facultad" => 4, "id_area_departamento" => 408, "descripcion_area_departamento" => "Departamento de Computación"]);
        $this->insert("area_departamento", ["descripcion_area_departamento" => 'Departamento de Ciencias Geológicas', "id_area_departamento" => 413, "id_facultad" => 4, "activa" =>1]);
        $this->insert("area_departamento", ["descripcion_area_departamento" => 'Departamento de Biodiversidad y Biología Experimental', "id_area_departamento" => 414, "id_facultad" => 4, "activa" =>1]);
        $this->insert("area_departamento", ["descripcion_area_departamento" => 'Departamento de Ciencias de la Atmósfera y Los Océanos', "id_area_departamento" => 415, "id_facultad" => 4, "activa" =>1]);
        $this->insert("area_departamento", ["descripcion_area_departamento" => 'Departamento de Química Inorgánica, Analítica y Química Física', "id_area_departamento" => 416, "id_facultad" => 4, "activa" =>1]);
        $this->insert("area_departamento", ["descripcion_area_departamento" => 'Departamento de Química Orgánica', "id_area_departamento" => 417, "id_facultad" => 4, "activa" =>1]);
        $this->insert("area_departamento", ["descripcion_area_departamento" => 'Departamento de Física', "id_area_departamento" => 418, "id_facultad" => 4, "activa" =>1]);
        $this->insert("area_departamento", ["descripcion_area_departamento" => 'Departamento de Matemática', "id_area_departamento" => 113, "id_facultad" => 4, "activa" =>1]);

        # Departamento de Biodiversidad y Biología Experimental
        $this->update("concurso", ["id_area_departamento" => 414], ["numero_expediente" => "EX-2023-05018503-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 414], ["numero_expediente" => "EX-2023-05018619-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 414], ["numero_expediente" => "EX-2023-05233079-   -UBA-DMESA#FCEN"]);

        # Departamento de Ciencias de la Atmósfera y Los Océanos
        $this->update("concurso", ["id_area_departamento" => 415], ["numero_expediente" => "EX-2023-05003795-   -UBA-DMESA#FCEN"]);
        
        # Departamento de Ciencias Geológicas
        $this->update("concurso", ["id_area_departamento" => 413], ["numero_expediente" => "EX-2023-02397009-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 413], ["numero_expediente" => "EX-2023-05164318-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 413], ["numero_expediente" => "EX-2023-05164911-   -UBA-DMESA#FCEN"]);

        # Departamento de Computación 
        $this->update("concurso", ["id_area_departamento" => 411], ["numero_expediente" => "EX-2023-04652968-   -UBA-DMESA#FCEN"]);

        # Departamento de Ecología, Genética y Evolución
        $this->update("concurso", ["id_area_departamento" => 1], ["numero_expediente" => "EX-2023-05138264-   -UBA-DMESA#FCEN"]);
        
        # Departamento de Matemática
        $this->update("concurso", ["id_area_departamento" => 113], ["numero_expediente" => "EX-2023-05004502-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 113], ["numero_expediente" => "EX-2023-05004557-   -UBA-DMESA#FCEN"]);

        # Departamento de Química Inorgánica, Analítica y Química Física
        $this->update("concurso", ["id_area_departamento" => 416], ["numero_expediente" => "EX-2023-05254860-   -UBA-DMESA#FCEN"]);

        # Departamento de Química Orgánica
        $this->update("concurso", ["id_area_departamento" => 417], ["numero_expediente" => "EX-2023-05004215-   -UBA-DMESA#FCEN"]);

        # Departamento de Física
        $this->update("concurso", ["id_area_departamento" => 418], ["numero_expediente" => "EX-2023-05138214-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["id_area_departamento" => 418], ["numero_expediente" => "EX-2023-05138264-   -UBA-DMESA#FCEN"]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240404_060131_fixe_concursoss cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240404_060131_fixe_concursoss cannot be reverted.\n";

        return false;
    }
    */
}
