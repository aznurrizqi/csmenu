<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%disadvantage}}`.
 */
class m190829_054438_create_disadvantage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%disadvantage}}', [
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
        $this->dropTable('{{%disadvantage}}');
    }
}
