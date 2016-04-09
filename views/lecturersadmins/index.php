<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LecturersadminsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lecturersadmins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lecturersadmins-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lecturersadmins', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_la',
            'title',
            'name',
            'surname',
            'profession',
            // 'login',
            // 'password',
            // 'email_la:email',
            // 'regdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
