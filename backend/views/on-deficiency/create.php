<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\OnDeficiency */

$this->title = Yii::t('app', 'Create On Deficiency');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'On Deficiencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="on-deficiency-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
