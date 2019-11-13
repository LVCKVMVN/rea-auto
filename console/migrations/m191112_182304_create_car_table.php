<?php

use yii\db\Migration;

/**
 * Handles the creation of table `car`.
 */
class m191112_182304_create_car_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('car', [
            'id' => $this->primaryKey(),
            'carname' => $this->string(200)->notnull(),
            'carcolor' => $this->string(200)->notnull(),
            'gosnumber' => $this->string(200)->notnull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('car');
    }
}
