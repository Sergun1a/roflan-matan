<?php

namespace app\models;

use yii\db\ActiveRecord;

class Training extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'training';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'semestr'], 'integer'],
            [['question', 'answer', 'helper'], 'string'],
            [['answer'], 'checkAnswer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'answer' => 'Ответ',
        ];
    }

    public function checkAnswer($attribute, $params)
    {
        if ($this->answer != $this->getOldAttribute('answer')) {
            $this->addError($attribute, 'Неверный ответ');
        }
    }
}
