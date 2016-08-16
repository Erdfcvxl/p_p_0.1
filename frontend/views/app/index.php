<?php
use yii\widgets\ListView;
use yii\helpers\Html;
/**
 * Created by PhpStorm.
 * User: Dev
 * Date: 6/23/2016
 * Time: 12:29 PM
 */

$this->title = Yii::t('app', 'Siena');
?>

<div class="row">
    <div class="hidden-xs col-sm-4">
        <?php //$this->render('//app/left/'); ?>
    </div>

    <div class="col-sm-8">
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