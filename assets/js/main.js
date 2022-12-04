import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
const firebaseConfig = {
  apiKey: "AIzaSyAxuowJzxi7QXcCwN8jlsWWAUjzvo3rSF8",
  authDomain: "redo-a05c1.firebaseapp.com",
  projectId: "redo-a05c1",
  storageBucket: "redo-a05c1.appspot.com",
  messagingSenderId: "1048186852896",
  appId: "1:1048186852896:web:678b567a0fae23b5ce8e45",
  measurementId: "G-1BG1GEGM7X"
};

const app = initializeApp(firebaseConfig);

import {
	getFirestore, doc, getDocs, onSnapshot, collection
}
from "https://www.gstatic.com/firebasejs/9.14.0/firebase-firestore.js";

const db = getFirestore();
// const colRef = collection(db, "killswitch");
let data = []

async function GetAllDataOnce() {
	const querySnapshot = await getDocs(collection(db, "killswitch"));
	querySnapshot.forEach(doc => {
		doc.data().kill ?document.getElementsByTagName("body")[0].style.display = "none":"";

	});
}



// Get a list of cities from your database
/********************************************************
  1. Custom mouse cursor
  2. Animsition preloader
  3. Swiper slider
  4. Isotope filter
  5. Midnight
  6. Navigation open/close
  7. Drop-down menu
  8. Change menu background
  9. ScrollAnimations
  10. Headroom
  11. Magnific popup
  12. Scroll to id
  13. Touch, no touch
  14. fixed footer
  15. Progress bar
  16. Fade
********************************************************/

$(function() {
    "use strict";
    
    /* 1. Custom mouse cursor */
	document.getElementsByTagName("body")[0].addEventListener("mousemove", function(n) {
		e.style.left = n.clientX + "px", 
		e.style.top = n.clientY + "px"
    });
    var 
        e = document.getElementById("pointer");
        
	$(document).mousemove(function(e){
		
		$(".red-bg")
		.on("mouseenter", function() {	 
			$('.pointer').addClass("black")	  
		})
		.on("mouseleave", function() {	  
			$('.pointer').removeClass("black")	  
		})
		
		$(".pointer-large, .swiper-button-next, .swiper-button-prev, .mfp-arrow-left, .mfp-arrow-right, .home-slider .swiper-pagination-bullet")
		.on("mouseenter", function() {	 
			$('.pointer').addClass("large")	  
		})
		.on("mouseleave", function() {	  
			$('.pointer').removeClass("large")	  
		})
		
		$(".pointer-small, .testimonials-slider .swiper-pagination-bullet, .portfolio-slider .swiper-pagination-bullet")
		.on("mouseenter", function() {	 
			$('.pointer').addClass("small")	  
		})
		.on("mouseleave", function() {	  
			$('.pointer').removeClass("small")	  
		})
		
		$(".mfp-img, .pointer-right")
		.on("mouseenter", function() {	 
			$('.pointer').addClass("right")	  
		})
		.on("mouseleave", function() {	  
			$('.pointer').removeClass("right")	  
		})
		
		$(".pointer-zoom")
		.on("mouseenter", function() {	 
			$('.pointer').addClass("zoom")	  
		})
		.on("mouseleave", function() {	  
			$('.pointer').removeClass("zoom")	  
		})
		
		$(".pointer-open")
		.on("mouseenter", function() {	 
			$('.pointer').addClass("open")	  
		})
		.on("mouseleave", function() {	  
			$('.pointer').removeClass("open")	  
		})
		
	});
	
	$(document).ready(function() {
	
		/* 2. Animsition preloader */
		$(".animsition-overlay").animsition({
		    inClass: 'overlay-slide-in-right',
		    outClass: 'overlay-slide-out-right',
		   	inDuration: 1,
		    outDuration: 1500,
		    linkElement: '.animsition-link',
		    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
		    loading: false,
		    loadingParentElement: 'body', //animsition wrapper element
		    loadingClass: 'animsition-loading',
		    loadingInner: '', // e.g '<img src="loading.svg" />'
		    timeout: false,
		    timeoutCountdown: 5000,
		    onLoadEvent: true,
		    browser: [ 'animation-duration', '-webkit-animation-duration'],
		    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
		    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
		    overlay : true,
		    overlayClass : 'animsition-overlay-slide',
		    overlayParentElement : 'body',
		    transition: function(url){ window.location.href = url; }
		});
			
		$('body').on('animsition.outStart', function(){
			$('body').removeClass('active');
			$('body').addClass('out');
		})


		$(window).on('load', function(){
				GetAllDataOnce();
		})
		
		
		$('body').on('animsition.inEnd', function(){
			$('body').addClass('active');
			$('body').addClass('in');
			setTimeout(function () {      
			    $("body").addClass("anim"); 
			}, 1000);
			
			/* 3. Swiper slider */
			var interleaveOffset = 0.5;
	
			var mySwiper = new Swiper ('.home-slider', {
				spaceBetween: 0,
			  	speed: 1500,
			    autoplay: {
			        delay: 5000
			    },
			    autoHeight: true,
			  	watchSlidesProgress: true,
			  	pagination: {
					el: '.swiper-pagination',
			    	type: 'bullets',
			       	clickable: true
				},
			  	navigation: {
			    	nextEl: ".swiper-button-next",
			    	prevEl: ".swiper-button-prev"
			  	},
			  	on: {
				    progress: function() {
				      	var swiper = this;
					  	for (var i = 0; i < swiper.slides.length; i++) {
				        	var slideProgress = swiper.slides[i].progress;
							var innerOffset = swiper.width * interleaveOffset;
							var innerTranslate = slideProgress * innerOffset;
							swiper.slides[i].querySelector(".slide-bg").style.transform =
				          	"translate3d(" + innerTranslate + "px, 0, 0)";
				      	}      
				    },
				    touchStart: function() {
				      	var swiper = this;
					  	for (var i = 0; i < swiper.slides.length; i++) {
				        	swiper.slides[i].style.transition = "";
				      	}
				    },
				    setTransition: function(speed) {
				      	var swiper = this;
					  	for (var i = 0; i < swiper.slides.length; i++) {
				        	swiper.slides[i].style.transition = speed + "ms";
							swiper.slides[i].querySelector(".slide-bg").style.transition =
							speed + "ms";
				      	}
				    }
			  	}
			});
				
			var swiper = new Swiper ('.testimonials-slider', {
			  	speed: 1200,
			    autoplay: {
			        delay: 5000
			    },
			    spaceBetween: 30,
			    loop: true,
			    autoHeight: true,
		      	pagination: {
		        	el: '.swiper-pagination',
					clickable: true
		      	}
		    });
			    
		    var swiper = new Swiper ('.about-slider', {
			  	slidesPerView: 2,
			  	spaceBetween: 30,
			  	centeredSlides: true,
			  	speed: 1400,
			  	freeMode: true,
			  	navigation: {
			    	nextEl: ".swiper-button-next",
			    	prevEl: ".swiper-button-prev"
			  	},
			  	breakpoints: {
				    767: {
				    	slidesPerView: 1
				    }
				}
		    });
		    
		    var mySwiper = new Swiper(".portfolio-slider", {
				direction: "vertical",
				navigation: {
			    	nextEl: ".swiper-button-next",
			    	prevEl: ".swiper-button-prev"
			  	},
			  	pagination: {
		        	el: '.swiper-pagination',
					clickable: true,
					dynamicBullets: true
		      	},
			  	speed: 1300,
			  	parallax: true,
			  	autoplay: false,
			  	effect: "slide",
			  	mousewheel: {
			  		sensitivity: 1
	  			}
			});
	
			var mySwiper = new Swiper(".portfolio-column-slider", {
				slidesPerView: 3,
				navigation: {
			    	nextEl: ".swiper-button-next",
			    	prevEl: ".swiper-button-prev"
			  	},
			  	speed: 1300,
			  	parallax: true,
			  	freeMode: true,
			  	autoplay: false,
			  	breakpoints: {
				    999: {
				    	slidesPerView: 2
				    },
				    767: {
				    	slidesPerView: 1
				    }
				},
				mousewheel: {
					sensitivity: 1
	  			}
			});
		    
		    var swiper = new Swiper ('.portfolio-slider2', {
			  	slidesPerView: 2,
			  	spaceBetween: 30,
			  	centeredSlides: true,
			  	speed: 1400,
			  	autoplay: {
			        delay: 5000
			    },
			  	freeMode: true,
			  	navigation: {
			    	nextEl: ".swiper-button-next",
			    	prevEl: ".swiper-button-prev"
			  	},
			  	breakpoints: {
				    999: {
				    	slidesPerView: 1
				    }
				}
		    });
		    
		    /* 4. Isotope filter */
			function projectFilter() {
				var $gridt = $('.works');
				$gridt.isotope({
			  		itemSelector: '.grid-item',
			  		percentPosition: true
				});
				$('.filter-buttons').on('click', 'button', function () {
					var filterValue = $(this).attr('data-filter');
					$gridt.isotope({
						filter: filterValue
					});
					$(this).addClass('active').siblings().removeClass('active');
				});
			};
			projectFilter();
	
		});
		    
	    /* 5. Midnight */
	    $('.fixed-header').midnight();
		
		/* 6. Navigation open/close */
		$( ".menu-open" ).on( "click", function() {
		  	$('.menu-open, .nav-container').addClass('active');
		});
		
		$( ".menu-close" ).on( "click", function() {
		  	$('.menu-open, .nav-container').removeClass('active');
		});
		
		/* 7. Drop-down menu */
		$('.dropdown-open').on("click",function(){
		    $(this).find('.dropdown').addClass('active');
		    $('.nav-link').addClass('done');
		    $('.dropdown-close').addClass('active');
		});
		
		$('.dropdown-close').on("click",function(){    
		    $('.dropdown').removeClass('active');
		    $('.nav-link').removeClass('done');
		    $('.dropdown-close').removeClass('active');
		});
	
	});
		
	/* 8. Change menu background */
	$(document).on('mouseover', '.nav-bg-change', function(){		
		$(this).addClass('active').siblings().removeClass('active')
	});
	
	/* 9. ScrollAnimations */
	var $containers = $('[data-animation]:not([data-animation-child]), [data-animation-container]');
	$containers.scrollAnimations();
	
	/* 10. Headroom */
	$(".fixed-header").headroom();
	
	/* 11. Magnific popup */
	$('.photo-popup').magnificPopup({
	  	type: 'image',
	  	mainClass: 'mfp-with-zoom', // this class is for CSS animation below
	  	gallery: {
	    	// options for gallery
	    	enabled: true
	  	},
	  	zoom: {
	    	enabled: true, // By default it's false, so don't forget to enable it
			duration: 800, // duration of the effect, in milliseconds
			easing: 'cubic-bezier(.86, 0, .07, 1)', // CSS transition easing function
			// The "opener" function should return the element from which popup will be zoomed in
			// and to which popup will be scaled down
			// By defailt it looks for an image tag:
			opener: function(openerElement) {
	      		// openerElement is the element on which popup was initialized, in this case its <a> tag
		  		// you don't need to add "opener" option if this code matches your needs, it's defailt one.
		  		return openerElement.is('img') ? openerElement : openerElement.find('img');
	    	}
	  	}
	});
	
	$('.popup-youtube').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false
	});
	
	/* 12. Scroll to id */
	$('.to-top-btn, .scroll-btn').mPageScroll2id();

	
	
	/* 13. Touch, no touch */
	var supports = (function() {
	    var d = document.documentElement,
	        c = "ontouchstart" in window || navigator.msMaxTouchPoints;
	    if (c) {
	        d.className += " touch";
	        return {
	            touch: true
	        }
	    } else {
	        d.className += " no-touch";
	        return {
	            touch: false
	        }
	    }
	})();
	
	/* 14. fixed footer */
	$('footer').footerReveal({ 
		shadow: false,
		zIndex : 1
	});
	
	/* 15. Progress bar */
	$(".progress-zero").each(function(){
		$(this).find(".progress-full").animate({
			width: $(this).attr("data-progress")
  		});
	});

	/* 16. Fade */
	
	// for (let index = 0; index < array.length; index++) {
	// 	$("#fade"+index).click(function(){
	// 		$("#cont1").fadeToggle(1500);
	// 	});
	// }

	

	$("#fade1").click(function(){
		$("#cont1").fadeToggle(1500);
	});

	$("#fade2").click(function(){
		$("#cont2").fadeToggle(1500);
	});

	$("#fade3").click(function(){
		$("#cont3").fadeToggle(1500);
	});
	
});