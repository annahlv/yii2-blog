<?php

use yii\db\Migration;

/**
 * Class m190526_170727_add_date_to_comment
 */
class m190526_170727_add_date_to_comment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('comment','date', $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190526_170727_add_date_to_comment cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190526_170727_add_date_to_comment cannot be reverted.\n";

        return false;
    }
    */
}
