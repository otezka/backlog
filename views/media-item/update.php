<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MediaItem $model */

$this->title = 'Update Media Item: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Media Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="media-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
