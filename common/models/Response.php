<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "response".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $content
 * @property string|null $created
 * @property string|null $updated
 * @property string|null $note
 * @property int|null $admin_id Day la comment
 */
class Response extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'response';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'content'], 'required'],
            [['created', 'updated'], 'safe'],
            [['note'], 'string'],
            [['admin_id'], 'integer'],
            [['username'], 'string', 'max' => 100],
            [['email', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => 'Tên người dùng',
            'email' => Yii::t('app', 'Email'),
            'content' => Yii::t('app', 'Content'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'note' => Yii::t('app', 'Note'),
            'admin_id' => Yii::t('app', 'Admin ID'),
        ];
    }
}
