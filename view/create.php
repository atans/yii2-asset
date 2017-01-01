<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model atans\asset\models\Asset */

$this->title = Yii::t('asset', 'Create Fixed Asset');
$this->params['breadcrumbs'][] = ['label' => Yii::t('asset', 'Fixed Assets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fixed-asset-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
