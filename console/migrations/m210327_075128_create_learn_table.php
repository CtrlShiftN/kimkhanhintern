<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%learn}}`.
 */
class m210327_075128_create_learn_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%learn}}', [
            'id' => $this->primaryKey(),
            'questions' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%learn}}');
    }
}
