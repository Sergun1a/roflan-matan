<?php


namespace app\commands;


use app\models\Theory;
use yii\console\Controller;
use yii\helpers\Json;

class ImportController extends Controller
{
    public function actionCsv()
    {
        $csv = fopen('c:\\OSPanel\\domains\\roflan-matan\\web\\questions2.csv.', 'r');
        $labelFlag = 0;
        \Yii::$app->db->createCommand()->truncateTable('theory')->execute();
        while (($row = fgetcsv($csv, 0, ',')) !== false) {
            if ($labelFlag == 0) {
                $labelFlag++;
                continue;
            }
            if (is_null($row)) continue;
            $question = new Theory();
            if (isset($row[0])) {
                $question->question = $row[0];
            }
            if (isset($row[1])) {
                $question->answer = $this->changeAliases(htmlspecialchars($row[1]));
            }
            if (isset($row[2])) {
                $question->helper = $row[2];
            }
            if (isset($row[3])) {
                $question->semestr = $row[3];
            }
            if (isset($row[4]) && $row[4] != "") {
                $question->answer = $this->insertImages(Json::decode($row[4]), $question->answer);
            }
            $question->save(false);
        }
    }

    private function changeAliases($string)
    {
        $string = str_replace('{br}', "<br>", $string);
        return $string;
    }

    private function insertImages($images, $answer)
    {
        $string = $answer;
        if (is_null($images)) return $string;
        foreach ($images as $alias => $image) {
            $string = str_replace('{' . $alias . '}', $image[0], $string);
        }
        return $string;
    }
}
