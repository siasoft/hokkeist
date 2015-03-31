<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\match */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="match-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'sort') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'creator_id') ?>

    <?php // echo $form->field($model, 'updator_id') ?>

    <?php // echo $form->field($model, 'number') ?>

    <?php // echo $form->field($model, 'day') ?>

    <?php // echo $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'team_1') ?>

    <?php // echo $form->field($model, 'team_2') ?>

    <?php // echo $form->field($model, 'stadium_id') ?>

    <?php // echo $form->field($model, 'season_id') ?>

    <?php // echo $form->field($model, 'competition_id') ?>

    <?php // echo $form->field($model, 'division_id') ?>

    <?php // echo $form->field($model, 'stage_id') ?>

    <?php // echo $form->field($model, 'group_id') ?>

    <?php // echo $form->field($model, 'tour_id') ?>

    <?php // echo $form->field($model, 'goal_1') ?>

    <?php // echo $form->field($model, 'goal_2') ?>

    <?php // echo $form->field($model, 'points_1') ?>

    <?php // echo $form->field($model, 'points_2') ?>

    <?php // echo $form->field($model, 'result') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
