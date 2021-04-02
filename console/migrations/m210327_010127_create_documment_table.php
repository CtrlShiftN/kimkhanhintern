<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%documment}}`.
 */
class m210327_010127_create_documment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%documment}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'avatar' =>$this->string()->notNull(),
            'link'=>$this->string()->notNull(),
            'status'=>$this->smallInteger(3)->defaultValue(0)->comment('0:file, 1:image, 2:note'),
            'create' =>$this->dateTime(),
            'update' =>$this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%documment}}');
    }
}
