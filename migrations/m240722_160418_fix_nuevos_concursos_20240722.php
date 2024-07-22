<?php

use yii\db\Migration;

/**
 * Class m240722_160418_fix_nuevos_concursos_20240722
 */
class m240722_160418_fix_nuevos_concursos_20240722 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->update("profile", ["apellido" => 'CARNELOS'], ["numero_documento" => '00000154']);
        $this->update("concurso", ["area" => 'Cátedra de Mejoramiento Animal'], ["id_concurso" => 7416]);
        $this->update("concurso", ["id_area_departamento" => 113], ["id_concurso" => 7423]);

        
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2024-00003941-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2024-00006566-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2024-00006727-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2024-00006769-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2024-00008068-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2024-00008161-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2024-00009976-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2024-00010119-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2024-01696150-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2024-01771586-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2023-07307647-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2023-07307689-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2023-07307742-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2024-02704275-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-07-23 09:00:00", "fecha_fin_inscripcion" => "2024-08-19 18:00:00"], ["numero_expediente" => "EX-2024-02445697-   -UBA-DMRD#SHA_FPSI"]);
 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240722_160418_fix_nuevos_concursos_20240722 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240722_160418_fix_nuevos_concursos_20240722 cannot be reverted.\n";

        return false;
    }
    */
}
