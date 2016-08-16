<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

$avatar = \frontend\models\Misc::getAvatar(Yii::$app->user->id, '_th3');

$this->title = Yii::t('app','Profilio nuotrauka');
?>


<div class="row" style="margin-top: 60px; margin-bottom: 60px;">
    <div class="col-md-4" style="margin-bottom: 30px;">
        <h4><?= Yii::t('app', 'Profilio nuotrauka');?></h4>
        <p><?= Yii::t('app', 'Nuotraukos yra labai svarbus aspektas ieškant antrosios pusės. Nariai turintys profilio nuotrauką susilaukia kur kas daugiau dėmesio, nei nariai neturintys asmeninių nuotraukų.');?></p>

        <small>
            <?= Yii::t('app', 'Administratoriai pasilieka teisę be perspėjimo trinti netinkamas nuotraukas.');?>
        </small>
    </div>

    <div class="col-md-4 col-sm-6 avatar" style="text-align: center; margin-bottom: 35px;">
        <h4>Dabartinė nuotrauka</h4>
        <?php if($avatar): ?>
            <img src="<?= $avatar ?>" width="180px">
        <?php else: ?>
            <div class="avatar avatar-black avatar-big"><span class="fa fa-user"></span></div>
        <?php endif; ?>
    </div>

    <div class="col-md-4 col-sm-6">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'image')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            'pluginOptions' => [
                'showPreview' => true,
                'showCaption' => true,
                'showRemove' => true,
                'showUpload' => false,
                'lang' => 'lt'
            ]
        ]); ?>

        <?= Html::submitButton('<span style="font-size: 23px;" class="glyphicon glyphicon-upload pull-left"></span> '.Yii::t('app', 'Įkelti'), ['class' => 'btn btn-lg btn-success col-xs-12']) ?>


        <?php ActiveForm::end(); ?>
    </div>
</div>



