<?php

use Phpmig\Migration\Migration;

class KsUser extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $table = new Doctrine\DBAL\Schema\Table('user');
        $table->addColumn('id', 'integer', array('unsigned' => true, 'autoincrement'=> true));
        $table->addColumn('name', 'string', array('length' => 10, 'null' => false, 'comment' => '用户名'));
        $table->addColumn('roles', 'string', array('length' => 10, 'null' => false, 'comment' => '角色'));
        $table->addColumn('picture', 'string', array('length' => 60, 'comment' => '头像'));
        $table->addColumn('mobile', 'string', array('length' => 20, 'comment' => '手机号'));
        $table->addColumn('password', 'string', array('null' => false, 'length' => 20, 'comment' => '密码'));
        $table->addColumn('email', 'string', array('null' => false, 'length' => 20, 'comment' => '邮箱'));
        $table->addColumn('followNum', 'integer', array('unsigned' => true, 'comment' => '被关注总数'));
        
        $table->setPrimaryKey(array('id'));
        $container['db']->getSchemaManager()->createTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $container = $this->getContainer();
        $container['db']->getSchemaManager()->dropTable('user');
    }
}
