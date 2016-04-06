<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $fullname
 * @property string $email
 * @property string $phone
 * @property string $site_lang
 * @property string $register_date
 * @property string $update_date
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['register_date', 'update_date'], 'safe'],
            [['fullname', 'email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 20],
            [['site_lang'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'fullname' => Yii::t('app', 'Fullname'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'site_lang' => Yii::t('app', 'Site Lang'),
            'register_date' => Yii::t('app', 'Register Date'),
            'update_date' => Yii::t('app', 'Update Date'),
        ];
    }
}
