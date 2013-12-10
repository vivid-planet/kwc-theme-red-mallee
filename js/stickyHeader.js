$(function(){
    // DOM NODE TO LISTEN TO
    var header = $(document).find('#header > .rightHeaderBox');

    if(header && header.length) {
        var listenerPoint = $(header).offset().top;
        $(window).on('scroll touchmove', function(event){
            if($(window).scrollTop() > $(header).height() && $(window).width() > 550) {
                $('#outerHeader').removeClass('revertStick').addClass('stick');
            } else {
                $('#outerHeader').removeClass('stick').addClass('revertStick');
            }
        })
        setTimeout(function(){
            if($(window).scrollTop() > $(header).height()) {
                $('#outerHeader').removeClass('revertStick').addClass('stick');
            }
        }, 300);
    }
})
