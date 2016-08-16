<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = Yii::t('app','Detali informacija');
?>

<?php $form = ActiveForm::begin(); ?>
    <div class="row" style="margin-top: 60px;">
        <div class="col-md-4">
            <h3><?= Yii::t('app','Detali informacija'); ?></h3>

            <p>
                <?= Yii::t('app', 'Informacija kurią pateiksite čia padės žmonėms, bei mūsų paieškos algoritmams suprasti ar Jūs atitinkate tam 
                tikrus kito nario lūkesčius ir ar tiktumėte būti pora. Teisingas detalių užpildymas, turi įtakos rimtesnių santykių vystymo eigoje.'); ?>
            </p>
        </div>
        <div class="col-md-8"><?= $form->field($model, 'aboutme')->textarea(['placeholder' => 'Parašykite kažką apie save']) ?></div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h3>Išvaizda</h3>
            <hr>

            <?= $form->field($model, 'height')->dropDownList($model->makeUgis(), ['prompt' => '']); ?>
            <?= $form->field($model, 'weight')->dropDownList($model->makeSvoris(), ['prompt' => '']); ?>
            <?= $form->field($model, 'physique')->dropDownList($model->sudejimas, ['prompt' => '']); ?>
            <?= $form->field($model, 'hair_length')->dropDownList($model->plaukuIlgis, ['prompt' => '']); ?>
            <?= $form->field($model, 'hair_color')->dropDownList($model->plaukuSpalva, ['prompt' => '']); ?>
            <?= $form->field($model, 'eyes_color')->dropDownList($model->akiuSpalva, ['prompt' => '']); ?>
            <?= $form->field($model, 'apparel')->dropDownList($model->apranga, ['prompt' => '']); ?>

        </div>
        <div class="col-md-4">
            <h3>Pomėgiai</h3>
            <hr>

            <?= $form->field($model, 'music_genre')->textarea(['placeholder' => 'Jums patinkanti/nepatinkanti muzika']) ?>
            <?= $form->field($model, 'movies_genre')->textarea(['placeholder' => 'Jums patinkantys/nepatinkantys filmų žanrai']) ?>
            <?= $form->field($model, 'book_genre')->textarea(['placeholder' => 'Jums patinkantys/nepatinkantys knygų žanrai']) ?>
            <?= $form->field($model, 'hobbies')->textarea(['placeholder' => 'Įrašykite savo pamėgius']) ?>
        </div>
        <div class="col-md-4">
            <h3>Kita</h3>
            <hr>

            <?= $form->field($model, 'addictions')->textarea(['placeholder' => 'Įrašykite savo priklausomybės']) ?>
            <?= $form->field($model, 'education')->dropDownList($model->issilavinimas, ['prompt' => '']) ?>
            <?= $form->field($model, 'earnings')->dropDownList($model->makeUzdarbis(), ['prompt' => '']) ?>
            <?= $form->field($model, 'goal')->dropDownList($model->tikslas, ['prompt' => '']) ?>
            <?= $form->field($model, 'religion')->dropDownList($model->religija, ['prompt' => '']) ?>
            <?= $form->field($model, 'hometown')->dropDownList($model->teviske, ['prompt' => '']) ?>
        </div>

    </div>

    <p  class="well well-sm">Jei nenorite pateikti informacijos apie tam tikrą klausimą, tiesiog palikite laukelį tuščią. Čia nėra privalomų laukelių.</p>

    <?= Html::submitButton('<span class="glyphicon glyphicon-ok pull-left"></span> '.Yii::t('app', 'Išsaugoti'), ['class' => 'btn btn-lg btn-success col-xs-12', 'style' => 'margin-bottom: 60px;']) ?>

<?php ActiveForm::end();?>
