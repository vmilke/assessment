<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lecturersadmins */

$this->title = 'Update Lecturersadmins: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Lecturersadmins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id_la]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lecturersadmins-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
