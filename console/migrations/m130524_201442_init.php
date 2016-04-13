<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        // Create CMS tables
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'last_login' => $this->integer()->notNull(),
            'last_login_attempts' => $this->integer()->notNull(),
            'login_attempts' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'is_admin' => $this->tinyInteger()->notNull()->defaultValue(0),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->string()->notNull()->unique(),
            'fullname' => $this->string(100)->notNull(),
            'phone' => $this->string(20)->notNull(),
            'site_lang' => $this->string(5)->unique(),
        ], $tableOptions);
        
        $this->createTable('{{%roles}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull()->unique(),
            'definition' => $this->text()->notNull(),
            'groupname' => $this->string(50)->notNull(),
        ], $tableOptions);
        
        $this->createTable('{{%roles_assigned}}', [
            'user_id' => $this->integer()->notNull(),
            'role_id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        // Seed table with default data
        $this->insert('{{%user}}', [
            'id' => 1,
            'username' => 'root',
            'auth_key' => md5(time()),
            'password_hash' => password_hash('12345'),
            'password_reset_token' => null,
            'email' => 'root@myopensoft.net',
            'last_login' => time(),
            'last_login_attempts' => time(),
            'login_attempts' => 0,
            'status' => 10,
            'is_admin' => 1,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        $this->insert('{{%profile}}', [
            'id' => 1,
            'user_id' => 1,
            'fullname' => 'I am Root!',
            'phone' => '0123456789',
            'site_lang' => 'en',
        ]);
        
        $this->insert('{{%roles}}', [
            'id' => 1,
            'name' => 'root',
            'definition' => 'Super Admin',
            'groupname' => 'superadmin',
        ]);
        
        $this->insert('{{%roles_assigned}}', [
            'user_id' => 1,
            'role_id' => 1,
        ]);
        
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
        $this->dropTable('{{%profile}}');
        $this->dropTable('{{%roles}}');
        $this->dropTable('{{%roles_assigned}}');
    }
}
