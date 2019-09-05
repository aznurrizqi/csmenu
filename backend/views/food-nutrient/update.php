<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FoodNutrient */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Food Nutrient',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Food Nutrients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="food-nutrient-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
