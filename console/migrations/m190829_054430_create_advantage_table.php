<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%advantage}}`.
 */
class m190829_054430_create_advantage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%advantage}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%advantage}}');
    }
}
