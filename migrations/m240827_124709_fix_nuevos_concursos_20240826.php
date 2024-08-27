<?php

use yii\db\Migration;

/**
 * Class m240827_124709_fix_nuevos_concursos_20240826
 */
class m240827_124709_fix_nuevos_concursos_20240826 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {


        $this->update("area_departamento", ["descripcion_area_departamento" => "Departamento de Matemática"], ["id_area_departamento" => 466]);

        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-00006534-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-00006606-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-00006659-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-00006799-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-00006835-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-00008225-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-00008398-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-00008873-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-00009248-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-00009392-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-00009953-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-00010052-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02606333-   -UBA-DMESA#SSA_FAGRO"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02720269-   -UBA-DMESA#SSA_FAGRO"]);
        //--------
        $this->update("concurso", ["id_categoria" => 2, "fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02622862-   -UBA-DME#SH_FADU"]);
        $this->update("concurso", ["id_categoria" => 2, "fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-03209052-   -UBA-DME#SH_FADU"]);
        $this->update("concurso", ["id_categoria" => 2, "fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-03130360-   -UBA-DME#FCE"]);
        $this->update("concurso", ["id_categoria" => 2, "fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-03130389-   -UBA-DME#FCE"]);
        $this->update("concurso", ["id_categoria" => 2, "fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-03130429- -UBA-DME#FCE"]);
        //---------
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2022-06201214-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02704009-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02704473-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02704852-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02706455-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02706487-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02706565-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02706654-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02728083- -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["cantidad_de_puestos" => 1, "fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02797518-   -UBA-DMESA#FCEN"]);
        $this->update("concurso", ["cantidad_de_puestos" => 3, "fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02888246-   -UBA-DMESA#FCEN"]);
        //-----------
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02961138-   -UBA-DMESA#FCEN"]);
        //-----------
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-01621465-   -UBA-DME#SAHDU_FSOC"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2023-02406492-   -UBA-DME#SAHDU_FSOC"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2023-02461340-   -UBA-DME#SAHDU_FSOC"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2021-02611433-   -UBA-DME#SAHDU_FSOC"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2023-02658182-   -UBA-DME#SAHDU_FSOC"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2023-02853201-   -UBA-DME#SAHDU_FSOC"]);
        //-----------
        $this->update("concurso", ["id_area_Departamento" => 37, "fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2022-05564086-   -UBA-DME#SAHDU_FSOC"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2022-05660506-   -UBA-DME#SAHDU_FSOC"]);
        $this->update("concurso", ["id_area_Departamento" => 37, "fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2022-05687528-   -UBA-DME#SAHDU_FSOC"]);
        //-----------
        

        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2021-06130383- -UBA-DME#SAHDU_FSOC"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-03133734-   -UBA-DMESA#SG_FVET"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02808883-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02809113-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02809191-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-03153750-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-03153810-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-03153852-   -UBA-DME#SSA_FFYB"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2023-03114014- -UBA-DME#FFYL"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2023-03114037- -UBA-DME#FFYL"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2023-07100706-   -UBA-DME#FFYL"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02443243-   -UBA-DMEDA#FODON"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02720093-   -UBA-DMEDA#FODON"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-08-26 09:00:00", "fecha_fin_inscripcion" => "2024-09-23 18:00:00"], ["numero_expediente" => "EX-2024-02746515-   -UBA-DMEDA#FODON"]);
        
      
        $this->update("concurso_asignatura", ["id_Asignatura" => 2813], ["id_concurso" => 7455, "id_asignatura" => 2833]);



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240827_124709_fix_nuevos_concursos_20240826 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240827_124709_fix_nuevos_concursos_20240826 cannot be reverted.\n";

        return false;
    }
    */
}
