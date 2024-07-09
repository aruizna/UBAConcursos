<?php

use yii\db\Migration;

/**
 * Class m240709_133743_update_fecha_concursos
 */
class m240709_133743_update_fecha_concursos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2024-00012292-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2024-00012297- -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2024-00012299- -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2024-00012304- -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2024-01907137- -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2024-02704305- -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2022-07146640-   -UBA-DIMEDA#SA_FI"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2024-02806814-   -UBA-DMEA#FMED"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2024-02806842-   -UBA-DMEA#FMED"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2024-02806872-   -UBA-DMEA#FMED"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2024-02806901-   -UBA-DMEA#FMED"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2024-02807197-   -UBA-DMEA#FMED"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "'2024-07-10 09:00:00", "fecha_fin_inscripcion" => "2024-07-30 18:00:00"], ["numero_expediente" => "EX-2024-02807226-   -UBA-DMEA#FMED"]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240709_133743_update_fecha_concursos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240709_133743_update_fecha_concursos cannot be reverted.\n";

        return false;
    }
    */
}
