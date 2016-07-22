<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news_pics".
 *
 * @property integer $id
 * @property integer $news_id
 * @property string $pic_name
 */
class NewsPics extends \yii\db\ActiveRecord
{
    public $pics;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news_pics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['news_id', 'pic_name'], 'required'],
            [['news_id'], 'integer'],
            [['pic_name'], 'string', 'max' => 300],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['news_id' => 'id']],
            [['pics'], 'file', 'extensions' => 'jpg,png,gif', 'maxFiles' => 20],
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
            'pic_name' => 'Pic Name',
            'pics' => 'อัพโหลด **รูปภาพ'
        ];
    }
}
