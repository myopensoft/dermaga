<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Roles */

$this->title = Yii::t('app', 'Update {modelClass} ', [
    'modelClass' => 'Role',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Roles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="roles-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
