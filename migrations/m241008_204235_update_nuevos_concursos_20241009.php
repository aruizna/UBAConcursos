<?php

use yii\db\Migration;

/**
 * Class m241008_204235_update_nuevos_concursos_20241009
 */
class m241008_204235_update_nuevos_concursos_20241009 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update("concurso", ["fecha_fin_inscripcion" => "2024-11-07 18:00:00", "fecha_inicio_inscripcion" => "2024-10-10 09:00:00", "fecha_publicacion" => "2024-10-09"], ["numero_expediente" => "EX-2024-04034491-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_fin_inscripcion" => "2024-11-07 18:00:00", "fecha_inicio_inscripcion" => "2024-10-10 09:00:00", "fecha_publicacion" => "2024-10-09"], ["numero_expediente" => "EX-2024-03127489-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_fin_inscripcion" => "2024-11-07 18:00:00", "fecha_inicio_inscripcion" => "2024-10-10 09:00:00", "fecha_publicacion" => "2024-10-09"], ["numero_expediente" => "EX-2024-03127600-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_fin_inscripcion" => "2024-11-07 18:00:00", "fecha_inicio_inscripcion" => "2024-10-10 09:00:00", "fecha_publicacion" => "2024-10-09"], ["numero_expediente" => "EX-2024-03128261-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_fin_inscripcion" => "2024-11-07 18:00:00", "fecha_inicio_inscripcion" => "2024-10-10 09:00:00", "fecha_publicacion" => "2024-10-09"], ["numero_expediente" => "EX-2024-03912996-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_fin_inscripcion" => "2024-11-07 18:00:00", "fecha_inicio_inscripcion" => "2024-10-10 09:00:00", "fecha_publicacion" => "2024-10-09"], ["numero_expediente" => "EX-2024-03913058-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_fin_inscripcion" => "2024-11-07 18:00:00", "fecha_inicio_inscripcion" => "2024-10-10 09:00:00", "fecha_publicacion" => "2024-10-09"], ["numero_expediente" => "EX-2024-04514450-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_fin_inscripcion" => "2024-11-07 18:00:00", "fecha_inicio_inscripcion" => "2024-10-10 09:00:00", "fecha_publicacion" => "2024-10-09"], ["numero_expediente" => "EX-2024-04035374-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["fecha_fin_inscripcion" => "2024-11-07 18:00:00", "fecha_inicio_inscripcion" => "2024-10-10 09:00:00", "fecha_publicacion" => "2024-10-09"], ["numero_expediente" => "EX-2024-02983808-   -UBA-DIMEDA#SA_FI"]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241008_204235_update_nuevos_concursos_20241009 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241008_204235_update_nuevos_concursos_20241009 cannot be reverted.\n";

        return false;
    }
    */
}
