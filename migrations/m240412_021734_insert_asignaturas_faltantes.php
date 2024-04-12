<?php

use yii\db\Migration;

/**
 * Class m240412_021734_insert_asignaturas_faltantes
 */
class m240412_021734_insert_asignaturas_faltantes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // INSERTA LA ASIGNATURA FALTANTE AL CONCURSO DEL EXPEDIENTE NRO EX-2023-05004215-   -UBA-DMESA#FCEN
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Tecnología de Alimentos III'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales')
            from concurso c
            where c.numero_expediente = 'EX-2023-05004215-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        //BORRA ASIGNATURAS QUE NO VAN EN EL CONCURSO DEL EXPEDIENTE NRO EX-2023-05254860-   -UBA-DMESA#FCEN
        //Complementos de Química Inorgánica y Analítica
        $sql = "DELETE FROM concurso_asignatura
                WHERE id_concurso = (SELECT c.id_concurso
                                        FROM concurso AS c
                                        where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
                                    )
                AND id_asignatura = (SELECT DISTINCT a.id_asignatura
                                        FROM asignatura AS a
                                        where a.descripcion_asignatura = 'Complementos de Química Inorgánica y Analítica'
                                    )
                AND id_facultad = (SELECT f.id_facultad
                                        FROM facultad AS f
                                        where f.nombre_facultad = 'Ciencias Exactas y Naturales'
                                    )";
        Yii::$app->db->createCommand($sql)->execute();
        //Química Analítica
        $sql = "DELETE FROM concurso_asignatura
                WHERE id_concurso = (SELECT c.id_concurso
                                        FROM concurso AS c
                                        where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
                                    )
                AND id_asignatura = (SELECT DISTINCT a.id_asignatura
                                        FROM asignatura AS a
                                        where a.descripcion_asignatura = 'Química Analítica'
                                    )
                AND id_facultad = (SELECT f.id_facultad
                                        FROM facultad AS f
                                        where f.nombre_facultad = 'Ciencias Exactas y Naturales'
                                    )";
        Yii::$app->db->createCommand($sql)->execute();
        //Química Física I
        $sql = "DELETE FROM concurso_asignatura
                WHERE id_concurso = (SELECT c.id_concurso
                                        FROM concurso AS c
                                        where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
                                    )
                AND id_asignatura = (SELECT DISTINCT a.id_asignatura
                                        FROM asignatura AS a
                                        where a.descripcion_asignatura = 'Química Física I'
                                    )
                AND id_facultad = (SELECT f.id_facultad
                                        FROM facultad AS f
                                        where f.nombre_facultad = 'Ciencias Exactas y Naturales'
                                    )";
        Yii::$app->db->createCommand($sql)->execute();
        //Química Física II
        $sql = "DELETE FROM concurso_asignatura
                WHERE id_concurso = (SELECT c.id_concurso
                                        FROM concurso AS c
                                        where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
                                    )
                AND id_asignatura = (SELECT DISTINCT a.id_asignatura
                                        FROM asignatura AS a
                                        where a.descripcion_asignatura = 'Química Física II'
                                    )
                AND id_facultad = (SELECT f.id_facultad
                                        FROM facultad AS f
                                        where f.nombre_facultad = 'Ciencias Exactas y Naturales'
                                    )";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO asignatura 
            (id_asignatura,id_facultad,descripcion_asignatura, habilitada) values 
            (
                (SELECT (assig.id_asignatura+1) FROM `asignatura` AS assig order by assig.id_asignatura desc limit 1),
                (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales'),
                'Química Inorgánica 1',
                's'                
            )
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO asignatura 
            (id_asignatura,id_facultad,descripcion_asignatura, habilitada) values 
            (
                (SELECT (assig.id_asignatura+1) FROM `asignatura` AS assig order by assig.id_asignatura desc limit 1),
                (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales'),
                'Química Inorgánica 2',
                's'                
            )
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO asignatura 
            (id_asignatura,id_facultad,descripcion_asignatura, habilitada) values 
            (
                (SELECT (assig.id_asignatura+1) FROM `asignatura` AS assig order by assig.id_asignatura desc limit 1),
                (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales'),
                'Química Analítica 1',
                's'                
            )
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO asignatura 
            (id_asignatura,id_facultad,descripcion_asignatura, habilitada) values 
            (
                (SELECT (assig.id_asignatura+1) FROM `asignatura` AS assig order by assig.id_asignatura desc limit 1),
                (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales'),
                'Química Analítica 2',
                's'                
            )
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO asignatura 
            (id_asignatura,id_facultad,descripcion_asignatura, habilitada) values 
            (
                (SELECT (assig.id_asignatura+1) FROM `asignatura` AS assig order by assig.id_asignatura desc limit 1),
                (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales'),
                'Química Física 1',
                's'                
            )
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO asignatura 
            (id_asignatura,id_facultad,descripcion_asignatura, habilitada) values 
            (
                (SELECT (assig.id_asignatura+1) FROM `asignatura` AS assig order by assig.id_asignatura desc limit 1),
                (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales'),
                'Química Física 2',
                's'                
            )
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO asignatura 
            (id_asignatura,id_facultad,descripcion_asignatura, habilitada) values 
            (
                (SELECT (assig.id_asignatura+1) FROM `asignatura` AS assig order by assig.id_asignatura desc limit 1),
                (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales'),
                'Química Física 3',
                's'                
            )
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO asignatura 
            (id_asignatura,id_facultad,descripcion_asignatura, habilitada) values 
            (
                (SELECT (assig.id_asignatura+1) FROM `asignatura` AS assig order by assig.id_asignatura desc limit 1),
                (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales'),
                'Laboratorio 1 de Química Física',
                's'                
            )
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO asignatura 
            (id_asignatura,id_facultad,descripcion_asignatura, habilitada) values 
            (
                (SELECT (assig.id_asignatura+1) FROM `asignatura` AS assig order by assig.id_asignatura desc limit 1),
                (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales'),
                'Laboratorio 2 de Química Física',
                's'                
            )
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO asignatura 
            (id_asignatura,id_facultad,descripcion_asignatura, habilitada) values 
            (
                (SELECT (assig.id_asignatura+1) FROM `asignatura` AS assig order by assig.id_asignatura desc limit 1),
                (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales'),
                'Química de Materiales',
                's'                
            )
        ";
        Yii::$app->db->createCommand($sql)->execute();

        //inserto las 10 nuevas asignaturas
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Química Inorgánica 1'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales')
            from concurso c
            where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Química Inorgánica 2'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales')
            from concurso c
            where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Química Analítica 1'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales')
            from concurso c
            where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Química Analítica 2'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales')
            from concurso c
            where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Química Física 1'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales')
            from concurso c
            where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Química Física 2'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales')
            from concurso c
            where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Química Física 3'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales')
            from concurso c
            where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Laboratorio 1 de Química Física'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales')
            from concurso c
            where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Laboratorio 2 de Química Física'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales')
            from concurso c
            where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Química de Materiales'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Ciencias Exactas y Naturales')
            from concurso c
            where c.numero_expediente = 'EX-2023-05254860-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        //INSERTO ASIGNATURA DE ODONTOLOGIA EX-2023-05121189-   -UBA-DMEDA#FODON
        $sql = "
            insert INTO asignatura 
            (id_asignatura,id_facultad,descripcion_asignatura, habilitada) values 
            (
                (SELECT (assig.id_asignatura+1) FROM `asignatura` AS assig order by assig.id_asignatura desc limit 1),
                (select f.id_facultad from facultad f where f.nombre_facultad = 'Odontología'),
                'Epidemiología y Gestión de Salud',
                's'                
            )
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO asignatura 
            (id_asignatura,id_facultad,descripcion_asignatura, habilitada) values 
            (
                (SELECT (assig.id_asignatura+1) FROM `asignatura` AS assig order by assig.id_asignatura desc limit 1),
                (select f.id_facultad from facultad f where f.nombre_facultad = 'Odontología'),
                'Articulación Docencia-Servicio Investigación (Práctica Social Educativa) (N503)',
                's'                
            )
        ";
        Yii::$app->db->createCommand($sql)->execute();
        // INSERTO CONCURSO_ASIGNATURA DE ODONTOLOGIA EX-2023-05121189-   -UBA-DMEDA#FODON
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Articulación Docencia - Servicios de Salud'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Odontología')
            from concurso c
            where c.numero_expediente = 'EX-2023-05121189-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Epidemiología y Gestión de Salud'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Odontología')
            from concurso c
            where c.numero_expediente = 'EX-2023-05121189-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Odontología Preventiva y Mínimamente Invasiva I (N206)'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Odontología')
            from concurso c
            where c.numero_expediente = 'EX-2023-05121189-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Odontología Preventiva y Mínimamente Invasiva II (N207)'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Odontología')
            from concurso c
            where c.numero_expediente = 'EX-2023-05121189-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Introducción a la Periodoncia (N214)'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Odontología')
            from concurso c
            where c.numero_expediente = 'EX-2023-05121189-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Módulo Asistencial Integrado de Baja Complejidad (N408)'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Odontología')
            from concurso c
            where c.numero_expediente = 'EX-2023-05121189-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Epidemiología y Salud de las Poblaciones (N409)'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Odontología')
            from concurso c
            where c.numero_expediente = 'EX-2023-05121189-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Articulación Docencia-Servicio Investigación (Práctica Social Educativa) (N503)'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Odontología')
            from concurso c
            where c.numero_expediente = 'EX-2023-05121189-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Sistema de Salud y Gestión Clínica (N508)'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Odontología')
            from concurso c
            where c.numero_expediente = 'EX-2023-05121189-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso, (select a.id_asignatura from asignatura a where a.descripcion_asignatura = 'Programa Rural de Atención Odontológica (N604)'), (select f.id_facultad from facultad f where f.nombre_facultad = 'Odontología')
            from concurso c
            where c.numero_expediente = 'EX-2023-05121189-   -UBA-DMEDA#FODON'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240412_021734_insert_asignaturas_faltantes cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240412_021734_insert_asignaturas_faltantes cannot be reverted.\n";

        return false;
    }
    */
}
