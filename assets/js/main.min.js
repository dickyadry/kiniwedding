$(document).ready(function () {
	var w = document.documentElement.clientWidth;
	var prev = '<a href="#" class="events__btn events__prev"><span class="icon icon-arrow-left"></span></a>';
	var next = '<a href="#" class="events__btn events__next"><span class="icon icon-arrow-right"></span></a>';
	var options = {
		fixedContentPos: true,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,

		midClick: true,
		removalDelay: 300
	}
	if (w > 768) {
		/* desktop */
		// sticky nav
		$("#js-nav").stick_in_parent({
			// inner_scrolling: false,
			// spacer: false,
			offset_top: 63
		}).on('sticky_kit:bottom', function (e) {
			$(this).parent().css('position', 'static');
		}).on('sticky_kit:unbottom', function (e) {});
		// sticky payment
		$(".js-sticky-payment").stick_in_parent({
			parent: ".js-sticky-parent",
			inner_scrolling: false,
			spacer: false,
			offset_top: 117,
		}).on('sticky_kit:bottom', function (e) {
			$(this).parent().css('position', 'static');
		}).on('sticky_kit:unbottom', function (e) {});

		// sticky payment
		$(".js-dash-sticky").stick_in_parent({
			parent: ".js-sticky-parent",
			inner_scrolling: false,
			spacer: false,
			offset_top: 100,
		}).on('sticky_kit:bottom', function (e) {
			$(this).parent().css('position', 'static');
		}).on('sticky_kit:unbottom', function (e) {});

		// events
		$('.js-banner-events').slick({
			autoplay: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplaySpeed: 8000,
			pauseOnFocus: true,
			fade: false,
			dots: false,
			arrows: true,
			cssEase: 'ease',
			nextArrow: next,
			prevArrow: prev,
		});
		$('.search__icon').click(function (e) {
			$('.search__bar').toggleClass('expand');
		})
	} else {
		/* mobile */

		// scroll payment wizard 
		var act = $('.step__item.active');
		if (act.length > 0) {
			var msp = act.position().left - act.width();
			$('.step').animate({
				scrollLeft: msp
			});
		}
		// scroll dashboard menu 
		var actb = $('.dash__menu__item.active');
		if (actb.length > 0) {
			var mspb = actb.position().left - actb.width();
			$('.dash__menu').animate({
				scrollLeft: mspb
			});
		}
		// scroll transaksi 
		var actt = $('.tab__menu__item.active');
		if (actt.length > 0) {
			var mspt = actt.position().left - actt.width();
			$('.tab__menu').animate({
				scrollLeft: mspt
			});
		}
	}

	// scroll
    $(window).scroll(function () {
        var scrollpos = $(window).scrollTop();
        var hblock = $('.header').outerHeight();
        var navsticky = $('.nav').outerHeight();

        // scroll header
        if(scrollpos > hblock + 20) {
            $('.header').addClass('header--sticky');
            $('.nav').addClass('nav--sticky');
            $('.js-nav-offset').css({
                'padding-top': navsticky,
            });
            $('.js-kcm-stick').addClass('kcm__stick--sticky')
        } else {
            $('.header').removeClass('header--sticky');            
            $('.nav').removeClass('nav--sticky');
            $('.js-nav-offset').removeAttr('style');
            $('.js-kcm-stick').removeClass('kcm__stick--sticky')
        }
        // console.log(scrollpos);0
        // console.log(hblock);
    });
	// stop propagation
	$('#js-login-box, #js-nav, #js-board-box').click(function (e) {
		e.stopPropagation();
	});

	// login
	$('.js-login').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('#js-login-box').toggleClass('login--hide');
		// remove other toggle
		$('#js-nav').addClass('nav--hide');
		$('#js-menu').find('span').removeClass('active');
	});

	// board
	$('.js-board').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('#js-board-box').toggleClass('board--hide');
		// remove other toggle
		$('#js-nav').addClass('nav--hide');
		$('#js-menu').find('span').removeClass('active');
	});

	// menu
	$('#js-menu').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$(this).find('span').toggleClass('active');
		$('#js-nav').toggleClass('nav--hide');
		// remove other toggle
		$('#js-login-box').addClass('login--hide');
		$('#js-board-box').addClass('board--hide');
	});

	// click body / hide all overlay box
	$(document).click(function () {
		$('#js-nav').addClass('nav--hide');
		$('#js-menu').find('span').removeClass('active');
		$('#js-login-box').addClass('login--hide');
		$('#js-board-box').addClass('board--hide');
	});

	// banner
	var $status = $('.banner__count');
	var $slickElement = $('.js-banner');

	$slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
		//currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
		var i = (currentSlide ? currentSlide : 0) + 1;
		$status.text(i + '/' + slick.slideCount + '');
	});
	$('.js-banner').slick({
		autoplay: true,
		slidesToShow: 1,
		autoplaySpeed: 10000,
		pauseOnFocus: true,
		dots: false,
		arrows: false,
		cssEase: 'ease',
		variableWidth: false,
		responsive: [{
			breakpoint: 768,
			settings: {
				variableWidth: true,
			}
		}]
	});
	$('.js-product-anchor').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: ".js-product-thumb"
	});
	$('.js-product-thumb').slick({
		focusOnSelect: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		asNavFor: ".js-product-anchor"
	});
	$('.js-menu').slick({
		autoplay: false,
		slidesToShow: 1,
		infinite: true,
		dots: false,
		arrows: false,
		variableWidth: true
	});
	if (w < 768) {
		$('.js-category').slick({
			autoplay: false,
			slidesToShow: 1,
			infinite: true,
			dots: false,
			arrows: false,
			variableWidth: true
		});
	}else{
		$('.js-navigate').slick({
			autoplay: false,
			slidesToShow: 9,
			infinite: false,
			dots: false,
			prevArrow: '<a href="#" class="events__btn events__prev"><span class="icon icon-chevron-left"></span></a>',
			nextArrow: '<a href="#" class="events__btn events__next"><span class="icon icon-chevron-right"></span></a>',
			arrows: true,
			variableWidth: true
		});
	}

	// radio button payment
	$('.payment__item label').click(function (event) {
		event.stopPropagation();
		event.preventDefault();
		var ifs = $(this).hasClass('selected');
		if (!ifs) {
			var sl = $(this).parent();
			var sr = sl.find('input[type="radio"]');
			var st = sl.find('.payment__detail');
			$('.payment__item').each(function (event) {
				var ss = $(this).find('.payment__detail');
				$('.payment__item label').removeClass('selected');
				ss.hide('fast');
			});
			$(this).addClass('selected');
			st.slideToggle('fast');
			sr.prop("checked", true);
		}
	});

	// address edit
	$('.js-address-edit').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('#js-address-form').removeClass('form--hide');
		$('#js-address-result').addClass('form--hide');
	});

	// dialog box
	$(document).on('click', '.js-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
	$('.js-modal-trigger').on('click', function (e) {
		// modal
		$.magnificPopup.open({
			items: {
				src: '#js-modal',
				type: 'inline',
			},
			options
		});

		// dummy show/hide form
		console.log('Wey');
		$('#js-address-form').addClass('form--hide');
		$('#js-address-result').removeClass('form--hide');

		$("html, body").animate({
			scrollTop: 0
		}, 'fast');
	});

	// modal save alamat
	$('.js-save-profile').on('click', function (e) {
		// modal
		$.magnificPopup.open({
			items: {
				src: '#js-modal',
				type: 'inline',
			},
			options
		});
	});

	// button beli
	$('.js-buyit').on('click', function (e) {
		e.preventDefault();
		$('#js-cart-sticky').removeClass('hide');
	});

	// close cart sticky
	$('.js-cart-sticky-close').on('click', function (e) {
		e.preventDefault();
		$('#js-cart-sticky').addClass('hide');
	});

});