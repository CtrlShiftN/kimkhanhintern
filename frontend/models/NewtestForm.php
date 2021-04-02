<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "newtest".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $content
 * @property string|null $create
 * @property string|null $updated
 * @property string|null $note
 * @property int|null $admin_id Day La Comment
 */
class NewtestForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'newtest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'content'], 'required'],
            [['create', 'updated'], 'safe'],
            [['note'], 'string'],
            [['admin_id'], 'integer'],
            [['username'], 'string', 'max' => 100],
            [['content'], 'string', 'max' => 255],
            [['email'],'email'],
            // [['tel','validatePhoneNumber']]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'email' => Yii::t('app', 'Email'),
            'content' => Yii::t('app', 'Content'),
            'create' => Yii::t('app', 'Create'),
            'updated' => Yii::t('app', 'Updated'),
            'note' => Yii::t('app', 'Note'),
            'admin_id' => Yii::t('app', 'Admin ID'),
        ];
    }

    public function validatePhoneNumber($attribute, $params){
        
    }
}
