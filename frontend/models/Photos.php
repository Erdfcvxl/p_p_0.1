<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "photos".
 *
 * @property integer $id
 * @property integer $u_id
 * @property string $baseName
 * @property string $ext
 * @property integer $private
 * @property integer $profile
 * @property integer $likes
 */
class Photos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id', 'baseName', 'ext', 'private', 'profile', 'likes'], 'safe'],
            [['u_id', 'private', 'profile', 'likes'], 'integer'],
            [['baseName'], 'string'],
            [['ext'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'u_id' => Yii::t('app', 'U ID'),
            'baseName' => Yii::t('app', 'Base Name'),
            'ext' => Yii::t('app', 'Ext'),
            'private' => Yii::t('app', 'Private'),
            'profile' => Yii::t('app', 'Profile'),
            'likes' => Yii::t('app', 'Likes'),
        ];
    }
}
