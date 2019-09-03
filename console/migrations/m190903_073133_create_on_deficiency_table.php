<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%on_deficiency}}`.
 */
class m190903_073133_create_on_deficiency_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%on_deficiency}}', [
            'id' => $this->primaryKey(),
            'on_deficiency_category_id' => $this->integer()->notNull(),
            'description' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%on_deficiency}}');
    }
}
