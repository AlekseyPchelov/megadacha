$(document).ready(function(){
    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        switch (id) {
            case '#menu':
                animate_time = 1000;
                break;
            case '#portfolio':
                animate_time = 1200;
                break;
            case '#market':
                animate_time = 1400;
                break;
            case '#rent':
                animate_time = 1600;
                break;
            case '#contact':
                animate_time = 1800;
                break;
            default:
                animate_time = 1000;
        }
        $('body,html').animate({scrollTop: top}, animate_time);
    });
    $("#footer").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        switch (id) {
            case '#menu':
                animate_time = 1800;
                break;
            case '#portfolio':
                animate_time = 1600;
                break;
            case '#market':
                animate_time = 1400;
                break;
            case '#rent':
                animate_time = 1200;
                break;
            case '#contact':
                animate_time = 1000;
                break;
            default:
                animate_time = 1000;
        }
        $('body,html').animate({scrollTop: top}, animate_time);
    });
    $("#arrow-top").on("click", function (event) {
        event.preventDefault();
        var top = $('#menu').offset().top;
        $('body,html').animate({scrollTop: top}, 1200);
    });
    $('#main').add('#header').mouseover(function(){
        $('#arrow-top').stop().slideUp();
        $('#call-request ').stop().slideUp();
    });
    $('#main').add('#header').mouseout(function(){
        $('#arrow-top').slideDown();
        $('#call-request ').slideDown();
    });
});