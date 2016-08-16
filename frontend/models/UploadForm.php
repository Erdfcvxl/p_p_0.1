<?php
namespace frontend\models;

use yii\base\Model;
use Yii;
use yii\web\UploadedFile;
use yii\helpers\BaseFileHelper;

class UploadForm extends Model
{
    /**
    * @var UploadedFile
    */
    public $image;

    public function rules()
    {
        return [
            [['image'], 'file', 'skipOnEmpty' => false, 'maxSize' => 1024 * 1024 * 3],
        ];
    }

    public function attributeLabels()
    {
        return [
            'image' => Yii::t('app', 'Nuotrauka')
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $path = 'uploads/' . Yii::$app->user->id . '/';

            if (!is_dir($path))
                BaseFileHelper::createDirectory($path, 0777);

            $baseName = 'profile';
            $ext = $this->image->extension;
            $complete = $path . $baseName . '.' . $ext;

            $model = Photos::find()->where(['u_id' => Yii::$app->user->id])->andWhere(['baseName' => 'profile'])->one();
            if(!$model)
                $model = new Photos;

            $model->u_id = Yii::$app->user->id;
            $model->baseName = $baseName;
            $model->ext = $ext;
            $model->private = 0;
            $model->profile = 1;
            $model->save();

            $model = \common\models\User::findOne(Yii::$app->user->id);
            $model->ext = $ext;
            $model->save();

            $model = Basic_info::findOne(Yii::$app->user->id);
            $model->picture = 1;
            $model->save();

            $this->image->saveAs($complete);
            $this->manipulateImage($baseName, $ext, $complete, $path);

            return true;
        }

        return false;
    }

    public function manipulateImage($baseName, $ext, $org, $path)
    {
        $name[0] = $baseName.'_th1.'.$ext;
        $name[1] = $baseName.'_th2.'.$ext;
        $name[2] = $baseName.'_th3.'.$ext;

        $imagine = new \Imagine\Gd\Imagine;

        $mode    = \Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;

        $size    = new \Imagine\Image\Box(50, 50);
        $imagine->open($org)
            ->thumbnail($size, $mode)
            ->save($path.$name[0]);

        $size    = new \Imagine\Image\Box(100, 100);
        $imagine->open($org)
            ->thumbnail($size, $mode)
            ->save($path.$name[1]);

        $size    = new \Imagine\Image\Box(250, 250);
        $imagine->open($org)
            ->thumbnail($size, $mode)
            ->save($path.$name[2]);

    }
}

?>