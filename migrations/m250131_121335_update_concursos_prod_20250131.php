<?php

use yii\db\Migration;

/**
 * Class m250131_121335_update_concursos_prod_20250131
 */
class m250131_121335_update_concursos_prod_20250131 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //EX-2023-04746104-   -UBA-DME#FFYL

        $numeroExpediente = 'EX-2023-04746104-   -UBA-DME#FFYL';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }

        //EX-2023-04746104-   -UBA-DME#FFYL
            //Comunicación y Educación 3054

            $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            3054,
            9
            from concurso c
            where c.numero_expediente = 'EX-2023-04746104-   -UBA-DME#FFYL'
        ";
        Yii::$app->db->createCommand($sql)->execute();

    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250131_121335_update_concursos_prod_20250131 cannot be reverted.\n";
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250131_121335_update_concursos_prod_20250131 cannot be reverted.\n";

        return false;
    }
    */
}
