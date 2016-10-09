(function($) {
	
	"use strict";
	
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(200).fadeOut(500);
		}
	}
	
	//Change Header Style
	function headerStyle() {
		if($('.main-header').length){
			var topbarHeight = $('.header-top').innerHeight();
			var windowpos = $(window).scrollTop();
			if (windowpos >= topbarHeight) {
				$('.main-header').addClass('header-fixed');
			} else {
				$('.main-header').removeClass('header-fixed');
			}
		}
	}
	
	
	//Main Slider
	if($('.main-slider').length){

		jQuery('.tp-banner').show().revolution({
		  delay:10000,
		  startwidth:1170,
		  startheight:600,
		  hideThumbs:600,
	
		  thumbWidth:80,
		  thumbHeight:50,
		  thumbAmount:5,
	
		  navigationType:"bullet",
		  navigationArrows:"0",
		  navigationStyle:"preview4",
	
		  touchenabled:"on",
		  onHoverStop:"off",
	
		  swipe_velocity: 0.7,
		  swipe_min_touches: 1,
		  swipe_max_touches: 1,
		  drag_block_vertical: false,
	
		  parallax:"mouse",
		  parallaxBgFreeze:"on",
		  parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
	
		  keyboardNavigation:"off",
	
		  navigationHAlign:"center",
		  navigationVAlign:"bottom",
		  navigationHOffset:0,
		  navigationVOffset:20,
	
		  soloArrowLeftHalign:"left",
		  soloArrowLeftValign:"center",
		  soloArrowLeftHOffset:20,
		  soloArrowLeftVOffset:0,
	
		  soloArrowRightHalign:"right",
		  soloArrowRightValign:"center",
		  soloArrowRightHOffset:20,
		  soloArrowRightVOffset:0,
	
		  shadow:0,
		  fullWidth:"on",
		  fullScreen:"off",
	
		  spinner:"spinner4",
	
		  stopLoop:"off",
		  stopAfterLoops:-1,
		  stopAtSlide:-1,
	
		  shuffle:"off",
	
		  autoHeight:"off",
		  forceFullWidth:"on",
	
		  hideThumbsOnMobile:"on",
		  hideNavDelayOnMobile:1500,
		  hideBulletsOnMobile:"on",
		  hideArrowsOnMobile:"on",
		  hideThumbsUnderResolution:0,
	
		  hideSliderAtLimit:0,
		  hideCaptionAtLimit:0,
		  hideAllCaptionAtLilmit:0,
		  startWithSlide:0,
		  videoJsPath:"",
		  fullScreenOffsetContainer: ".main-slider"
	  });

		
	}
	
	//Search Box Scroll Down

	$(document).ready(function(){

	// hide #back-top first
	$("#search-button").hide();
	
	// fade in #search-button
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#search-button').fadeIn();
			} else {
				$('#search-button').fadeOut();
			}
		});

		// scroll body to 0px on click
			$('#search-button a').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});

	});

	
	
	$("#search-button").click(function() {
	    $('html, body').animate({

	        scrollTop: $("#scroll-to-search-box").offset().top
	       
	    }, 1500);
	});
	
	//Service Tabs
	if($('.service-tabs').length){
		$('.service-tabs .tab-btn').on('click', function() {
			var target = $($(this).attr('data-id'));
			$('.service-tabs .tab-btn').removeClass('active-btn');
			$(this).addClass('active-btn');
			$('.service-tabs .tab').fadeOut(0);
			$('.service-tabs .tab').removeClass('active-tab');
			$(target).fadeIn(0);
			$(target).addClass('active-tab');
		});
	}
	


	//Projects Filter
	if($('.filter-list').length){
		$('.filter-list').mixitup({});
	}
	
	//Testimonial Slider
	if($('.testimonials-area .slider').length){
		$('.testimonials-area .slider').bxSlider({
			adaptiveHeight: true,
			auto:true,
			controls: false,
			pause: 5000,
			speed: 1500,
			pagerCustom: '.custom-pager'
		});
	}
	
	
	//News Slider
	if ($('.news-area .news-slider').length) {
		$('.news-area .news-slider').owlCarousel({
			loop:true,
			margin:50,
			nav:true,
			autoplay: 5000,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:2
				},
				1000:{
					items:2
				},
				1400:{
					items:2
				}
			}
		});    		
	}
	
	
	//Quote Slider
	if ($('.quote-slider').length) {
		$('.quote-slider').owlCarousel({
			items: 1,
			loop:true,
			margin:0,
			nav:false,
			autoplay: 5000
		});    		
	}
	
	//Client Logo Slider
	if ($('.client-logo .slider').length) {
		$('.client-logo .slider').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			autoplay: 3000,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1000:{
					items:4
				},
				1400:{
					items:4
				}
			}
		});    		
	}
	
	
	//Project Slider
	if ($('.project-slider .slider').length) {
		$('.project-slider .slider').owlCarousel({
			loop:true,
			margin:6,
			nav:true,
			autoplay: 3000,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:4
				},
				800:{
					items:4
				},
				1000:{
					items:5
				},
				1400:{
					items:6
				}
			}
		});    		
	}
	
	
	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox();
	}
	
	
	// Fact Counter
	function factCounter() {
		$('.column.animated').each(function() {
	
			var $t = $(this),
				n = $t.find(".count-text").attr("data-stop"),
				r = parseInt($t.find(".count-text").attr("data-speed"), 10);
				
			if (!$t.hasClass("counted")) {
				$t.addClass("counted");
				$({
					countNum: $t.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						$t.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						$t.find(".count-text").text(this.countNum);
					}
				});
			}
			
		});
	}
	
	
	//Contact Form Validation
	if($('#contact-form').length){
		$('#contact-form').validate({ // initialize the plugin
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				subject: {
					required: true
				}
			}
		});
	}
	
	// Google Map Settings
	if($('#map-location').length){
		var map;
		 map = new GMaps({
			el: '#map-location',
			zoom: 16,
			scrollwheel:false,
			//Set Latitude and Longitude Here
			lat: -37.817085,
			lng: 144.955631
		  });
		  
		  //Add map Marker
		  map.addMarker({
			lat: -37.817085,
			lng: 144.955631,
			infoWindow: {
			  content: '<p><strong>Envato</strong><br>Melbourne VIC 3000, Australia</p>'
			}
		 
		});
	}
	
	
	// Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       true,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}

/* ==========================================================================
   When document is ready, do
   ========================================================================== */
   
	$(document).on('ready', function() {
		headerStyle();
		factCounter();
	});

/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		headerStyle();
		factCounter();
	});
	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
	});
	

})(window.jQuery);


$("#modal_trigger").leanModal({overlay : 0.6, closeButton: ".modal_close" });
$(function(){
		// Calling Login Form
	$("#login_form").click(function(){
		$(".social_login").show();
		return false;
	});

})

function validateSignUP() {
    var x = document.forms["contact-form-1"]["gender"].value;
    var y = document.forms["contact-form-2"]["username"].value;
    if (x == null || x == "" || y == null || y == "") {
        alert("Name must be filled out");
        return false;
    }
}


