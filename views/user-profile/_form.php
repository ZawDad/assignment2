<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-profile-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data'],'layout' => 'horizontal']); ?>

    <legend><h2><strong>Basic Information</strong></h2></legend>

<?= $form->field($model, 'full_name', [
        'inputOptions' => [
            'placeholder' => 'First & Last Name',
        ],
    ]); ?>

<?php
    $a= ['Male' => 'Male','Female' => 'Female', 'Other' => 'Other'];
    echo $form->field($model, 'gender',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

<?= $form->field($model, 'date_of_birth')->widget(\yii\jui\DatePicker::classname(), [
    'dateFormat' => 'yyyy-MM-dd', 'options' => ['class' => 'form-control']
]) ?>

 <?= $form->field($model, 'years_of_experience')->radioList(['1-4 Years'=>'1-4 Years', '5-10 Years'=>'5-10 Years','Over 10 Years'=>'Over 10 Years']) ?>

 <?php
    $a= ['Medical' => 'Medical','Construction' => 'Construction', 'Education' => 'Education', 'Information Technology' => 'Information Technology'];
    echo $form->field($model, 'industry',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

 <?php
    $a= ['St. Thomas' => 'St. Thomas', 'Kingston' => 'Kingston', 'St. Andrew' => 'St. Andrew', 'St. Catherine' => 'St. Catherine',
        'Clarendon' => 'Clarendon', 'Manchester' => 'Manchester', 'St. Elizabeth' => 'St. Elizabeth', 'Westmoreland' => 'Westmoreland',
        'Hanover' => 'Hanover', 'St. James' => 'St.James', 'Trelawny' => 'Trelawny', 'St. Ann' => 'St.Ann', 'St. Mary' => 'St.Mary',
        'Portland' => 'Portland'];
    echo $form->field($model, 'location',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

<?= $form->field($model, 'about_me')->textarea(['rows' => 6]) ?>

<?= $form->field($model, 'file')->fileInput() ?>
<?php 
if ($model->profile_picture){
    echo '<div class="im" style="padding-left:12em;">';
    echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->profile_picture.'" width="90px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    echo Html::a('Delete Profile Picture', ['userprofile/deleteprofile_picture', 'id'=>$model->id], ['class'=>'btn btn-danger']).'</br>';
    echo '</div>';
}
?>


<legend><h2><strong>Skills</strong></h2></legend>

<?= $form->field($model, 'professional_title', [
        'inputOptions' => [
            'placeholder' => 'eg. Manager',
        ],
    ]); ?>

<?php
    $a= ['Entry Level/Recent Graduate' => 'Entry Level/Recent Graduate', 'Professional Level' => 'Professional Level', 
    'Senior Professional Level/Mid-Level Management' => 'Senior Proffesional Level/Mid-Level Management', 
    'Executive/Senior-Level Management' => 'Executive/Senior-Level Management'];
    echo $form->field($model, 'career_level',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-3',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

<?php
    $a= ['1-10 %' => '1-10 %','11-20 %' => '11-20 %', '21-30 %' => '21-30 %', '31-40 %' => '31-40 %', '41-50 %'=> '41-50 %',
     '51-60 %'=> '51-60 %', '61-70 %'=> '61-70 %', '71-80 %'=> '71-80 %', '81-90 %'=> '81-90 %', '91-100 %'=> '91-100 %'];
    echo $form->field($model, 'communication_level',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

<?php
    $a= ['1-10 %' => '1-10 %','11-20 %' => '11-20 %', '21-30 %' => '21-30 %', '31-40 %' => '31-40 %', '41-50 %'=> '41-50 %',
     '51-60 %'=> '51-60 %', '61-70 %'=> '61-70 %', '71-80 %'=> '71-80 %', '81-90 %'=> '81-90 %', '91-100 %'=> '91-100 %'];
    echo $form->field($model, 'organizational_level',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

<?php
    $a= ['1-10 %' => '1-10 %','11-20 %' => '11-20 %', '21-30 %' => '21-30 %', '31-40 %' => '31-40 %', '41-50 %'=> '41-50 %',
     '51-60 %'=> '51-60 %', '61-70 %'=> '61-70 %', '71-80 %'=> '71-80 %', '81-90 %'=> '81-90 %', '91-100 %'=> '91-100 %'];
    echo $form->field($model, 'job_related_level',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

<legend><h2><strong>Contact</strong></h2></legend>

<?= $form->field($model, 'address', [
        'inputOptions' => [
            'placeholder' => '',
        ],
    ]); ?>

<?= $form->field($model, 'phone_number', [
        'inputOptions' => [
            'placeholder' => '876-881-5623',
        ],
    ]); ?>

<?= $form->field($model, 'website', [
        'inputOptions' => [
            'placeholder' => 'www.appliedwebasignment.com',
        ],
    ]); ?>

<?= $form->field($model, 'email', [
        'inputOptions' => [
            'placeholder' => 'fullmarks@assignment.com',
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
