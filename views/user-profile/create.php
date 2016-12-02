<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserProfile */

$this->title = 'CREATE  USER  PROFILE';
$this->params['breadcrumbs'][] = ['label' => 'User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-create">

    <h1 align="center";><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
