<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "documment".
 *
 * @property int $id
 * @property string $title
 * @property string $avatar
 * @property string $link
 * @property int|null $status 0:file, 1:image, 2:note
 * @property string|null $create
 * @property string|null $update
 */
class Documment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'avatar', 'link'], 'required'],
            [['status'], 'integer'],
            [['create', 'update'], 'safe'],
            [['title', 'avatar'], 'string', 'max' => 255],
            [['link'],'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'avatar' => Yii::t('app', 'Avatar'),
            'link' => Yii::t('app', 'Link'),
            'status' => Yii::t('app', '0:file, 1:image, 2:note'),
            'create' => Yii::t('app', 'Create'),
            'update' => Yii::t('app', 'Update'),
        ];
    }
}
