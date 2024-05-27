<?php

use yii\db\Migration;

/**
 * Class m240513_144330_fix_docentes_concursos_mal_asignados
 */
class m240513_144330_fix_docentes_concursos_mal_asignados extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->delete("persona_concurso_renovacion", ['numero_documento' => '00000063']);
        $this->delete("persona_concurso_renovacion", ['numero_documento' => '00000064']);
        $this->delete("persona_concurso_renovacion", ['numero_documento' => '00000065']);
        $this->delete("persona_concurso_renovacion", ['numero_documento' => '00000066']);
        $this->delete("persona_concurso_renovacion", ['numero_documento' => '00000067']);
        $this->delete("persona_concurso_renovacion", ['numero_documento' => '00000068']);
        $this->delete("persona_concurso_renovacion", ['numero_documento' => '00000069']);
        $this->delete("persona_concurso_renovacion", ['numero_documento' => '00000070']);
        $this->delete("persona_concurso_renovacion", ['numero_documento' => '00000071']);
        $this->delete("persona_concurso_renovacion", ['numero_documento' => '00000072']);

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000063',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526002-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000064',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526002-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000065',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526002-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000066',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526002-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000067',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526002-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000068',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526002-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000069',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526002-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000070',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526002-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000071',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526002-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000072',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2023-05526002-   -UBA-DC#SA_FDER'
        ";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240513_144330_fix_docentes_concursos_mal_asignados cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240513_144330_fix_docentes_concursos_mal_asignados cannot be reverted.\n";

        return false;
    }
    */
}
