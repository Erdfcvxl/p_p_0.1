var open;

function setHeight(selector){
    $(selector).css({
        'top' : "-" + ($(selector).outerHeight()-40) + "px"
    });
}

function dropdown(selector, key){
    if($(selector).offset().top > 0) {
        $(selector).animate({'top' : "-" + ($(selector).outerHeight()-40) + "px"}, 'fast');
        open[key] = false;
    }else{
        $(selector).animate({'top' : 49 + "px"});
        open[key] = true;
    }


}

$(function(){

    /*--------  Layout  --------*/
    setHeight('#profile');
    setHeight('#menu');

    $('body').click(function(e){
        if(open['profile'] && $(e.target).closest('.Tprofile').length === 0) {
            $('#profile').animate({'top' : "-" + ($('#profile').outerHeight()-40) + "px"}, 'fast');
        }
        if(open['menu'] && $(e.target).closest('.Tmenu').length === 0) {
            $('#menu').animate({'top' : "-" + ($('#menu').outerHeight()-40) + "px"}, 'fast');
        }
    });

    $('.Tprofile').click(function(){
        dropdown('#profile', 'profile');
    });

    $('.Tmenu').click(function(){
        dropdown('#menu', 'menu');
    });





});