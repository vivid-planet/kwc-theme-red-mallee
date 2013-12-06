Kwf.Utils.ResponsiveEl('.themeMenuMain', [1100, 960, 700, 659, 500]);
Kwf.Utils.ResponsiveEl('body', [1100, 960, 700, 659, 500]);

$(function(){
    var selector = $('.themeMenuMain > ul > li.hasSubmenu');
    var dropdown = $('.dropdown');
    var mask = $('#mask');
    var menuMask = $('.menuMask');
    var submenuHorizontal = $('.subMenuHorizontal');
    var subSubMenuHorizontal = $('.subSubMenuHorizontal');

    $(selector).mouseenter(function(event) {
        if(submenuHorizontal && submenuHorizontal.length && submenuHorizontal.is(':visible') && $(event.currentTarget).hasClass('current')) {
            $(event.currentTarget).find('.dropdown').addClass('blocked');
        } else {
            if (window.innerWidth > 550) {
                mask.addClass('visible');
                if(submenuHorizontal && submenuHorizontal.length && $(submenuHorizontal).children().length){
                    menuMask.addClass('visible');
                }
            }
        }

    });

    $(selector).mouseleave(function(event) {
        if(submenuHorizontal && submenuHorizontal.length && submenuHorizontal.is(':visible') && $(event.currentTarget).hasClass('current')) {
            $(event.currentTarget).find('.dropdown').removeClass('blocked');
        } else {
            mask.removeClass('visible');
            if(submenuHorizontal && submenuHorizontal.length && $(submenuHorizontal).children().length){
                menuMask.removeClass('visible');
            }
        }
    });

    $(mask).on('click', function(event){
        event.preventDefault();
        return false;
    })
});

