(function ($) {
 "use strict";

   /*------------------------------
   Header on up schroll
    ------------------------------*/

    // grab an element
    var myElement = document.querySelector(".headroom");
    // construct an instance of Headroom, passing the element
    if (myElement){
        var headroom  = new Headroom(myElement);
        headroom.init();
    }
    // initialise



    /*----------------------------
      Sticky Header
    ------------------------------ */
	$(window).on('scroll',function() {    
		var scroll = $(window).scrollTop();
		if (scroll < 220) {
		$(".sticker").removeClass("sticky");
		}else{
		$(".sticker").addClass("sticky");
		}
	});  
 
/*---------------------
 wow .js
--------------------- */
	new WOW().init();	
	
/*---------------------
 portfolio .js
--------------------- */	
	$('.grid').imagesLoaded( function() {

        // filter for button click
        $('.portfolio-menu').on( 'click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });

        // Isotope
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item'
            }
        });

    });

    $('.portfolio-menu button').on('click', function(event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	});
	
/*-----------------------
Magnific Popup
------------------------*/
	$('.img-poppu').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}
	});	
	
/*-----------------------
Main-menu
------------------------*/	
	$('.main-menu nav').meanmenu({
		meanScreenWidth: "991",
		meanMenuContainer: '.mobile-menu'
	}); 
 
	
/*----------------------
Scroll-up
------------------------*/
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up" aria-hidden="true"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
/*----------------------
 Counter-up
 ------------------------*/
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
/*--------------------------
 testimonial-active
 ---------------------------- */
    $('.testimonial-active').owlCarousel({
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:3000,
        smartSpeed:1000,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

/*--------------------------
 slider-active
 ---------------------------- */
    $('.slider-active').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
/*--------------------------
 slider-active
 ---------------------------- */
    $('.portfolio-slider').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
	


 
})(jQuery);  