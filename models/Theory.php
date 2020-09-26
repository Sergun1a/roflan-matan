<?php


namespace app\models;


use yii\db\ActiveRecord;

/**
 * This is the model class for table "theory".
 *
 * @property integer $id
 * @property string $question
 * @property string $answer
 * @property string $helper
 * @property int $semestr
 **/
class Theory extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'theory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'semestr'], 'integer'],
            [['question', 'answer', 'helper'], 'string'],
        ];
    }
}
