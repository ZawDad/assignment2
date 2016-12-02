<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userprofile".
 *
 * @property integer $id
 * @property string $full_name
 * @property string $gender
 * @property string $date_of_birth
 * @property string $years_of_experience
 * @property string $industry
 * @property string $location
 * @property string $about_me
 * @property string $profile_picture
 * @property string $professional_title
 * @property string $career_level
 * @property string $communication_level
 * @property string $organizational_level
 * @property string $job_related_level
 * @property string $address
 * @property string $phone_number
 * @property string $website
 * @property string $email
 */
class Userprofile extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userprofile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'gender', 'date_of_birth', 'address', 'phone_number', 'email'], 'required'],
            [['about_me'], 'string'],
            [['full_name'], 'string', 'max' => 80],
            [['gender'], 'string', 'max' => 10],
            [['date_of_birth', 'years_of_experience', 'communication_level', 'organizational_level', 'job_related_level'], 'string', 'max' => 20],
            [['industry'], 'string', 'max' => 100],
            [['location', 'professional_title', 'career_level', 'website'], 'string', 'max' => 50],
            [['profile_picture'], 'string', 'max' => 255],
            [['address'], 'string', 'max' => 250],
            [['phone_number', 'email'], 'string', 'max' => 30],
            [['email'], 'email'],
            [['file'], 'safe'],
            [['file'], 'file', 'extensions'=>'jpg, gif, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'gender' => 'Gender',
            'date_of_birth' => 'Date Of Birth',
            'years_of_experience' => 'Years Of Experience',
            'industry' => 'Industry',
            'location' => 'Location',
            'about_me' => 'About Me',
            'file' => 'Profile Picture',
            'professional_title' => 'Professional Title',
            'career_level' => 'Career Level',
            'communication_level' => 'Communication Level',
            'organizational_level' => 'Organizational Level',
            'job_related_level' => 'Job Related Level',
            'address' => 'Address',
            'phone_number' => 'Phone Number',
            'website' => 'Website',
            'email' => 'Email',
        ];
    }
}
