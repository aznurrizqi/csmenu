<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Nutrient */

$this->title = Yii::t('app', 'Create Nutrient');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nutrients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nutrient-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
