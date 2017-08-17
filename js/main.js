(function ($) {
 "use strict";

   /*------------------------------
   Header on up schroll
    ------------------------------*/

    // grab an element
    var myElement = document.querySelector(".headroom");
    // construct an instance of Headroom, passing the element
    var headroom  = new Headroom(myElement);
    // initialise
    headroom.init();


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
	
	
/*---------------------
 Ajax Contact Form
--------------------- */

	$('.cf-msg').hide();
    $('form#cf button#submit').on('click', function() {
        var fname = $('#fname').val();
        var subject = $('#subject').val();
        var email = $('#email').val();
        var msg = $('#msg').val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!regex.test(email)) {
            alert('Please enter valid email');
            return false;
        }

        fname = $.trim(fname);
        subject = $.trim(subject);
        email = $.trim(email);
        msg = $.trim(msg);

        if (fname != '' && email != '' && msg != '') {
            var values = "fname=" + fname + "&subject=" + subject + "&email=" + email + " &msg=" + msg;
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: values,
                success: function() {
                    $('#fname').val('');
                    $('#subject').val('');
                    $('#email').val('');
                    $('#msg').val('');

                    $('.cf-msg').fadeIn().html('<div class="alert alert-success"><strong>Success!</strong> Email has been sent successfully.</div>');
                    setTimeout(function() {
                        $('.cf-msg').fadeOut('slow');
                    }, 4000);
                }
            });
        } else {
            $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Please fillup the informations correctly.</div>')
        }
        return false;
    });	
	
	

 
})(jQuery);  