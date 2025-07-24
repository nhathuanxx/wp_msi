(function($, $w, $d, w, d, $b) {
    'use strict';
    $.fn.multiMenuTP = function(options) {
        var TPMenu = $(this),
            settings = $.extend({ type: 'dropdown', }, options);
        return this.each(function() {
            $(this).find('.button-nav-mobile').on('click', function() {
                $('body').toggleClass('active-menu-mobile');
                $(this).toggleClass('main-menu__button-open-menu');
                var mainMenu = $(this).next('ul');
                if (mainMenu.hasClass('open')) {
                    mainMenu.slideToggle().removeClass('open');
                } else {
                    mainMenu.slideToggle().addClass('open');
                    if (settings.type === 'dropdown') {
                        mainMenu.find('ul').show();
                    }
                }
            });
            TPMenu.find('li ul').parents('li').addClass('main-menu__has-sub');
            if (settings.type === 'multitoggle') {
                TPMenu.find('.menu-item-has-children').prepend('<b class="main-menu__submenu-button"><i class="icon-arrow-next"></i></b>');
                TPMenu.find('.mega-menu-parent').prepend('<b class="main-menu__submenu-button"><i class="icon-arrow-next"></i></b>');
                TPMenu.find('.main-menu__submenu-button').on('click', function(e) {
                    $(this).toggleClass('main-menu__open-submenu');
                    if ($(this).siblings('ul, .mega-menu__main').hasClass('open')) {
                        $(this).siblings('ul, .mega-menu__main').removeClass('open').slideToggle();
                    } else {
                        $(this).siblings('ul, .mega-menu__main').addClass('open').slideToggle();
                    }
                });
            } else {
                TPMenu.addClass('dropdown');
            }
        });
    };

    $('body').on('mouseenter mouseleave', '.dropdown', function(e) {
        var dropdown = $(e.target).closest('.dropdown');
        var menu = $('.dropdown-menu', dropdown);
        dropdown.addClass('show');
        menu.addClass('show');
        setTimeout(function() {
            dropdown[dropdown.is(':hover') ? 'addClass' : 'removeClass']('show');
            menu[dropdown.is(':hover') ? 'addClass' : 'removeClass']('show');
        }, 300);
    });
}(jQuery, jQuery(window), jQuery(document), window, document, jQuery('body')));