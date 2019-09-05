<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\NutrientOnDeficiency */

$this->title = Yii::t('app', 'Create Nutrient On Deficiency');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nutrient On Deficiencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nutrient-on-deficiency-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
