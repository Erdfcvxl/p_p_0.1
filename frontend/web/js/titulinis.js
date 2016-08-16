/***************** Page Scroll ******************/
$(function () {
    $('a.page-scroll').bind('click', function (event) {
        console.log('aaa');
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        },1000, 'swing');
        event.preventDefault();
    });
});


/***************** first falt ******************/
var windowH = $(window).height();
var greeting = $('#flat01 > .container');
var login = $('#login');
var register = $('#register');
var remind = $('#remind');

if(windowH < 700){
    var flat01 = 700;
}else{
    var flat01 = windowH;
}

$('#flat01').css({'height' : flat01 + "px"});
$('#flat01 .parallax-window').css({'min-height' : flat01 + "px"});

greeting.css({"padding-top" : (windowH - greeting.height()) / 2 + "px"});
login.css({"padding-top" : (windowH - login.height()) / 2 + "px"});
register.css({"padding-top" : (windowH - register.height()) / 2 + "px"});
remind.css({"padding-top" : (windowH - remind.height()) / 2 + "px"});

/***************** Prisijungimas ******************/
//$('#welcome').css({'display' : 'none'});
$('#Tlogin').click(function(){
    $('#welcome').animate({
        'left': '-=100%'
    },500, 'swing');

    $('#login').animate({
        'left': '50%'
    },500, 'swing');
});

$('#Tlogin2').click(function(){
    if($('#login').offset().left < 50){
        left = '150%';
    }else{
        left = '-=150%';
    }
    $('#register').animate({
        'left': left
    },500, 'swing');

    $('#login').animate({
        'left': '50%'
    },500, 'swing');
});

$('#Tlogin3').click(function(){
    $('#remind').animate({
        'left': '150%'
    },500, 'swing');

    $('#login').animate({
        'left': '50%'
    },500, 'swing');
});

$('#Tlogin4').click(function(){
    $('#remind').animate({
        'left': '150%'
    },500, 'swing');

    $('#login').animate({
        'left': '50%'
    },500, 'swing');
});

if($('.field-loginform-password').hasClass('has-error')){
    $('#welcome').css({'left': '-=100%'});
    $('#login').css({'left': '50%'});
}


/***************** Registracija ******************/

$('#Tregister').click(function(){
    $('#welcome').animate({
        'left': '-=150%'
    },500, 'swing');

    $('#register').animate({
        'left': '50%'
    },500, 'swing');
});

$('#Tregister2').click(function(){
    if($('#register').offset().left < 50){
        left = '150%';
    }else{
        left = '-=150%';
    }
    $('#login').animate({
        'left': left
    },500, 'swing');

    $('#register').animate({
        'left': '50%'
    },500, 'swing');
});


if($('.field-signupform-email').hasClass('has-error')){
    $('#welcome').css({'left': '-=100%'});
    $('#register').css({'left': '50%'});
}

/************* Passwordo resetinimas **************/
$('#Tremind').click(function(){
    if($('#login').offset().left < 50){
        left = '150%';
    }else{
        left = '-=150%';
    }
    $('#login').animate({
        'left': left
    },500, 'swing');

    $('#remind').animate({
        'left': '50%'
    },500, 'swing');
});

if($('.field-passwordresetrequestform-email').hasClass('has-error') || $('#remind').hasClass('show')){
    $('#welcome').css({'left': '-=100%'});
    $('#login').css({'left': '-150%'});
    $('#remind').css({'left': '50%'});
}


/***************** atsiliepimai ******************/
$(document).ready(function() {

    $("#owl-testi").owlCarousel({
        singleItem : true,
        transitionStyle : "backSlide",
        autoPlay: 10000
    });

});

/***************** Preloader ******************/

var preloader = $('.preloader');
$(window).load(function () {
    setTimeout(function(){
        preloader.fadeOut(400, function(){
            preloader.remove();
        });
    }, 500);
});

