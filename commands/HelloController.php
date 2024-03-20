<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\Concurso;
use app\models\Preinscripto;
use app\models\Profile;
use app\models\User;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex($message = 'hello world')
    {

        $db = require __DIR__ . '../../config/db.php';
        var_dump($db);
        // Enable query logging
        /*\Yii::$app->db->enableLogging = true;

        // Print or log the SQL query
        $preinscripto = Preinscripto::find()->select('concurso_id')->where(['user_id' => 86])->column();
        var_dump(Profile::find()->where(['and', 'user_id' => 112, ['or', ['concurso_id' => $cid], ['concurso_id' => null]]])->orderBy(['concurso_id' => SORT_DESC])->one());

        // Disable query logging
        \Yii::$app->db->enableLogging = false;

        // Get the last executed SQL query
        #var_dump($p->id);

        return ExitCode::OK;*/
    }
}
