<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MediaItem $model */

$this->title = 'Create Media Item';
$this->params['breadcrumbs'][] = ['label' => 'Media Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="media-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
