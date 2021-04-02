<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%newtest}}`.
 */
class m210326_034400_add_note_column_admin_id_column_to_newtest_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%newtest}}', 'note', $this->text());
        $this->addColumn('{{%newtest}}', 'admin_id', $this->smallInteger(8)->comment('Day La Comment'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%newtest}}', 'note');
        $this->dropColumn('{{%newtest}}', 'admin_id');
    }
}
