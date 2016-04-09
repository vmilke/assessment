<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Modulesclasses */


$this->title = 'Update Modules or Classes: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Modulesclasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id_mod_cl]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modulesclasses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
