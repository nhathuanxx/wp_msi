;
(function($, $w, $d, w, d, $b) {
    $(document).ready(function() {
        'use strict';
        $('.sun-slider').slick({
            arrows: true
        });

        $('.slider-nav').slick({
            slidesToShow: 7, // Hiển thị 7 slide cùng lúc
            slidesToScroll: 4,
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000,
            infinite: true, // Vòng lặp vô hạn
            responsive: [
                {
                    breakpoint: 767, // màn hình nhỏ hơn hoặc bằng 767px
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true, // Vẫn giữ vòng lặp vô hạn ở kích thước màn hình nhỏ
                        dots: true
                    }
                }
            ]
        });

        // var screenWidth = $(window).width(); 
        // console.log(screenWidth)
        // if(screenWidth > 767){
        //     $('.slider-nav').slick({
        //         slidesToShow: 6,
        //         slidesToScroll: 4,
        //         dots: true,
        //         autoplay: true,
        //         autoplaySpeed: 3000,
        //    });
        // }
        // else{
        //     $('.slider-nav').slick({
        //         slidesToShow: 3,
        //         slidesToScroll: 1,
        //         dots: true,
        //         autoplay: true,
        //         autoplaySpeed: 3000,
        //    });
        // }

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
            $('.overlay-mobile').toggleClass('overlay-active');
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

        $('.overlay-mobile').on('click', function(){
            $('.icon-menu-mobile').removeClass('active');
            $('.header__menu__mobile').slideUp();
            $('.overlay-mobile').removeClass('overlay-active');
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
        $('.clinic-nearby-u .clinic-nearby-u-slider .clinic-nearby-u-slider__item a.clinic-nearby-u-slider__item-map').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var link = $this.data('map');
            $('#map_clinic iframe').attr('src', link);
            
            var targetElement = document.getElementById('map_clinic');
            var elementRect = targetElement.getBoundingClientRect();
            if (targetElement && elementRect) {
                window.scrollTo({
                    top: elementRect.top + window.pageYOffset -200,
                    behavior: 'smooth' // Cuộn mượt mà
                });
            }
            
        })

        // Open modal schedule book
        $('.book-calendar').on('click', function(e) {
            e.preventDefault();
            $('#modal_schedule_book').modal({ show: true });

            
            // fill clinic vào booking
            var name = this.getAttribute('data-clinic');
            if(name) {
                document.getElementById('clinic-showroom').value = name;
            } else {
                document.getElementById('clinic-showroom').value = 'Chọn cơ sở'
            }
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


        // add thêm content dưới menu level 2

        // menu giới thiệu
        var ulElementAbout = document.querySelector('#nav-item-4849 ul');
        var newHtml = '<div class="menu-bonus"><div class="menu-bonus__content d-flex justify-content-between align-items-center"><div class="menu-bonus__content-title">Khám phá thêm trang web của chúng tôi có thể giúp phụ nữ chăm sóc sức khỏe của họ.</div><div class="menu-bonus__content-btn">Xem thêm</div></div></div>';
        ulElementAbout.insertAdjacentHTML('beforeend', newHtml);

        // menu dịch vụ
        var ulElementAbout = document.querySelector('#nav-item-4711 ul');
        var newHtml = '<div class="menu-bonus"><div class="menu-bonus__content d-flex justify-content-between align-items-center"><div class="menu-bonus__content-title">Khám phá chương trình chăm sóc sức khỏe độc ​​đáo của chúng tôi được tùy chỉnh dành cho phụ nữ, được thiết kế để nâng cao và duy trì sức khỏe cũng như tinh thần tổng thể của bạn.</div><div class="menu-bonus__content-btn">Xem thêm</div></div></div>';
        ulElementAbout.insertAdjacentHTML('beforeend', newHtml);

        // menu Q&A
        var ulElementAbout = document.querySelector('#nav-item-4802 ul');
        var newHtml = '<div class="menu-bonus"><div class="menu-bonus__content d-flex justify-content-between align-items-center"><div class="menu-bonus__content-title">Đây là “Thư viện Giáo dục Phụ nữ” của chúng tôi, nơi phụ nữ có thể điều hướng qua các chủ đề đa dạng của chúng tôi, giúp người phụ nữ của chúng tôi sống với tâm hồn trong sáng.</div><div class="menu-bonus__content-btn">Xem thêm</div></div></div>';
        ulElementAbout.insertAdjacentHTML('beforeend', newHtml);

        // end add thêm content dưới menu level 2


        // add icon form liên hệ, booknow
        var inputFormUser = document.querySelectorAll('.form-group-custom .wpcf7-form-control-wrap.text-905');
        var inputFormCall = document.querySelectorAll('.form-group-custom .wpcf7-form-control-wrap.tel-834');
        var inputFormMail = document.querySelectorAll('.form-group-custom .wpcf7-form-control-wrap.email-691');
        
        var imgUser = document.createElement('img');
        var imgCall = document.createElement('img');
        var imgMail = document.createElement('img');

        imgUser = '../../../../../wp-content/themes/m5/assets/images/os/ic_form_user.svg';
        imgCall = '../../../../../wp-content/themes/m5/assets/images/os/ic_form_call.svg';
        imgMail = '../../../../../wp-content/themes/m5/assets/images/os/ic_form_mail.svg';

        // for prod
        // imgUser.src = '../images/os/ic_form_user.svg';
        // imgCall.src = '../images/os/ic_form_cal.svg';
        // imgMail.src = '../images/os/ic_form_mail.svg';

        inputFormUser.forEach(function(wrapper) {
            const img = document.createElement('img');
            img.src = imgUser;
            img.className = 'icon-inside-input';
        
            wrapper.appendChild(img);
        });

        inputFormCall.forEach(function(wrapper) {
            const img = document.createElement('img');
            img.src = imgCall;
            img.className = 'icon-inside-input';
        
            wrapper.appendChild(img);
        });

        inputFormMail.forEach(function(wrapper) {
            const img = document.createElement('img');
            img.src = imgMail;
            img.className = 'icon-inside-input';
        
            wrapper.appendChild(img);
        });

        // end add icon form liên hệ, booknow


        // random đánh sao bác sĩ

        var images = document.querySelectorAll('.list-doctors__slider_item-content_rate .rating-image');
        if (images.length > 0) {
            var randomIndex = Math.floor(Math.random() * images.length);
            images.forEach(function(img) {
                img.style.display = 'none';
            });
            images[randomIndex].style.display = 'inline';
        }

        console.log("fillter_home");
        
        $clinicSlider.slick({
            slidesToShow: 3,
            nextArrow: '.clinic-nearby-u__next',
            prevArrow: '.clinic-nearby-u__prev',
            centerPadding: '20px',
            dots: false,
            autoplay: true,
            infinite: true,
            autoplaySpeed: 2000,
            responsive: [
                { breakpoint: 1200, settings: { centerMode: false, slidesToShow: 2 } },
                { breakpoint: 776, settings: { centerMode: false, slidesToShow: 1 } }
            ]
        });
    
        // Xử lý sự kiện thay đổi thành phố
        $('#home-city').change(function() {
            var selectedCity = $(this).val();
    
            // Bỏ lọc trước đó cho tất cả các slider
            $clinicSlider.slick('slickUnfilter');
    
            if (selectedCity) {
                // Lọc slider dựa trên thành phố
                $clinicSlider.slick('slickFilter', function(index, element) {
                    return $(element).data('city') === selectedCity;
                });
            }
        });

    });
}(jQuery, jQuery(window), jQuery(document), window, document, jQuery('body')));