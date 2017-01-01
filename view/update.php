<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model atans\fixedasset\models\FixedAsset */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Fixed Asset',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fixed Assets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="fixed-asset-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
