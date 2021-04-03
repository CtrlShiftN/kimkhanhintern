<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "response".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property int|null $phone
 * @property string|null $subject
 * @property string|null $body
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
            [['phone'], 'integer'],
            [['name', 'email', 'subject', 'body'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'subject' => Yii::t('app', 'Subject'),
            'body' => Yii::t('app', 'Body'),
        ];
    }
}
