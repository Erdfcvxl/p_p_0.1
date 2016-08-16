<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\select2\Select2;

$this->title = Yii::t('app','Paieškos informacija');
?>

<?php $form = ActiveForm::begin(); ?>

<div class="row" style="margin-top: 60px;">
    <div class="col-xs-12">
        <h2><?= Yii::t('app','Paieškos informacija'); ?></h2>

        <p>
            <?= Yii::t('app', 'Informacija kurią pateiksite čia padės žmonėms, bei mūsų paieškos algoritmams suprasti kokio žmogaus Jūs ieškote.'); ?>
        </p>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <h3><?= Yii::t('app','Pagrindinė informacija') ?></h3>
        <hr>
    </div>
</div>

<div class="row">

    <div class="col-sm-6">
        <?= $form->field($model, 'sex')->widget(Select2::classname(), [
            'data' => $model->_sex,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]); ?>

        <div class="row">
            <div class="col-xs-6"><?= $form->field($model, 'min_years')->dropDownList($model->getYears(), ['prompt' => '']);?></div>
            <div class="col-xs-6"><?= $form->field($model, 'max_years')->dropDownList($model->getYears(), ['prompt' => '']);?></div>
        </div>
    </div>

    <div class="col-sm-6">
        <?= $form->field($model, 'city')->widget(Select2::classname(), [
            'data' => $model->getCities(),
            'options' => [
                'placeholder' => 'Pasirinkite miestą ...',
            ],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true,
            ],
        ]);?>

        <?= $form->field($model, 'orentation')->widget(Select2::classname(), [
            'data' => $model->_orentation,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]); ?>
    </div>

</div>

<div class="row">
    <div class="col-md-4">
        <h3>Išvaizda</h3>
        <hr>

        <div class="row">
            <div class="col-xs-6"><?= $form->field($model, 'min_height')->dropDownList($model->makeUgis(), ['prompt' => '']); ?></div>
            <div class="col-xs-6"><?= $form->field($model, 'max_height')->dropDownList($model->makeUgis(), ['prompt' => '']); ?></div>
        </div>

        <div class="row">
            <div class="col-xs-6"><?= $form->field($model, 'min_weight')->dropDownList($model->makeSvoris(), ['prompt' => '']); ?></div>
            <div class="col-xs-6"><?= $form->field($model, 'max_weight')->dropDownList($model->makeSvoris(), ['prompt' => '']); ?></div>
        </div>

        <?= $form->field($model, 'physique')->widget(Select2::classname(), [
            'data' => $model->sudejimas,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]); ?>

        <?= $form->field($model, 'hair_length')->widget(Select2::classname(), [
            'data' => $model->plaukuIlgis,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]); ?>

        <?= $form->field($model, 'hair_color')->widget(Select2::classname(), [
            'data' => $model->plaukuSpalva,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]); ?>

        <?= $form->field($model, 'eyes_color')->widget(Select2::classname(), [
            'data' => $model->akiuSpalva,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]); ?>

        <?= $form->field($model, 'apparel')->widget(Select2::classname(), [
            'data' => $model->apranga,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]); ?>


    </div>
    <div class="col-md-4">
        <h3>Pomėgiai</h3>
        <hr>

        <?= $form->field($model, 'music_genre')->textarea(['placeholder' => Yii::t('app', 'Kokia muzika turėtų patikti Jūsų ieškomam partneriui')]) ?>
        <?= $form->field($model, 'movies_genre')->textarea(['placeholder' => Yii::t('app', 'Kokie filmai turėtų patikti Jūsų ieškomam partneriui')]) ?>
        <?= $form->field($model, 'book_genre')->textarea(['placeholder' => Yii::t('app', 'Kokios knygos turėtų patikti Jūsų ieškomam partneriui')]) ?>
        <?= $form->field($model, 'hobbies')->textarea(['placeholder' => Yii::t('app', 'Ką turėtų mėgti Jūsų ieškomas partneris')]) ?>
    </div>
    <div class="col-md-4">
        <h3>Kita</h3>
        <hr>

        <?= $form->field($model, 'addictions')->textarea(['placeholder' => 'Kokios priklausomybės yra priimtinos ir nepriimtinos Jūsų ieškomam partneriui']) ?>

        <?= $form->field($model, 'education')->widget(Select2::classname(), [
            'data' => $model->issilavinimas,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]); ?>

        <?= $form->field($model, 'earnings')->widget(Select2::classname(), [
            'data' => $model->makeUzdarbis(),
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]); ?>

        <?= $form->field($model, 'goal')->widget(Select2::classname(), [
            'data' => $model->tikslas,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]); ?>

        <?= $form->field($model, 'religion')->widget(Select2::classname(), [
            'data' => $model->religija,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]); ?>

        <?= $form->field($model, 'hometown')->widget(Select2::classname(), [
            'data' => $model->teviske,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]); ?>
    </div>

</div>

<p  class="well well-sm">Jei tam tikras klausimas jums nesvarbus, tiesiog palikite laukelį tuščią. Čia nėra privalomų laukelių.</p>

<?= Html::submitButton('<span class="glyphicon glyphicon-ok pull-left"></span> '.Yii::t('app', 'Išsaugoti'), ['class' => 'btn btn-lg btn-success col-xs-12', 'style' => 'margin-bottom: 60px;']) ?>

<?php ActiveForm::end();?>
