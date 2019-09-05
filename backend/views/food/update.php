<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Food */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Food',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Foods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="food-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
