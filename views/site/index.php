<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\jui\Accordion;

$this->title = 'Рофлан матан';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Матан</h1>

        <p class="lead">Помоги себе не отчислиться XD</p>
    </div>

    <div class="body-content">

        <div class="row" align="center">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <h2>Тренажер</h2>
                <p>Попробуйте свои силы на теоритических вопросах.</p>
                <span>
                    <p class="semester-selector">
                        <a class="btn btn-default"
                           href="<?php echo Url::toRoute(['site/training', 'semestr' => 1]); ?>">Первый семестр &raquo;</a>
                        <a class="btn btn-default"
                           href="<?php echo Url::toRoute(['site/training', 'semestr' => 2]); ?>">Второй семестр &raquo;</a>
                        <a class="btn btn-default"
                           href="<?php echo Url::toRoute(['site/training', 'semestr' => 3]); ?>">Третий семестр &raquo;</a>
                    </p>
                </span>

            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <h2>Теория</h2>
                <p>Теоритическая информация</p>
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
</div>
<?php
/*echo Accordion::widget([
    'items' => [
        [
            'header' => 'Вопрос 1',
            'content' => 'Mauris mauris ante, blandit et, ultrices a, suscipit eget...',
            'options' => ['tag' => 'div'],
        ],
        [
            'header' => 'Вопрос 2',
            'headerOptions' => ['tag' => 'h3'],
            'content' => 'Sed non urna. Phasellus eu ligula. Vestibulum sit amet purus...',
            'options' => ['tag' => 'div'],
        ],
    ],
    'options' => ['tag' => 'div'],
    'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['tag' => 'h3'],
    'clientOptions' => ['collapsible' => true, 'active' => none],
]);*/
?>
