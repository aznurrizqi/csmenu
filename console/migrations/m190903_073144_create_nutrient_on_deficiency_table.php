<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nutrient_on_deficiency}}`.
 */
class m190903_073144_create_nutrient_on_deficiency_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%nutrient_on_deficiency}}', [
            'id' => $this->primaryKey(),
            'nutrient_id' => $this->integer()->notNull(),
            'on_deficiency_id' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%nutrient_on_deficiency}}');
    }
}
