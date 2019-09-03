<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%food_nutrient}}`.
 */
class m190829_054453_create_food_nutrient_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%food_nutrient}}', [
            'id' => $this->primaryKey(),
            'food_id' => $this->integer()->notNull(),
            'nutrient_id' => $this->integer()->notNull(),
            'amount' => $this->float()->notNull(),
            'unit_id' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%food_nutrient}}');
    }
}
