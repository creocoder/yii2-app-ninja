<?php
/**
 * @link https://github.com/creocoder/yii2-app-ninja
 * @copyright Copyright (c) 2015 Alexander Kochetov
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace console\controllers;

use Yii;
use yii\console\Controller;

/**
 * Manages the cookie validation key.
 *
 * @author Alexander Kochetov <creocoder@gmail.com>
 */
class KeyController extends Controller
{
    /**
     * @var string
     */
    public $defaultAction = 'show';

    /**
     * Generates the cookie validation key.
     */
    public function actionGenerate()
    {
        $path = dirname($_SERVER['PHP_SELF']) . '/.env';
        $key = Yii::$app->security->generateRandomString();

        file_put_contents(
            $path,
            str_replace(getenv('COOKIE_VALIDATION_KEY'), $key, file_get_contents($path))
        );

        $this->stdout("Cookie validation key '$key' generated successfully.\n");
    }

    /**
     * Shows the cookie validation key.
     */
    public function actionShow()
    {
        $this->stdout('Cookie validation key: ' . getenv('COOKIE_VALIDATION_KEY') . "\n");
    }
}
