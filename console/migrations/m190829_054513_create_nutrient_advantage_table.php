<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nutrient_advantage}}`.
 */
class m190829_054513_create_nutrient_advantage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%nutrient_advantage}}', [
            'id' => $this->primaryKey(),
            'id_nutrient' => $this->integer()->notNull(),
            'id_advantage' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%nutrient_advantage}}');
    }
}
