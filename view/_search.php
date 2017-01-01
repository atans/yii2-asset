<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model atans\fixedasset\models\FixedAssetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fixed-asset-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'parent_id') ?>

    <?= $form->field($model, 'location_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'purchased_at') ?>

    <?php // echo $form->field($model, 'purchase_from') ?>

    <?php // echo $form->field($model, 'quality') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('asset', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('asset', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
