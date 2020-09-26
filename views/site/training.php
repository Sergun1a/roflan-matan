<?php
/* @var $data */

use yii\helpers\Html;
use yii\jui\Accordion;
use yii\widgets\ActiveForm;

$this->title = 'Мат. анализ';
?>

<div class="container">
    <div class="row">
        <?= $data->question; ?>
    </div>
    <div class="row">
        <?php
        $form = ActiveForm::begin([
            'id'                     => 'question-form',
            'options'                => ['style' => 'display: block;'],
            'enableAjaxValidation'   => false,
            'enableClientValidation' => false,
        ]);
        ?>
        <div class="row">
            <?=
            $form->field($data, 'answer', [
                'inputOptions' => [
                    'placeholder' => 'Ваш ответ в виде обыкновенной дроби',
                    'class'       => 'form-control',
                    'value'       => '',
                ],
            ])
                ->textInput();
            ?>
            <div class="form-actions">
                <?= Html::submitButton('Ответить', ['id' => 'submit-btn', 'class' => 'btn btn-success uppercase pull-right']) ?>
            </div>
            <?php if ($data->hasErrors()) { ?>
                <div class="form-actions">
                    <?= Html::Button('Показать решение', [
                        'id'    => 'helper-btn',
                        'class' => 'btn btn-warning uppercase pull-right',
                        'style' => 'margin-right:10px',
                    ]) ?>
                </div>
                <div id="helper" class="row hide next-row"><?= $data->helper ?></div>
            <?php } ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

<script>
  $(document).ready(function () {
    $('#helper-btn').on('click', function () {
      $('#helper').toggleClass('hide', 1000);
    });
  });
</script>
