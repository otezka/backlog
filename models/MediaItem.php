<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "media_item".
 *
 * @property int $id
 * @property string $title
 * @property string $type
 * @property string|null $image_url
 * @property string $status
 * @property float|null $rating
 * @property string|null $comment
 * @property string|null $platform
 * @property int $created_at
 */
class MediaItem extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'media_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image_url', 'rating', 'comment', 'platform'], 'default', 'value' => null],
            [['status'], 'default', 'value' => 'planned'],
            [['title', 'type', 'created_at'], 'required'],
            [['rating'], 'number'],
            [['comment'], 'string'],
            [['created_at'], 'integer'],
            [['title'], 'string', 'max' => 200],
            [['type', 'status'], 'string', 'max' => 20],
            [['image_url'], 'string', 'max' => 500],
            [['platform'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'type' => 'Type',
            'image_url' => 'Image Url',
            'status' => 'Status',
            'rating' => 'Rating',
            'comment' => 'Comment',
            'platform' => 'Platform',
            'created_at' => 'Created At',
        ];
    }

}
