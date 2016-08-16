<?php
use yii\helpers\Url;
use frontend\models\Basic_info;

$this->registerCssFile('/css/plugins.css');
?>

<div class="hidden-xs" style="margin-top: 60px;">
    <div class="row">
        <div class="process">
            <div class="process-row nav nav-tabs">
                <div class="process-step">
                    <a class="btn btn-<?= ($psl == 'basic')? 'orange' : 'main' ?> btn-rect" href="<?= Url::current(['psl' => null]) ?>"><i class="fa fa-info fa-3x"></i></a>
                    <p><?= Basic_info::check(1); ?><small>Užpildykite<br />pagrindinė informaciją</small></p>
                </div>
                <div class="process-step">
                    <a class="btn btn-<?= ($psl == 'foto')? 'orange' : 'main' ?> btn-rect" href="<?= Url::current(['psl' => 'foto']) ?>"><i class="fa fa-picture-o fa-3x"></i></a>
                    <p><?= Basic_info::check(2); ?><small>Įkelkite<br /> Nuotrauką</small></p>
                </div>
                <div class="process-step">
                    <a class="btn btn-<?= ($psl == 'detail')? 'orange' : 'main' ?> btn-rect" href="<?= Url::current(['psl' => 'detail']) ?>"><i class="fa fa-file-text-o fa-3x"></i></a>
                    <p><?= Basic_info::check(3); ?><small>Užpildykite<br />detaliąją informaciją</small></p>
                </div>
                <div class="process-step">
                    <a class="btn btn-<?= ($psl == 'search')? 'orange' : 'main' ?> btn-rect" href="<?= Url::current(['psl' => 'search']) ?>"><i class="fa fa-cogs fa-3x"></i></a>
                    <p><?= Basic_info::check(4); ?><small>Užpildykite<br />paieškos informaciją</small></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hidden-sm hidden-md hidden-lg smallstep" style="margin-top: 60px;">
    <div class="row">
        <div class="process">
            <div class="process-row nav nav-tabs">
                <div class="process-step">
                    <a class="btn btn-<?= ($psl == 'basic')? 'orange' : 'main' ?> btn-rect" href="<?= Url::current(['psl' => null]) ?>"><i class="fa fa-info fa-2x"></i></a>
                    <p><?= Basic_info::check(1); ?><small>Užpildykite<br />pagrindinė informaciją</small></p>
                </div>
                <div class="process-step">
                    <a class="btn btn-<?= ($psl == 'foto')? 'orange' : 'main' ?> btn-rect" href="<?= Url::current(['psl' => 'foto']) ?>"><i class="fa fa-picture-o fa-2x"></i></a>
                    <p><?= Basic_info::check(2); ?><small>Įkelkite<br /> Nuotrauką</small></p>
                </div>
                <div class="process-step">
                    <a class="btn btn-<?= ($psl == 'detail')? 'orange' : 'main' ?> btn-rect" href="<?= Url::current(['psl' => 'detail']) ?>"><i class="fa fa-file-text-o fa-2x"></i></a>
                    <p><?= Basic_info::check(3); ?><small>Užpildykite<br />detaliąją informaciją</small></p>
                </div>
                <div class="process-step">
                    <a class="btn btn-<?= ($psl == 'search')? 'orange' : 'main' ?> btn-rect" href="<?= Url::current(['psl' => 'search']) ?>"><i class="fa fa-cogs fa-2x"></i></a>
                    <p><?= Basic_info::check(4); ?><small>Užpildykite<br />paieškos informaciją</small></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <?= $this->render('//app/profile/'.$psl, ['model' => $model]);?>
</div>

