<?php

use yii\db\Schema;
use yii\db\Migration;

class m151224_101649_add_id2_to_user extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'id2', $this->integer()->unique());
    }

    public function down()
    {
        $this->dropColumn('user', 'id2');
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
