<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nutrient}}`.
 */
class m190829_054355_create_nutrient_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%nutrient}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%nutrient}}');
    }
}
