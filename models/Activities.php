<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "activities".
 *
 * @property integer $id
 * @property string $title
 * @property string $detial
 * @property string $img_name
 * @property string $created_at
 * @property string $updated_at
 * @property integer $user_id
 */
class Activities extends \yii\db\ActiveRecord
{
    
    public $imageFiles;
    
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
    public static function tableName()
    {
        return 'activities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'detial'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 150],
            [['detial', 'img_name'], 'string', 'max' => 5000],
            [['imageFiles'],'file','skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 20],
        ];
    }
    
    
    public function upload(){
        $file_name = "";
        if($this->validate()){
            foreach ($this->imageFiles as $file){
                $file->saveAs('img/activities/'.$file->baseName.'.'.$file->extensioin);
                $file_name[] = $file->baseName.'.'.$file->extensioin;
            }
            return $file_name;
        }else{
            return false;
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'detial' => 'Detial',
            'img_name' => 'Img Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
        ];
    }
    
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
