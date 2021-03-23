<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%response}}`.
 */
class m210322_111830_create_response_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%response}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(100)->notNull(),
            'email' => $this->string()->notNull(),
            'content' => $this->string()->notNull(),
            'created' => $this->dateTime(),
            'updated' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%response}}');
    }
}
