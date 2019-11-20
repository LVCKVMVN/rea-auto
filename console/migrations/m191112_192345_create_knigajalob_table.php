<?php

use yii\db\Migration;

/**
 * Handles the creation of table `knigajalob`.
 */
class m191112_192345_create_knigajalob_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ComplaintBook', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notnull(),
            'subject' => $this->string(255)->notnull(),
        ]);


        $this->createIndex(
            'idx-ComplaintBook-user_id',
            'ComplaintBook',
            'user_id');

        $this->addForeignKey(
            'fk-ComplaintBook-user_id',
            'ComplaintBook',
            'user_id',
            'user',
            'id',
            'cascade', 'cascade'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
        $this->dropForeignKey(
            'fk-ComplaintBook-user_id',
            'ComplaintBook',
            'user_id',
            'user',
            'id',
        );

        $this->dropIndex(
            'idx-ComplaintBook-user_id',
            'ComplaintBook',
            'user_id');

        $this->dropTable('ComplaintBook');
    }
}
