$(function(){
    // DOM NODE TO LISTEN TO
    var switchLanguage = $(document).find('.switchLanguage');

    if(switchLanguage && switchLanguage.length) {
        var listenerPoint = $(switchLanguage).offset().top;
        $(window).on('scroll touchmove', function(event){
            if($(window).scrollTop() > listenerPoint && $(window).width() > 1085) {
                $('#outerHeader').removeClass('revertStick').addClass('stick');
            } else {
                $('#outerHeader').removeClass('stick').addClass('revertStick');
            }
        })
    }
})
