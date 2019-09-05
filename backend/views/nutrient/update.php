<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nutrient */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Nutrient',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nutrients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="nutrient-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
