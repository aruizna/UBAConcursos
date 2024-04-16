<?php

use yii\db\Migration;

/**
 * Class m240416_070658_new_profiles
 */
class m240416_070658_new_profiles extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sebastián','MUNILLA LEGUIZAMÓN','00000012',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sandra Patricia','FERNÁNDEZ','00000013',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Elizabeth Juliana','JACOBO','00000014',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gustavo','GONZALEZ','00000029',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Fabiana','IGLESIAS ARAUJO','00000030',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Pablo','FUTTEN','00000031',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alberto Mario','VOLMAN','00000032',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Fernando Francisco','LERENDEGUI','00000033',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mónica Norma','GRAND','00000034',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Adriana Estela','PIANO','00000036',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sebastián Miguel','DOMINGUEZ','00000037',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Diego Enrique','VEGA','00000038',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Miguel Angel','ZAPPELLAZ','00000039',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandra Marcela','LAZZARO','00000041',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Luis Alberto','TONELLI','00000042',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Roberto Daniel','BAVASTRO','00000043',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sergio','EISSA','00000044',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Damián','PIERBATTISTI','00000045',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Claudio Eduardo','MARTYNIUK','00000015',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Nidia Haydeé','SOLIGNAC','00000016',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Irma Adriana', 'GARCÍA NETTO','00000017',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Roberto Pablo','SABA','00000046',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sergio Sebastián','BAROCELLI','00000047',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Laura Cecilia','PAUTASSI','00000048',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Adrián Marcelo','PIVA','00000049',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Natalia','PIOL','00000018',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Leonardo Javier', 'REY VEGA','00000019',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Hugo Alberto','PAGOLA','00000020',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Ignacio','GIRIBET','00000040',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Carlos','APHESTEGUY','00000050',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Claudia Leda','MATTEO','00000051',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Celina Fernanda','CORNEJO','00000021',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Damián Luis', 'DE MOLINER','00000022',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gisela Verónica','PASTENE','00000023',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Lorena','CABIARTA','00000024',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alejandra Mabel','MIGUELES','00000025',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Romina','CHAINTIOU PIORNO','00000026',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Romina Vanesa','BARBIERO','00000027',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Graciela Mónica','RIGUERO','00000052',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcela Alejandra','LONCHUK','00000028',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Elsa Esther','LLENDERROZAS','00000053',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Paula','BERTINO','00000054',0)";
        Yii::$app->db->createCommand($sql)->execute();

        $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Inés','TULA','00000055',0)";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240416_070658_new_profiles cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240416_070658_new_profiles cannot be reverted.\n";

        return false;
    }
    */
}
