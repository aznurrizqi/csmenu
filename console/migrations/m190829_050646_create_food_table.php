<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%food}}`.
 */
class m190829_050646_create_food_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%food}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),          
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%food}}');
    }
}
