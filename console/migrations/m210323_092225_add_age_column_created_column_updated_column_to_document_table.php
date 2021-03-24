<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%document}}`.
 */
class m210323_092225_add_age_column_created_column_updated_column_to_document_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%document}}', 'age', $this->integer());
        $this->addColumn('{{%document}}', 'created', $this->datetime());
        $this->addColumn('{{%document}}', 'update', $this->datetime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%document}}', 'age');
        $this->dropColumn('{{%document}}', 'created');
        $this->dropColumn('{{%document}}', 'update');
    }
}
