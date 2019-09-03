<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%measurement_unit}}`.
 */
class m190829_054405_create_measurement_unit_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%measurement_unit}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
            'description' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%measurement_unit}}');
    }
}
