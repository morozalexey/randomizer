<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use app\models\Randomizer;

class RndController extends Controller
{
    public function actionIndex()
    {   
        $model = new Randomizer();
        $rnd = rand(1, 1000);
        $model->rnd = $rnd;
        $model->save();
        echo $rnd . "\n";
        return ExitCode::OK;
    }
}
