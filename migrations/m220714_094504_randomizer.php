<?php

use yii\db\Migration;

/**
 * Class m220714_094504_randomizer
 */
class m220714_094504_randomizer extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220714_094504_randomizer cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%randomizer}}', [
            'id' => $this->primaryKey(),
            'rnd' => $this->integer()
        ]);
    }

    public function down()
    {
        echo "m220714_094504_randomizer cannot be reverted.\n";

        return false;
    }
    
}
