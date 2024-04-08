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
use Yii;
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
        $email = $this->prompt('Enter recipient email address:');
        $mailer = Yii::$app->mailer;
        var_dump($mailer->compose()
            ->setFrom($_ENV["MAIL_USER"]??'a')
            ->setTo($email)
            ->setSubject('Asunto del correo')
            ->setTextBody('Cuerpo del correo en texto sin formato')
            ->send());
        return;
    }
}
