<?php

use yii\db\Migration;

/**
 * Class m240422_144617_create_nuevos_concursos_20240422
 */
class m240422_144617_create_nuevos_concursos_20240422 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area","comentario"],
            [
                ['EX-2023-05004595-   -UBA-DMESA#FCEN', 3, 4, 4, 1, 113, 1, '2024-04-23 09:00:00', '2024-05-21 18:00:00', '09:00', '18:00', '2024-04-22', 1, 'Área: para el dictado de materias del ciclo superior de la Licenciatura en Ciencias de Datos tales como Introducción a la Estadística y Ciencia de Datos, Introducción a la Investigación Operativa y Optimización, Introducción al Modelado Continuo y Algebra Lineal Computacional','y/o aquellas materias que oportunamente se incorporen al plan de estudios o materias que la autoridad departamental dispusiese'],
                ['EX-2023-06101036-   -UBA-DMESA#FCEN', 1, 4, 4, 1, 409, 1, '2024-04-23 09:00:00', '2024-05-21 18:00:00', '09:00', '18:00', '2024-04-22', 1, 'Área Genética y Evolución, subárea Paleobiología','y/o aquellas materias que oportunamente se incorporen al plan de estudios o materias que la autoridad departamental dispusiese'],
                ['EX-2022-01868178-   -UBA-DIMEDA#SA_FI', 11, 10, 4, 1, 429, 1, '2024-04-23 09:00:00', '2024-05-21 18:00:00', '09:00', '18:00', '2024-04-22', 1, 'Área de docencia: Automatización y Control','']
            ]
        );

        $this->batchInsert(
            "asignatura",
            ["id_asignatura", "id_facultad", "descripcion_asignatura", "habilitada","numero_resolucion","observaciones"],
            [
                [2883, 4, 'Introducción a la Estadística y Ciencia de Datos', 's', NULL, NULL],
                [2884, 4, 'Introducción al Modelado Continuo, Algebra Lineal Computacional', 's', NULL, NULL],
                [2885, 10, 'Taller de Automatización y Control', 's', NULL, NULL],
                [2886, 10, 'Instrumentación y Control de Procesos Industriales', 's', NULL, NULL],
                [2887, 10, 'Robótica Industrial, Visión por computadora', 's', NULL, NULL],
                [2888, 10, 'Accionamientos Variables', 's', NULL, NULL]
            ]
        );


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2103,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-01868178-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2885,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-01868178-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2886,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-01868178-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2887,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-01868178-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2888,
            10
            from concurso c
            where c.numero_expediente = 'EX-2022-01868178-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();


        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2587,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2589,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2588,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2883,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-05004595-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2884,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-05004595-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO concurso_asignatura 
            select  
            c.id_concurso,
            2812,
            4
            from concurso c
            where c.numero_expediente = 'EX-2023-05004595-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Cecilia','LAPRIDA','00000056',0)";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Guillermo Carlos','SELLERIO','00000057',0)";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000056',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-06101036-   -UBA-DMESA#FCEN'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000057',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2022-01868178-   -UBA-DIMEDA#SA_FI'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240422_144617_create_nuevos_concursos_20240422 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240422_144617_create_nuevos_concursos_20240422 cannot be reverted.\n";

        return false;
    }
    */
}
