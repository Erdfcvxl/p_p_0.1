<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\Alert;

?>
<div class="preloader">
    <div class="loader">
        <i class="fa fa-heart"></i>
        <div class="shadow"></div>
    </div>
</div>


<section id="flat01">
    <!--Fonas-->
    <div class="background">
        <div class="parallax-window" data-parallax="scroll" data-image-src="/images/ff03.jpg"></div>
    </div>

    <div id="welcome" class="container" >
        <div class="greetings">

            <p>Anglijoje &nbsp &nbsp Airijoje &nbsp &nbsp Škotijoje</p>
            <h1>Pažintys <b>UK</b></h1>
            <a id="Tlogin" class="btn btn-basic-invert" style="padding: 10px 30px; width: 161px;"><b>Prisijungti</b></a><!--
            --><a id="Tregister" class="btn btn-basic clearify" style="padding: 10px 30px; width: 161px;"><b>Registruotis</b></a>

        </div>
    </div>
    <div id="login">
        <div>
            <h3>Prisijungti</h3>
            <hr class="light-sep">

            <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'email'); ?>
                <?= $form->field($model, 'password', ['template' => '{label} <a id="Tremind"><small>Priminti slaptažodį</small></a> <div class="row"><div class="col-xs-12">{input}{error}{hint}</div></div>'])->passwordInput(); ?>

            <?= Html::submitButton('Jungtis', ['class'=> 'btn btn-basic']) ;?>

            <p class="pull-right"><a class="btn btn-basic" id="Tregister2">Kurti naują &raquo;</a></p>



            <?php ActiveForm::end();?>

            <br>

            <span>Arba prisijunkite naudojantis:</span>

            <h3 style="text-align: center; margin-top: 0"><i class="fa fa-facebook"></i></h3>

        </div>
    </div>

    <div id="register">
        <div>
            <h3>Registruotis</h3>
            <hr class="light-sep">

            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($registerForm, 'username'); ?>
            <?= $form->field($registerForm, 'email'); ?>
            <?= $form->field($registerForm, 'password')->passwordInput(); ?>

            <?= Html::submitButton('Registruotis', ['class'=> 'btn btn-basic']) ;?>

            <p class="pull-right"><a class="btn btn-basic" id="Tlogin2">Prisijungti &raquo;</a></p>

            <?php ActiveForm::end();?>

            <br>

            <span>Arba registruotis naudojantis:</span>

            <h3 style="text-align: center;"><i class="fa fa-facebook"></i></h3>

        </div>
    </div>

    <div id="remind" class="<?= ($Tremind)? 'show' : ''; ?>">
        <div>
            <h3>Slaptažodis</h3>
            <hr class="light-sep">

            <p class="hint">Norint atkurti slaptažodį turite įvesti el. pašto adresą kurį naudojate jungiantis prie pažinčių svetainės.</p>

            <div style="display: <?= ($Tremind)? 'none' : 'block'; ?>">
                <?php $form = ActiveForm::begin(); ?>
                    <?= $form->field($remind, 'email'); ?>
                    <?= Html::submitButton('Priminti', ['class'=> 'btn btn-basic']) ;?>

                    <p class="pull-right"><a class="btn btn-basic" id="Tlogin3">Atgal &raquo;</a></p>

                <?php ActiveForm::end();?>
            </div>

            <?= Alert::widget() ?>

            <p class="pull" style="display: <?= (!$Tremind)? 'none' : 'block'; ?>"><a class="btn btn-basic" id="Tlogin4">Atgal &raquo;</a></p>

        </div>
    </div>

    <div style="position: absolute; width: 100%; text-align: center; bottom: 0px; color: white; font-size: 45px"><i class="fa fa-angle-double-down"></i></div>




</section>

<section id="apie">
    <div class="container">
        <h2>Kaip mes veikiame</h2>
        <hr class="dark-sep">
        <p>Mes bandome Jums padėti <b>surasti antrąją pusę</b></p>

        <div class="services-box">
            <div class="row" style="margin-top: 80px;">
                <div class="col-md-4">
                    <div class="media-left"><span class="fa fa-file-text"></span></div>
                    <div class="media-body">
                        <h3>Susikurkite anketą</h3>
                        <p>Pažintys Anglijoje tampa paprastesnės ir greitesnės užpildžius informaciją apie save, bei apie jus dominantį partnerį.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media-left"><span class="glyphicon glyphicon-user"></span></div>
                    <div class="media-body">
                        <h3>Išsirinkite partnerį</h3>
                        <p>Naudojantis moderniais pažinčių svetainės filtrais lengvai rasite Jūsų norus atitinkantį žmogų.</p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="media-left"><span class="fa fa-comment"></span></div>
                    <div class="media-body">
                        <h3>Susisiekite</h3>
                        <p>Atkreipkite partnerio dėmesį į save parašydami žinutę, ar pasinaudokite kitomis pažinčių portalo funkcijomis.</p>
                    </div>

                </div>
            </div>

            <div class="row" style="margin-top: 60px;">
                <div class="col-md-8 col-md-offset-2">
                    <div class="media-left"><span class="fa fa-heart"></span></div>
                    <div class="media-body">
                        <h3>Jūsų pažinties sekmė priklauso nuo Jūsų!</h3>
                    </div>
                </div>

            </div>
        </div>
</section>

<section id="nariai" class="dark-bg">
    <div class="container">
        <h2>Šiek tiek informacijos</h2>
        <hr class="orange-sep">
        <p>Pažinčių svetainės suvestinė</p>


        <div class="row" style="margin-top: 60px;">
            <div class="col-lg-3">
                <span class="fa fa-smile-o"></span>
                <h2 class="number timer">367</h2>
                <h4>Naudotojų</h4>
            </div>
            <div class="col-lg-3">
                <span class="fa fa-comments-o"></span>
                <h2 class="number timer">15210</h2>
                <h4>Išsiųstų žinučių</h4>
            </div>
            <div class="col-lg-3">
                <span class="fa fa-heart-o"></span>
                <h2 class="number timer">121</h2>
                <h4>Sujungtų žmonių</h4>
            </div>
            <div class="col-lg-3">
                <span class="fa fa-picture-o"></span>
                <h2 class="number timer">425</h2>
                <h4>Įkelta nuotraukų</h4>
            </div>
        </div>
    </div>
</section>

<section id="privalumai">
    <div class="container">
        <h2>Privalumai</h2>
        <hr class="dark-sep">
        <p>Moderniausia pažinčių svetainė<br><br><br></p>


        <div class="row" style="margin-top: 60px; text-align: left">
            <div class="col-md-5 col-sm-6 col-xs-12 col-md-offset-1 vcenter" style="text-align: center;">
                <img src="/images/responsive.png" width="100%">
            </div><!--
            --><div class="col-md-4 col-sm-6 vcenter" >
                <div class="media-body" style="text-align: left;">
                    <h3>Prieinamumas</h3>
                    <p>Pažinčių svetaine galėsite naudotis per savo išmanųjį telefoną, planšetę ar kompiuterį. Kiekvienas įrenginys įrenginys palaiko visas portalo funkcijas, todėl antrąją pusę Anglijoje, Airijoje ar Škotijoje susirasite lengviau.</p>
                </div>

            </div>
        </div>

        <div class="row" style="margin-top: 60px; text-align: left">
            <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-2 vcenter">
                <div class="media-body" style="text-align: right;">
                    <h3>Paieškos algoritmai</h3>
                    <p>Sudėtingi, automatizuoti algoritmai analizuoja visas galimas pažintys UK ir atrenka, bei informuoja jus apie tuos partnerius kurie labiausiai atitinka Jūsų ieškomo žmogaus aprašymą.</p>
                </div>
            </div><!--
            --><div class="col-md-4 col-sm-6 col-xs-12 vcenter" style="text-align: center;">
                <i class="fa fa-cogs" style="font-size: 140px;"></i>
            </div>
        </div>

        <div class="row" style="margin-top: 60px; text-align: left">
            <div class="col-md-5 col-sm-6 hidden-xs col-md-offset-1 vcenter" style="text-align: center;">
                <i class="fa fa-heart" style="font-size: 140px; color: #F03C02;"></i>
            </div><!--
            --><div class="col-md-4 col-sm-6 vcenter" >
                <div class="media-body" style="text-align: left;">
                    <h3>Paprastumas</h3>
                    <p>Pažinčių svetaine naudotis yra ypatingai paprasta. Minimalistinis dizainas, bei pažįstamų funkcijų paprastumas leis lengvai ir greitai susipažinti su žmogumi iš UK.</p>
                </div>
            </div><!--
            --><div class="col-xs-12 hidden-sm hidden-md hidden-lg vcenter" style="text-align: center;">
                <i class="fa fa-heart" style="font-size: 140px; color: #F03C02;"></i>
            </div>
        </div>


    </div>
</section>

<section id="atsiliepimai" style="overflow:hidden">
    <div class="background">
        <div class="parallax-window" data-parallax="scroll" data-image-src="/images/f0.jpg"></div>
    </div>

    <div class="container paper clearify-hard">
        <h2>Atsiliepimai</h2>
        <hr class="light-sep">
        <p>Ką mūsų svetainės naudotojai sako apie mus</p>
        <div id="owl-testi" class="owl-carousel">
            <div class="item">
                <div class="quote">
                    <i class="fa fa-quote-left left fa-2x"></i>
                    <h5>I’am amazed, I should say thank you so much for your awesome template. Design is so
                        good and neat, every detail has been taken care these team are realy amazing and talented! I will
                        work only with <span>Rise</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                </div>
            </div>
            <div class="item">
                <div class="quote">
                    <i class="fa fa-quote-left left fa-2x"></i>
                    <h5>I’am amazed, I should say thank you so much for your awesome template. Design is so
                        good and neat, every detail has been taken care these team are realy amazing and talented! I will
                        work only with <span>Rise</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                </div>
            </div>
            <div class="item">
                <div class="quote">
                    <i class="fa fa-quote-left left fa-2x"></i>
                    <h5>I’am amazed, I should say thank you so much for your awesome template. Design is so
                        good and neat, every detail has been taken care these team are realy amazing and talented! I will
                        work only with <span>Rise</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                </div>
            </div>
        </div>
    </div>
</section>