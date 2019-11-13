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
        $this->createTable('knigajalob', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notnull(),
            'subject' => $this->string(255)->notnull(),
        ]);


        $this->createIndex(
            'idx-knigajalob-user_id',
            'knigajalob',
            'user_id');

        $this->addForeignKey(
            'fk-knigajalob-user_id',
            'knigajalob',
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
            'fk-knigajalob-user_id',
            'knigajalob',
            'user_id',
            'user',
            'id',
        );

        $this->dropIndex(
            'idx-knigajalob-user_id',
            'knigajalob',
            'user_id');

        $this->dropTable('knigajalob');
    }
}
