<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%response}}`.
 */
class m210322_112404_add_note_column_admin_id_column_to_response_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%response}}', 'note', $this->text());
        $this->addColumn('{{%response}}', 'admin_id', $this->smallInteger(8)->comment('Day la comment'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%response}}', 'note');
        $this->dropColumn('{{%response}}', 'admin_id');
    }
}
