<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%appeal}}`.
 */
class m220608_050410_create_appeal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%appeal}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200),
            'phone' => $this->string(200),
            'email' => $this->string(200),
            'file' => $this->string(200)->null(),
            'text' => $this->text(),
            'created_at' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%appeal}}');
    }
}
