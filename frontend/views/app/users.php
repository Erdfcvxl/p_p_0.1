<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

$this->title = Yii::t('app','Nariai');
?>

<div class="row" style="margin-top: 60px;">
    <div class="col-md-4" style="padding-bottom: 60px;">

        <?php $form = ActiveForm::begin(); ?>


            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-orange">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <i class="fa fa-filter"></i> Filtrai <i class="fa fa-caret-down"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
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
                <div class="panel panel-orange no-top-radius">
                    <div class="panel-heading no-top-radius" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-filter"></i> Daugiau filtrų <i class="fa fa-caret-down"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
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

                        <?= $form->field($model, 'music_genre')->textarea(['placeholder' => Yii::t('app', 'Kokia muzika turėtų patikti Jūsų ieškomam partneriui')]) ?>
                        <?= $form->field($model, 'movies_genre')->textarea(['placeholder' => Yii::t('app', 'Kokie filmai turėtų patikti Jūsų ieškomam partneriui')]) ?>
                        <?= $form->field($model, 'book_genre')->textarea(['placeholder' => Yii::t('app', 'Kokios knygos turėtų patikti Jūsų ieškomam partneriui')]) ?>
                        <?= $form->field($model, 'hobbies')->textarea(['placeholder' => Yii::t('app', 'Ką turėtų mėgti Jūsų ieškomas partneris')]) ?>

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
            </div>

            <?= Html::submitButton('<span class="fa fa-search pull-left"></span> '.Yii::t('app', 'Ieškoti'), ['class' => 'btn btn-lg btn-success col-xs-12 no-top-radius']) ?>

        <?php ActiveForm::end(); ?>

    </div>

    <div class="col-md-8">
        <?php \yii2masonry\yii2masonry::begin([
            'clientOptions' => [
                'itemSelector' => '.item'
            ]
        ]); ?>

        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>
        <div class="item"><h3>Test</h3><p>Und mehr Text</p></div>

        <?php \yii2masonry\yii2masonry::end(); ?>
    </div>
</div>
