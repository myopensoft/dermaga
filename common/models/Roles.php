<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "roles".
 *
 * @property string $id
 * @property string $name
 * @property string $definition
 * @property string $groupname
 */
class Roles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['definition'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['groupname'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'definition' => Yii::t('app', 'Definition'),
            'groupname' => Yii::t('app', 'Groupname'),
        ];
    }
}
