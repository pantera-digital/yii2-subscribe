<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subscribe`.
 */
class m171203_105640_create_subscribe_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('subscribe', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->createIndex('subscribe-email', 'subscribe', 'email', true);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('subscribe');
    }
}
