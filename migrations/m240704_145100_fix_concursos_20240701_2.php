<?php

use yii\db\Migration;

/**
 * Class m240704_145100_fix_concursos_20240701_2
 */
class m240704_145100_fix_concursos_20240701_2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update("profile", ["apellido" => "FANO"], ["numero_documento" => "00000138"]);

        // elimina relacion concurso asignatura y lo vuelve a generar 
        
        $numeroExpediente = 'EX-2024-02483056-   -UBA-DME#SSA_FFYB';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2932,
                'id_facultad' => 1,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }

        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2932,
            8
            from concurso c
            where c.numero_expediente = 'EX-2024-02483056-   -UBA-DME#SSA_FFYB'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240704_145100_fix_concursos_20240701_2 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240704_145100_fix_concursos_20240701_2 cannot be reverted.\n";

        return false;
    }
    */
}
