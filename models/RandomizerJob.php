<?php

namespace app\models;

use yii\base\BaseObject;
use Yii;
 
class RandomizerJob extends BaseObject implements \yii\queue\JobInterface
{   
    public $rnd;    
            
    public function execute($queue) 
    {   
        Yii::$app->db->createCommand("INSERT INTO `randomizer` (`rnd`) VALUES (:rnd)")->bindValue(':rnd', $this->rnd)->execute();          
    } 
}