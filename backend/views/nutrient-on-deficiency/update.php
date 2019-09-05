<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NutrientOnDeficiency */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Nutrient On Deficiency',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nutrient On Deficiencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="nutrient-on-deficiency-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
