<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news_files".
 *
 * @property integer $id
 * @property integer $news_id
 * @property string $file_name
 */
class NewsFiles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news_files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['news_id'], 'required'],
            [['news_id'], 'integer'],
            [['file_name'], 'string', 'max' => 300],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['news_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'news_id' => 'News ID',
            'file_name' => 'File Name',
        ];
    }
}
