<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%documment}}`.
 */
class m210327_073100_add_faq_column_to_documment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%documment}}', 'faq', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%documment}}', 'faq');
    }
}
