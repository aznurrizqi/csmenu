<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\OnDeficiency */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'On Deficiencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="on-deficiency-view box box-primary">
    <div class="box-header">
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'on_deficiency_category_id',
                'description:ntext',
            ],
        ]) ?>
    </div>
</div>
