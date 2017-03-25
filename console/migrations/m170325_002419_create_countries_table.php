<?php

use yii\db\Migration;

/**
 * Handles the creation of table `countries`.
 */
class m170325_002419_create_countries_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('countries', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('countries');
    }
}
