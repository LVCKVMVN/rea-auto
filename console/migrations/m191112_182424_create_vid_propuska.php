<?php

use yii\db\Migration;

/**
 * Class m191112_182424_create_vid_propuska
 */
class m191112_182424_create_vid_propuska extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('vidpropuska', [
            'id' => $this->primaryKey(),
            'vid_propuska_name' => $this->string(200)->notnull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('vidpropuska');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191112_182424_create_vid_propuska cannot be reverted.\n";

        return false;
    }
    */
}
