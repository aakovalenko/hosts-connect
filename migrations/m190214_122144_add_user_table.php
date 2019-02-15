<?php

use yii\db\Migration;

/**
 * Class m190214_122144_add_user_table
 */
class m190214_122144_add_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('{{user}}',[
            'id' => $this->primaryKey(11),
            'username' => $this->string(255)->notNull(),
            'auth_key' =>$this->string(32)->notNull(),
            'password_hash' => $this->string(255)->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string(255)->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{user}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190214_122144_add_user_table cannot be reverted.\n";

        return false;
    }
    */
}
