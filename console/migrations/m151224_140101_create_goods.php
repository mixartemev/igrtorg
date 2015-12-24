<?php

use yii\db\Schema;

class m151224_140101_create_goods extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('goods', [
            'code' => Schema::TYPE_INTEGER . '(8) NOT NULL',
            'id_rubric' => Schema::TYPE_INTEGER . '(8) NOT NULL',
            'ost' => Schema::TYPE_INTEGER . '(8) NOT NULL',
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'package' => Schema::TYPE_INTEGER . '(8) NOT NULL',
            'volume' => Schema::TYPE_STRING . '(12) NOT NULL',
            'price' => Schema::TYPE_INTEGER . '(12) NOT NULL',
            'vkor' => Schema::TYPE_INTEGER . '(8) NOT NULL',
            'day' => Schema::TYPE_DATE . ' NOT NULL',
            'PRIMARY KEY ([[code]])',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('goods');
    }
}
