<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

$this->title = Yii::t('app','Pagrindinė informacija');
?>


<div class="row" style="margin-top: 60px; margin-bottom: 60px;">
    <div class="col-md-4">
        <h4><?= Yii::t('app','Pagrindinė informacija') ?></h4>
        <p><?= Yii::t('app', 'Tik užpildžius šiuos laukelius apie save Jūs galėsite naudotis portalu. Informacija pateikta čia yra reikalinga visoms svetainės funkcijoms.') ?></p>
    </div>

    <div class="col-md-8">
        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'sex')->dropDownList($model->_sex);?>

            <div class="row">
                <div class="col-xs-4"><?= $form->field($model, 'year')->dropDownList($model->getYears());?></div>
                <div class="col-xs-4"><?= $form->field($model, 'month')->dropDownList($model->getMonths());?></div>
                <div class="col-xs-4"><?= $form->field($model, 'day')->dropDownList($model->getDays());?></div>
            </div>

            <?= $form->field($model, 'city')->widget(Select2::classname(), [
                'data' => $model->getCities(),
                'options' => ['placeholder' => 'Pasirinkite miestą ...'],
            ]);?>
            <?= $form->field($model, 'orentation')->dropDownList($model->_orentation);?>

            <?= Html::submitButton('<span class="glyphicon glyphicon-ok pull-left"></span> '.Yii::t('app', 'Išsaugoti'), ['class' => 'btn btn-lg btn-success col-xs-12']) ?>


        <?php ActiveForm::end(); ?>
    </div>
</div>


