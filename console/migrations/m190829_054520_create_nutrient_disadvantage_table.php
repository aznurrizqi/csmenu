<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nutrient_disadvantage}}`.
 */
class m190829_054520_create_nutrient_disadvantage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%nutrient_disadvantage}}', [
            'id' => $this->primaryKey(),
            'id_nutrient' => $this->integer()->notNull(),
            'id_disadvantage' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%nutrient_disadvantage}}');
    }
}
