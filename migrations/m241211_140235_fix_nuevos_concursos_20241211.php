<?php

use yii\db\Migration;

/**
 * Class m241211_140235_fix_nuevos_concursos_20241211
 */
class m241211_140235_fix_nuevos_concursos_20241211 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $sql = "
            DELETE FROM concurso_asignatura WHERE id_concurso = 
            (SELECT id_concurso FROM `concurso` WHERE numero_expediente = 'EX-2024-02791512-   -UBA-DME#FCE')
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 


        # EX-2024-02791512-   -UBA-DME#FCE
            $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            1469,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-02791512-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-02791512-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            1368,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-02791512-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        # EX-2024-02791512-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            2551,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-02791512-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $this->update("profile", ["numero_documento" => '00000365'], ["numero_documento" => "0000365"]);

        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-04363068-   -UBA-DME#FCE', 1, 3, 4, 1, 106, 2, '2024-12-10 09:00:00', '2025-02-19 18:00:00', '09:00', '18:00', '2024-12-11', 1, '', '' ], 
            ]
        );

        // *****************************
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000374',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04363068-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000375',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-04363068-   -UBA-DME#FCE'
        ";   
        Yii::$app->db->createCommand($sql)->execute(); 
    
        # EX-2024-04363068-   -UBA-DME#FCE
        $sql = "
            insert INTO concurso_asignatura
            select
            c.id_concurso,
            975,
            3
            from concurso c
            where c.numero_expediente = 'EX-2024-04363068-   -UBA-DME#FCE'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    
    
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241211_140235_fix_nuevos_concursos_20241211 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241211_140235_fix_nuevos_concursos_20241211 cannot be reverted.\n";

        return false;
    }
    */
}
