<?php

use yii\db\Migration;

/**
 * Handles the creation of table `zakaz`.
 */
class m191112_182441_create_zakaz_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('zakaz', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notnull(),
            'client_id' => $this->integer(11)->notnull(),
            'vidpropuska_id' => $this->integer(11)->notnull(),
            'car_id' => $this->integer(11)->notnull(),
            'scandocument' => $this->string(255)->notnull(),
            'status' => $this->integer(100)->notnull()->defaultValue(0),
        ]);

        //создание внешнего ключа user_id
        $this->createIndex(
            'idx-zakaz-user_id',
            'zakaz',
            'user_id');

        $this->addForeignKey(
            'fk-zakaz-user_id',
            'zakaz',
            'user_id',
            'user',
            'id',
            'cascade', 'cascade'
        );

         //создание внешнего ключа client_id
         $this->createIndex(
            'idx-zakaz-client_id',
            'zakaz',
            'client_id');

        $this->addForeignKey(
            'fk-zakaz-client_id',
            'zakaz',
            'client_id',
            'client',
            'id',
            'cascade', 'cascade'
        );
        
        //создание внешнего ключа vidpropuska
        $this->createIndex(
            'idx-zakaz-vidpropuska_id',
            'zakaz',
            'vidpropuska_id');

        $this->addForeignKey(
            'fk-zakaz-vidpropuska_id',
            'zakaz',
            'vidpropuska_id',
            'vidpropuska',
            'id',
            'cascade', 'cascade'
        );

        //создание внешнего ключа car_id
        $this->createIndex(
            'idx-zakaz-car_id',
            'zakaz',
            'car_id');

        $this->addForeignKey(
            'fk-zakaz-car_id',
            'zakaz',
            'car_id',
            'car',
            'id',
            'cascade', 'cascade'
        );
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drop user_id
        $this->dropForeignKey(
            'fk-zakaz-user_id',
            'zakaz',
            'user_id',
            'user',
            'id');

        $this->dropIndex(
            'idx-zakaz-user_id',
            'zakaz',
            'user_id');

        // drop client_id
        $this->dropForeignKey(
            'fk-zakaz-client_id',
            'zakaz',
            'client_id',
            'client',
            'id');
        
        $this->dropIndex(
             'idx-zakaz-client_id',
             'zakaz',
             'client_id');

        // drop vid_id
        $this->dropForeignKey(
            'fk-zakaz-vidpropuska_id',
            'zakaz',
            'vidpropuska_id',
            'vidpropuska',
            'id');

        $this->dropIndex(
            'idx-zakaz-vidpropuska_id',
            'zakaz',
            'vidpropuska_id');

        // drop car_id
        $this->dropForeignKey(
            'fk-zakaz-car_id',
            'zakaz',
            'car_id',
            'car',
            'id');

        $this->dropIndex(
            'idx-zakaz-car_id',
            'zakaz',
            'car_id');

        $this->dropTable('zakaz');
    }
}
