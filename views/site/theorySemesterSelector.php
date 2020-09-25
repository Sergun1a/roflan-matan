<?php

use yii\helpers\Url;

$this->title = 'Мат. анализ';
?>

    <div class="body-content">
        <div class="row" align="center">
            <div class="jumbotron">
                <h1>Теория</h1>
                <p>Выберите семестр</p>
                <span>
                    <p class="semester-selector">
                        <a class="btn btn-default" href="<?php echo Url::toRoute(['site/theory', 'semestr' => 1]); ?>">Первый семестр &raquo;</a>
                        <a class="btn btn-default" href="<?php echo Url::toRoute(['site/theory', 'semestr' => 2]); ?>">Второй семестр &raquo;</a>
                        <a class="btn btn-default" href="<?php echo Url::toRoute(['site/theory', 'semestr' => 3]); ?>">Третий семестр &raquo;</a>
                    </p>
                </span>
            </div>
        </div>
    </div>
