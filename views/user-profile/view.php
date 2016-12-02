<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfile */

//$this->title = $model->full_name.'\'s'.' Profile';
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php 
    if($model->profile_picture == NULL){
        echo '<img src="images/aw.png" width="190px">';
    }else{
        echo '<div class="im" style="padding-bottom:5px;">';
        echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->profile_picture.'" width="190px">';
        echo '</div>';}
    ?>


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'full_name',
            'gender',
            'date_of_birth',
            'years_of_experience',
            'industry',
            'location',
            'about_me:ntext',
            'profile_picture',
            'professional_title',
            'career_level',
            'communication_level',
            'organizational_level',
            'job_related_level',
            'address',
            'phone_number',
            'website',
            'email:email',
        ],
    ]) ?>

</div>
