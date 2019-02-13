<?php

use yii\db\Migration;

/**
 * Class m190213_124933_add_hosts_table
 */
class m190213_124933_add_hosts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('hosts',[
           'id' => $this->primaryKey(11),
           'site_name' => $this->string(255)->notNull(),
            'host_admin_panel' => $this->string(255)->notNull(),
            'host_admin_user' => $this->string(255)->notNull(),
            'host_admin_pwd' => $this->string(255)->notNull(),
            'ftp_address' => $this->string(255)->notNull(),
            'ftp_user' => $this->string(255)->notNull(),
            'ftp_password' => $this->string(255)->notNull(),
            'site_admin_user' => $this->string(255),
            'site_admin_pwd' => $this->string(255),
            'site_bd_name' => $this->string(255),
            'site_bd_user' => $this->string(255),
            'site_bd_pwd' => $this->string(255),
            'site_email' => $this->string(255),
            'site_email_pwd' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('hosts');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190213_124933_add_hosts_table cannot be reverted.\n";

        return false;
    }
    */
}
