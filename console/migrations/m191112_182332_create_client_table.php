<?php

use yii\db\Migration;

/**
 * Handles the creation of table `client`.
 */
class m191112_182332_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('client', [
            'id' => $this->primaryKey(),
            'surname' => $this->string(200)->notnull(),
            'name' => $this->string(200)->notnull(),
            'patronymic' => $this->string(200)->notnull(),
            'post' => $this->string(200)->notnull(),
            'nameofpodrazdelenie' => $this->string(200)->notnull(),
            'email' => $this->string(100)->notnull(),
            'number' => $this->integer()->notnull(),
            'user_id' => $this->integer(11)->notnull(),
        ]);

        //создание внешнего ключа user_id
        $this->createIndex(
            'idx-client-user_id',
            'client',
            'user_id');

        $this->addForeignKey(
            'fk-client-user_id',
            'client',
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
            'fk-client-user_id',
            'client',
            'user_id',
            'user',
            'id',
        );

        $this->dropIndex(
            'idx-client-user_id',
            'client',
            'user_id');

        $this->dropTable('client');
    }
}
