;
(function($, $w, $d, w, d, $b) {
    $(document).ready(function() {
        'use strict';
        $('.sun-slider').slick({
            arrows: true
        });
        
        $('.slider-nav').slick({
             slidesToShow: 4,
             slidesToScroll: 4,
             dots: true,
        });

        // $('.form-day-book').datetimepicker({format: 'LT'});
        // $('#form_time_book').datetimepicker({format: 'LT'});
        $('.form-time-book').each(function() {
            var $this = $(this);
            $this.datetimepicker({ format: 'LT' });
        })

        $('.form-day-book').each(function() {
            var $this = $(this);
            $this.datetimepicker({ format: 'DD/MM/YYYY' });
        })

        // Menu multi level
        $('.primary-menu').each(function() {
            $(this).multiMenuTP({ type: 'multitoggle' });
        });

        $('.icon-menu-mobile').on('click', function() {
            $(this).toggleClass('active');
            // $('.header__nav').slideToggle(400);
            // $('.header .header__nav').addClass('open');
            $('.header__menu__mobile').slideToggle(400)
                // $('body').addClass('menu-opend').append('<div class="overlay-menu"></div>');

            // $('.overlay-menu').on('click', function() {
            // 	// $('.header .header__nav').removeClass('open');
            // 	$('.header__menu__mobile').slideUp(400)
            // 	$('body').removeClass('menu-opend');
            // 	$(this).remove();
            // })
        });

        // Back to top
        var offset = 500;
        var duration = 450;
        $('.footer__fixed__to-top').hide();
        $(window).scroll(function() {
            if ($(this).scrollTop() > offset) {
                $('.footer__fixed__to-top').fadeIn(duration);
            } else {
                $('.footer__fixed__to-top').fadeOut(duration);
            }
        });

        $('.footer__fixed__to-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, duration);
            return false;
        });

        // Swtich map
        $('.branch__areas ul li a').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var link = $this.data('map');
            $('.branch__map iframe').attr('src', link);
        })

        // Open modal schedule book
        $('.book-calendar').on('click', function(e) {
            e.preventDefault();
            $('#modal_schedule_book').modal({ show: true })
        })

        // Header fixed
        window.onscroll = function() {
            handleStickyMenu();
        };

        function handleStickyMenu() {
            let valScroll = window.pageYOffset;
            if (valScroll > 120) {
                $('#header').addClass('sticky');
            } else if (valScroll < 120 && valScroll > 90) {
                $('#header').addClass('sticky-hide');
                $('#header').removeClass('sticky');
            } else {
                $('#header').removeClass('sticky').removeClass('sticky-hide');
            }
        }

        // Collapse QA
        $('.qa__body .item__question').on('click', function() {
            var $this = $(this);
            if ($this.parent('.item').hasClass('active')) {
                $this.parent('.item').removeClass('active');
                $this.siblings('.item__answer').slideUp(400);
            } else {
                $('.qa__body .item').removeClass('active');
                $this.parent('.item').addClass('active');
                $('.qa__body .item__answer').slideUp(400);
                $this.siblings('.item__answer').slideDown(400);
            }
        })

        if ($('.counter-box').length > 0) {
            jQuery(window).scroll(startCounter);

            function startCounter() {
                var hT = $('.counter-box').offset().top,
                    hH = jQuery('.counter-box').outerHeight(),
                    wH = jQuery(window).height();
                if (jQuery(window).scrollTop() > hT + hH - wH) {
                    jQuery(window).off('scroll', startCounter);
                    jQuery('.counter-number').each(function() {
                        var $this = jQuery(this);
                        jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.ceil(this.Counter));
                            }
                        });
                    });
                }
            }
        }

        if ($('.sun-slider--2').length > 0) {
            $('.sun-slider--2').on('afterChange', function(slick, currentSlide) {
                // console.log(currentSlide.currentSlide);
                var slideCurr = currentSlide.currentSlide;
                var defaults = '';
                var info = $('.sun-slider--2 .item:nth-child( ' + slideCurr + ')').data('info');
                if (info) {
                    var data = $.extend({}, defaults, info);
                    $('.about-staff__big__img img').attr('src', data.avatar);
                    $('.about-staff__name').text(data.name);
                    $('.about-staff__position').text(data.position);
                    $('.about-staff__desc').text(data.desc);
                }

            });
        }

        if ($('.branch__content__wrap').length > 0 && window.screen.width > 767) {
            var heightMapContent = $('.branch__content__wrap').innerHeight();
            console.log(heightMapContent)
            $('#map_frame').css('height', heightMapContent + 'px');
        }
    });
}(jQuery, jQuery(window), jQuery(document), window, document, jQuery('body')));