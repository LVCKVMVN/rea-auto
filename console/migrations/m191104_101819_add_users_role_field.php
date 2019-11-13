<?php

use yii\db\Migration;

/**
 * Class m191104_101819_add_users_role_field
 */
class m191104_101819_add_users_role_field extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'role', $this->smallInteger()->after('email')->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'role');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191104_101819_add_users_role_field cannot be reverted.\n";

        return false;
    }
    */
}
