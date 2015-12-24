<?php

use yii\db\Schema;
use yii\db\Migration;

class m151224_133640_add_approve_to_user extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'approve', $this->boolean()->notNull()->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('user', 'approve');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
