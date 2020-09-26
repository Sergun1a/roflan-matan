<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%training}}`.
 */
class m200926_100214_create_training_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('training', [
            'id'       => $this->primaryKey(),
            'semestr'  => $this->integer(2),
            'question' => $this->text(),
            'answer'   => $this->text(),
            'helper'   => $this->text(),
        ]);

        $question = new \app\models\Training([
            'semestr'  => 1,
            'question' => '<img width="400" src="/web/images/questions/s1v1.png">',
            'answer'   => '1/144',
            'helper'   => '<img width="700" src="/web/images/questions/s1v1-helper.png">',
        ]);
        $question->save(false);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('training');
    }
}
