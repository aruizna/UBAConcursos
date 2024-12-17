<?php

use yii\db\Migration;

/**
 * Class m241217_163235_update_user_20241217
 */
class m241217_163235_update_user_20241217 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update("user", ["email" => "saraviapersonal@gmail.com"], ["username" => "25218726"]);
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241217_163235_update_user_20241217 cannot be reverted.\n";
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241217_163235_update_user_20241217 cannot be reverted.\n";

        return false;
    }
    */
}
