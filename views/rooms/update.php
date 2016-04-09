<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rooms */

$this->title = 'Update Rooms: ' . ' ' . $model->id_room;
$this->params['breadcrumbs'][] = ['label' => 'Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_room, 'url' => ['view', 'id' => $model->id_room]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rooms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
