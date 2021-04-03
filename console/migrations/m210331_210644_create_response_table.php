<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%response}}`.
 */
class m210331_210644_create_response_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%response}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->integer(),
            'subject' => $this->string(),
            'body' => $this->string(),
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
