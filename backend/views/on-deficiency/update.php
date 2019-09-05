<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OnDeficiency */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'On Deficiency',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'On Deficiencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="on-deficiency-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
