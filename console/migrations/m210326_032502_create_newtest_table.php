<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%newtest}}`.
 */
class m210326_032502_create_newtest_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%newtest}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(100)->notNull(),
            'email' => $this->string()->notNull(),
            'content' => $this->string()->notNull(),
            'create' => $this->dateTime(),
            'updated' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%newtest}}');
    }
}
