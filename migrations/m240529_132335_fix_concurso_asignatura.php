<?php

use yii\db\Migration;

/**
 * Class m240529_132335_fix_concurso_asignatura
 */
class m240529_132335_fix_concurso_asignatura extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        // *** EX-2023-07350123-   -UBA-DME#SSA_FFYB
        $numeroExpediente = 'EX-2023-06888731-   -UBA-DME#SSA_FFYB';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2400,
                'id_facultad' => 8,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }

        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2400,
            8
            from concurso c
            where c.numero_expediente = 'EX-2023-07350123-   -UBA-DME#SSA_FFYB'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        // *** EX-2023-07350246-   -UBA-DME#SSA_FFYB
        $numeroExpediente = 'EX-2023-06888731-   -UBA-DME#SSA_FFYB';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2408,
                'id_facultad' => 8,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2408,
            8
            from concurso c
            where c.numero_expediente = 'EX-2023-07350246-   -UBA-DME#SSA_FFYB'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        // *** EX-2024-01387164-   -UBA-DMEDA#FODON

        $numeroExpediente = 'EX-2024-00897735-   -UBA-DMEA#FMED';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2039,
                'id_facultad' => 12,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }

        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2039,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01387164-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $numeroExpediente = 'EX-2024-00897735-   -UBA-DMEA#FMED';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2040,
                'id_facultad' => 12,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2040,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01387164-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $numeroExpediente = 'EX-2024-00897735-   -UBA-DMEA#FMED';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2041,
                'id_facultad' => 12,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2041,
            12
            from concurso c
            where c.numero_expediente = 'EX-2024-01387164-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        // *** EX-2023-06761884-   -UBA-DMEDA#FODON

        $numeroExpediente = 'EX-2024-00897735-   -UBA-DMEA#FMED';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2038,
                'id_facultad' => 12,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2038,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-06761884-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $numeroExpediente = 'EX-2024-00897735-   -UBA-DMEA#FMED';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2021,
                'id_facultad' => 12,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2021,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-06761884-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        // *** EX-2023-06761926-   -UBA-DMEDA#FODON

        $numeroExpediente = 'EX-2024-00897735-   -UBA-DMEA#FMED';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2036,
                'id_facultad' => 12,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2036,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-06761926-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $numeroExpediente = 'EX-2024-00897735-   -UBA-DMEA#FMED';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2027,
                'id_facultad' => 12,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2027,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-06761926-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        // *** EX-2023-07146497-   -UBA-DMEDA#FODON
        $numeroExpediente = 'EX-2024-00897735-   -UBA-DMEA#FMED';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2017,
                'id_facultad' => 12,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }
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
        $numeroExpediente = 'EX-2024-00897735-   -UBA-DMEA#FMED';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2018,
                'id_facultad' => 12,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2018,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-07146497-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $numeroExpediente = 'EX-2024-00897735-   -UBA-DMEA#FMED';
        $concurso = (new \yii\db\Query())
            ->select(['id_concurso'])
            ->from('concurso')
            ->where(['numero_expediente' => $numeroExpediente])
            ->one();
        if ($concurso !== false) {
            $idConcurso = $concurso['id_concurso'];
            $this->delete('concurso_asignatura', [
                'id_asignatura' => 2019,
                'id_facultad' => 12,
                'id_concurso' => $idConcurso
            ]);
        } else {
            echo "No se encontró un concurso con el numero_expediente especificado.\n";
        }
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2019,
            12
            from concurso c
            where c.numero_expediente = 'EX-2023-07146497-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240529_132335_fix_concurso_asignatura cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240529_132335_fix_concurso_asignatura cannot be reverted.\n";

        return false;
    }
    */
}
