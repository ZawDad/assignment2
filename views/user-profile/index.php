<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'USER  PROFILES';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-index">

<p align="center";><img src="images/aw.png" style="height:70px;"> APPLIED WEB <strong>Development</strong></p>

    <h1 align="center";><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Profile', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'full_name',
            'gender',
            'date_of_birth',
            'years_of_experience',
            // 'industry',
            // 'location',
            // 'about_me:ntext',
            // 'profile_picture',
            // 'professional_title',
            // 'career_level',
            // 'communication_level',
            // 'organizational_level',
            // 'job_related_level',
            // 'address',
            // 'phone_number',
            // 'website',
            // 'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
