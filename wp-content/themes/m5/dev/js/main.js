// Input 0
(function(a){

	var header_top;
	var header = a('.header-middle');

	/* admin bar */
    var adminbar = a('.admin-bar');
    var adminbar_height = 0;
	var f,c,d,grid;
	function e(){c>f?a(".back-to-top").addClass("k2-show"):a(".back-to-top").removeClass("k2-show")}
	function lk(){1200>d&&(

		a(".page-san-pham .product-filter .w-filter").append('<span class="filter-toggle"></span>'),

		a(".page-san-pham .product-filter .w-filter > .filter-toggle").on("click",function(z){
			z.preventDefault();
			a(this).parent().find("> .filter-toggle").toggleClass("close");
			a(this).parent().toggleClass("active");

			var check_style_value = a(this).parent().find("> ul")[0].scrollHeight;
			var check_style = a(this).parent().find("> ul");

			if ( check_style.css('max-height') == check_style_value + 'px' ){

		      	check_style.css('max-height', '0px' );
		    } else {

		      	check_style.css('max-height', check_style_value + 'px' );
		    } 
		})
	)}

	function l(){992>d&&(
		a(".sha-nav li.menu-item-has-children").append('<span class="main-menu-toggle"></span>'),

		a(".sha-nav li.menu-item-has-children > .main-menu-toggle").on("click",function(z){
			z.preventDefault();
			a(this).parent().find("> .sub-menu").toggleClass("submenu-open");
		}),

		a(".sha-nav .menu-mbb").on("click",function(zz){
			zz.preventDefault();
			a(this).parent().find(".primary-menu").toggleClass("pri-menu-open")
		}),

		a(".btn-nav-mobile").on("click",function(){

			a(".sha-nav").toggleClass("menu-mobile-active")
		}),

		a(".mb-menu .sidebar-desc .close-desc .fa").on("click",function(){

			a(".mb-menu").removeClass("mb-menu-open");
			a(".mb-menu .middle-desc").find(".sub-menu").removeClass("submenu-open");
			a(".mb-menu .middle-desc").find(".main-menu-toggle").removeClass("close");
		}),

		a(".mb-menu .mb-overlay").on("click",function(){

			a(".mb-menu").removeClass("mb-menu-open");
			a(".mb-menu .middle-desc").find(".sub-menu").removeClass("submenu-open");
			a(".mb-menu .middle-desc").find(".main-menu-toggle").removeClass("close");
		})

		)}

	function stiky_menu() {

	    if ( d > 991 ) {

	        a('.only-mobile').remove();
	    } else {

	    	a('.only-desktop').remove();
	    }
	}

	a(window).load(function(){
		d=a(window).width();
		c=a(window).scrollTop();
		f=a(window).height();
		/* get admin bar height */
        adminbar_height = adminbar.length > 0 ? 32 : 0;
        /* get top header menu */
        header_top = header.length > 0 ? header.offset().top - adminbar_height : 0;
        stiky_menu();e();
	});

	a(window).on("resize",function(){
		d=a(window).width();
		stiky_menu();
	});

	a(window).scroll(function(){
		c=a(window).scrollTop();
		e();
	});

a(document).ready(function(){


	var banner = new Swiper('.banner', {
		// Optional parameters
		direction: 'horizontal',
		loop: false,
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		
		//autoplay: false,
		autoplay: {
		   delay: 5000,
		},

		breakpoints: {
		    // when window width is >= 320px
		    0: {
		      	slidesPerView: 1,
		      	spaceBetween: 10,
		    },
		    // when window width is >= 480px
		    767: {
		      	slidesPerView: 2,
		      	spaceBetween: 30,
		    },
		    // when window width is >= 480px
		    991: {
		      	slidesPerView: 3,
		      	spaceBetween: 40,
		    },
		    // when window width is >= 640px
		    1200: {
		      slidesPerView: 3,
		      spaceBetween: 50,
	    	}
	  	}
	});

    a(".back-to-top").on("click",function(){a("html, body").animate({scrollTop:0},800);return!1});

	function cshcs_add_values(key, sourceURL, value) {
        var rtn = sourceURL.split("?")[0],
        param,
        params_arr = [],
        queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
        params_arr = queryString.split("&");
        var key_exist = false;
        for (var i = params_arr.length - 1; i >= 0; i -= 1) {
            param = params_arr[i].split("=")[0];
            if (param === key) {
                params_arr[i] = key + "=" + value;
                key_exist = true;
            }
        }

        if (key_exist == true) {
            rtn = rtn + "?" + params_arr.join("&");
        }else{
            rtn = rtn + "?" + params_arr.join("&") + "&" + key + "=" + value;
        }

        return rtn;
    }

	function cshcs_add_value(key, sourceURL, value) {
        var rtn = sourceURL.split("?")[0],
        param,
        params_arr = [],
        queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
        params_arr = queryString.split("&");
        var key_exist = false;
        for (var i = params_arr.length - 1; i >= 0; i -= 1) {
            param = params_arr[i].split("=")[0];
            if (param === key) {
                params_arr[i] = params_arr[i] + '+' + value;
                key_exist = true;
            }
        }

        if (key_exist == true) {
            rtn = rtn + "?" + params_arr.join("&");
        }else{
            rtn = rtn + "?" + params_arr.join("&") + "&" + key + "=" + "+" + value;
        }
        return rtn;
    }

    function cshcs_remove_value(key, sourceURL, value) {  
        var rtn = sourceURL.split("?")[0],
        param,
        params_arr = [],
        queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
        params_arr = queryString.split("&");
        for (var i = params_arr.length - 1; i >= 0; i -= 1) {
            param = params_arr[i].split("=")[0];
            if (param === key) {
                var str_removed = '+' + value;
                params_arr[i] = params_arr[i].replace(str_removed, '');//remove one value of param.
                if (params_arr[i].split("=")[1] == "") {
                    params_arr.splice(i, 1);//remove param.
                }
            }
        }
        rtn = rtn + "?" + params_arr.join("&");
        return rtn;
    }
})
})(jQuery);
