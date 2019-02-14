<?php

use yii\db\Migration;

/**
 * Handles adding files to table `hosts`.
 */
class m190214_091244_add_files_column_to_hosts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('hosts','inc_file',$this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropColumn('hosts','inc_file');
    }
}
