<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OnDeficiencyCategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'On Deficiency Category',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'On Deficiency Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="on-deficiency-category-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
