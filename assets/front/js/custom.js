(function($) {
	/*----------------- WHOLE SCRIPT STRICT MODE SYNTAX -----------------*/
	"use strict";
	
	/*--------------- SMARTMENU ---------------*/
	$('#main-menu').smartmenus({
		mainMenuSubOffsetX: -1,
		mainMenuSubOffsetY: 4,
		subMenusSubOffsetX: 6,
		subMenusSubOffsetY: -6
	});
	
	/*--------------- SMARTMENUS MOBILE MENU TOGGLE BUTTON ---------------*/
	var $mainMenuState = $('#main-menu-state');
	if ($mainMenuState.length) {
		// animate mobile menu
		$mainMenuState.on('change', function() {
			var $menu = $('#main-menu');
			if (this.checked) {
				$menu.hide().slideDown(250, function() {
					$menu.css('display', '');
				});
			} else {
				$menu.show().slideUp(250, function() {
					$menu.css('display', '');
				});
			}
		});
		// hide mobile menu beforeunload
		$(window).on('bind', 'beforeunload unload', function() {
			if ($mainMenuState[0].checked) {
				$mainMenuState[0].click();
			}
		});
	}
	
	/*--------------- OUR TEAM SLIDER ---------------*/
	var our_team_slider = $(".our_team_slider");
	owc_slider(our_team_slider, 4 , 2 , 1, 0);
	
	/*--------------- BLOG SLIDER ---------------*/
	var latest_news_slider = $(".latest_news_slider");
	owc_slider(latest_news_slider, 3 , 2 , 1, 0);
	
	/*--------------- PARTNERS SLIDER ---------------*/
	var partners_slider = $(".partners_slider");
	owc_slider(partners_slider, 5 , 3 , 1, 0);
	
	/*--------------- MOBILE VIEW TESTIMONIALS SLIDER ---------------*/
	var testimonials_slider = $(".testimonials_slider");
	owc_slider(testimonials_slider, 5 , 2 , 1, 0);
	
	if ( $(window).width() < 1023 ) {
	    startCarousel();
	} else {
	    $('.owl-carousel').addClass('off');
	}
	
	$(window).resize(function() {
	    if ( $(window).width() < 1023 ) {
	      startCarousel();
	    } else {
	      stopCarousel();
	    }
  	});
	
	/* Mobile Slider*/
	function startCarousel(){
		
		/*--------------- SERVICES SLIDER ---------------*/
		var our_services_slider = $(".our_services_slider");
		owc_slider(our_services_slider, 5 , 2 , 1, 0);
		
		/*--------------- WHAT WE DO SLIDER ---------------*/
		var what_we_do_slider = $(".what_we_do_slider");
		owc_slider(what_we_do_slider, 5 , 2 , 1, 0);
		
		/*--------------- PRICING SLIDER ---------------*/
		var pricing_table_slider = $(".pricing_table_slider");
		owc_slider(pricing_table_slider, 4 , 2 , 1, 0);
	}
	
	/* ------------------ SLIDER FUNCTION -----------------*/
	function owc_slider(slider_object, desktop, tablate, mobile,margin) {
		slider_object.owlCarousel({
			loop: true,
			margin: margin,
			autoplayTimeout: 5000,
			smartSpeed: 450,
			dots: true,
			nav: false,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			responsive: {
				0: {
					items: mobile
				},
				600: {
					items: tablate
				},
				1000: {
					items: desktop
				}
			}
		})
	}
	
	function stopCarousel() {
	    var owl = $('.owl-carousel');
	    owl.trigger('destroy.owl.carousel');
	    owl.addClass('off');
	}
	
	/*--------------- SCROLL TO TOP BUTTON ---------------*/
	var scrollToTop = document.querySelector(".scrollToTop");
	scrollToTop.addEventListener('click', function(e) {
		$("html, body").animate({
			scrollTop: 0
		}, 800);
		return false;
	});

	var last_known_scroll_position = 0;
	var scrollToTop = document.querySelector(".scrollToTop");
	window.addEventListener('scroll', function(e) {
		last_known_scroll_position = window.scrollY;
		if(last_known_scroll_position > 100)
		{
			scrollToTop.classList.add("fadeInScroll");
			scrollToTop.classList.remove("fadeOutScroll");
		}
		else
		{
			scrollToTop.classList.remove("fadeInScroll");
			scrollToTop.classList.add("fadeOutScroll");
		}
	});

	/*---------------- BANNER SLIDER --------------*/
	$('#cascade-slider').cascadeSlider({});

	/*--------------- HEADER STICKY ---------------*/
	var last_known_scroll_position = 0;
	var navigation = document.querySelector("header");
	window.addEventListener('scroll', function(e) {
		last_known_scroll_position = window.scrollY;
		if (last_known_scroll_position > 50) {
			navigation.classList.add("sticky");
		} else {
			navigation.classList.remove("sticky");
		}
	});

	/* ------------------ GOOGLE MAP  -----------------*/
	if (document.getElementById('map-canvas')) {
		var latLng = new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
			markerIcon = {
				url: 'http://image.flaticon.com/icons/svg/252/252025.svg',
				scaledSize: new google.maps.Size(60, 60),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(20, 40)
			};
		var mapOptions = {
			zoom: 16,
			center: latLng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		var marker = new google.maps.Marker({
			map: map,
			animation: google.maps.Animation.DROP,
			position: latLng,
			icon: markerIcon
		});
	}
	
	/*--------------- VIDEO POPUP ---------------*/
	$(".youtube-link").grtyoutube({
		autoPlay: true,
		theme: "dark"
	});
	
	/*--------------- LOADING SCREEN ---------------*/
	setTimeout(function() {
		$('body').addClass('loaded');
	}, 0);
	
	/*--------------- FAQ ACCORDION ---------------*/
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;
		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {
			el: this.el,
			multiple: this.multiple
		}, this.dropdown)
	}
	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
		$this = $(this),
		$next = $this.next();
		$next.slideToggle();
		$this.parent().toggleClass('open');
		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}
	var accordion = new Accordion($('#accordion'), false);
	
	/* ------------------ COUNTER WIDGETS -----------------*/
	var $myDiv = $('#counter');
	if ($myDiv.length) {
		$(window).on('scroll', function() {
			var a = 0;
			var oTop = $('#counter').offset().top - window.innerHeight;
			if (a == 0 && $(window).scrollTop() > oTop) {
				$('.counter-value').each(function() {
					var $this = $(this),
						countTo = $this.attr('data-count');
					$({
						countNum: $this.text()
					}).animate({
						countNum: countTo
					}, {
						duration: 2000,
						easing: 'swing',
						step: function() {
							$this.text(Math.floor(this.countNum));
						},
						complete: function() {
							$this.text(this.countNum);
						}
					});
				});
				a = 1;
			}
		});
	}
	
	$(window).on('resize', function() {
		location.reload();
	});

}(jQuery));