<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%on_deficiency_category}}`.
 */
class m190903_073123_create_on_deficiency_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%on_deficiency_category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%on_deficiency_category}}');
    }
}
