<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "information".
 *
 * @property integer $id
 * @property string $title
 * @property string $detial
 * @property string $pic_name
 * @property string $created_at
 * @property string $updated_at
 * @property integer $user_id
 *
 * @property User $user
 */
class Information extends \yii\db\ActiveRecord
{
    public $file;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'information';
    }
    
    public function behaviors() {
        return[
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'detial'], 'required'],
            [['title'], 'string', 'max' => 300],
            [['detial'], 'string', 'max' => 5000],
            [['file'],'file'],
            [['pic_name'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'เรื่อง',
            'detial' => 'รายละเอียด',
            'pic_name' => 'Pic Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'file' => 'รูปภาพ',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
