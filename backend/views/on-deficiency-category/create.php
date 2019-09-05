<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\OnDeficiencyCategory */

$this->title = Yii::t('app', 'Create On Deficiency Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'On Deficiency Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="on-deficiency-category-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
