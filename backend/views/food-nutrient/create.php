<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FoodNutrient */

$this->title = Yii::t('app', 'Create Food Nutrient');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Food Nutrients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-nutrient-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
