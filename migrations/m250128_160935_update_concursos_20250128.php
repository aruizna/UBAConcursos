<?php

use yii\db\Migration;

/**
 * Class m250128_160935_update_concursos_20250128
 */
class m250128_160935_update_concursos_20250128 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        //Inserto nuevas asignaturas

        $this->batchInsert(
            "asignatura",
            ["id_asignatura", "id_facultad", "descripcion_asignatura", "habilitada", "numero_resolucion", "observaciones"],
            [
                [3054, 9, 'Comunicación y Educación', 's', NULL, NULL],
            ]
        );

        //Actualizo el departamento de los concursos
        $this->update("concurso", ["id_area_departamento" => 479], ["numero_expediente" => 'EX-2024-05100102-  -UBA-DME#FCE']);
        $this->update("concurso", ["id_area_departamento" => 479], ["numero_expediente" => 'EX-2024-05167671-   -UBA-DME#FCE']);


        //Elimino asignaturas erroneas al concurso.


        //EX-2024-05167671-   -UBA-DME#FCE

        $numeroExpediente = 'EX-2024-05167671-   -UBA-DME#FCE';
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

        //EX-2024-04931107-   -UBA-DMESA#FCEN

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

        //Asigno asignaturas a cada concurso.



        

        //EX-2024-05167671-   -UBA-DME#FCE
            //Matemática para Economistas(890),Análisis Numérico(61) y Bases Actuariales de las Inversiones y Financiaciones (118)

        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            890,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05167671-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            61,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05167671-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            18,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-05167671-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        //EX-2023-04746104-   -UBA-DME#FFYL
            //Comunicación y Educación 3054

            $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            3054,
            9
            from concurso c
            where c.numero_expediente = 'EX-2024-05167671-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        //EX-2024-04931107-   -UBA-DMESA#FCEN

                // Meteorología General, 930 ---
                // Estadística para el Sistema Climático 1 2729 ---
                // Climatología 198 ---
                // Radiación 2732 ---
                // Procesos Termodinámicos en la Atmósfera 2730 ---
                // Laboratorio de Procesamiento de Información Meteorológica 2731 ---
                // Cambio Climático 1754 ---
                // Clima Urbano 2759 ---
                // Aplicaciones en Climatología 2761 ---
                // Climatología de Extremos y sus Impactos 2753 ---
                // Introducción al Cambio Climático 2755 ---
                // Simulación del Clima 2743 ---

        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            930,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2729,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            198,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2732,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2730,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2731,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            1754,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2759,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2761,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2753,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2755,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
                    select  
            c.id_concurso,
            2743,
            4
            from concurso c
            where c.numero_expediente = 'EX-2024-04931107-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250128_160935_update_concursos_20250128 cannot be reverted.\n";
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250128_160935_update_concursos_20250128 cannot be reverted.\n";

        return false;
    }
    */
}
