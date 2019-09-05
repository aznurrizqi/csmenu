<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Food */

$this->title = Yii::t('app', 'Create Food');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Foods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
