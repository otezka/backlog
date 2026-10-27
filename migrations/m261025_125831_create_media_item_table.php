<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%media_item}}`.
 */
class m261025_125831_create_media_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%media_item}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200)->notNull(),
            'type' => $this->string(20)->notNull(),
            'image_url' => $this->string(500),
            'status' => $this->string(20)
                ->notNull()
                ->defaultValue('planned'),
            'rating' => $this->decimal(3, 1),
            'comment' => $this->text(),
            'platform' => $this->string(100),
            'created_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%media_item}}');
    }
}
