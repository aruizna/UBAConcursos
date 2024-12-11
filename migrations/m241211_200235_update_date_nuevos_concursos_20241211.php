<?php

use yii\db\Migration;

/**
 * Class m241211_200235_update_date_nuevos_concursos_20241211
 */
class m241211_200235_update_date_nuevos_concursos_20241211 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-02791512-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-03280301-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-03702650-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-04302482-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-04316834-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-04342004-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-04362922-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-04362972-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-04363012-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-04363103-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-04561092-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-04363198-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-05057793-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-05100804-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-05208675-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-05215209-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-05266528-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-05267342-   -UBA-DME#FCE"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-01621543-   -UBA-DME#SAHDU_FSOC"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2023-03013670-   -UBA-DME#SAHDU_FSOC"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2023-03013707-   -UBA-DME#SAHDU_FSOC"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2023-05443883-   -UBA-DME#SAHDU_FSOC"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2024-03182478-   -UBA-DME#FFYL"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2023-04958439-  -UBA-DME#FFYL"]);
        $this->update("concurso", ["fecha_inicio_inscripcion" => "2024-12-12 09:00:00"], ["numero_expediente" => "EX-2023-07096496-   -UBA-DME#FFYL"]);
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241211_200235_update_date_nuevos_concursos_20241211 cannot be reverted.\n";
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241211_200235_update_date_nuevos_concursos_20241211 cannot be reverted.\n";

        return false;
    }
    */
}
