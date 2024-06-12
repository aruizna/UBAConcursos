<?php

use yii\db\Migration;

/**
 * Class m240612_120247_fix_asignaturas_concursos
 */
class m240612_120247_fix_asignaturas_concursos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "
        insert INTO concurso_asignatura 
                select  
        c.id_concurso,
        2017,
        12
        from concurso c
        where c.numero_expediente = 'EX-2023-07146497-   -UBA-DMEDA#FODON'
    ";
        Yii::$app->db->createCommand($sql)->execute();

        $numeroExpediente = 'EX-2023-07662348-   -UBA-DME#FCE';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 1495,
                'id_facultad' => 3,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }

        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            738,
            3
            from concurso c
            where c.numero_expediente = 'EX-2023-07662348-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240612_120247_fix_asignaturas_concursos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240612_120247_fix_asignaturas_concursos cannot be reverted.\n";

        return false;
    }
    */
}
