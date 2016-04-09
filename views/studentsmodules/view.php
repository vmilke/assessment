<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Studentsmodules */

$this->title = $model->id_sm;
$this->params['breadcrumbs'][] = ['label' => 'Studentsmodules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentsmodules-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_sm], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_sm], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_sm',
            'id_mod_cl',
            'SID',
        ],
    ]) ?>

</div>
