 // ===================== Custom

$(document).ready(function() {
    new WOW().init();
});

$(document).ready(function() {
    // hide #back-top first
    $("#back-top").hide();
    // fade in #back-top
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-top a').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
});

$(document).ready(function() {
    $(".test-slider").owlCarousel({
        loop:true,
	    autoplay:true,
	    autoplayTimeout:5000,
	    responsiveClass:true,
	    center:false,
	    dots:false,
	    nav:false,
        navText: ["<iconify-icon icon='memory:arrow-left-bold'></iconify-icon>","<iconify-icon icon='memory:arrow-right-bold'></iconify-icon>"],
	    responsive:{
	        0:{
	            items:1,
	        },
	        600:{
	            items:1,
	        },
	        1000:{
	            items:2
	        }
	    }
	  })

      $(".banner-slider").owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop:true,
	    autoplay:true,
	    autoplayTimeout:3000,
	    responsiveClass:true,
	    center:true,
        mouseDrag: false,
        touchDrag: false,
	    dots:false,
	    nav:false,
 	    responsive:{
	        0:{
	            items:1,
	        },
	        600:{
	            items:1,
	        },
	        1000:{
	            items:1
	        }
	    }
	  })
    });

// When home page load popup this message
$(function() {
    $("#popModal").modal('show');
});

// Side Bar Menu
$(".menu_icon").click(function() {
    $(".menu_icon").toggleClass("active");
});
$(".menu_icon").click(function() {
    $(".sidebar").toggleClass("active");
});
$(".menu_icon").click(function() {
    $(".mobile_menu").toggleClass("active");
});

// Side Bar Dropdown Menu
jQuery('.accordion .open').children('.accordion_content').slideDown();
jQuery('.accordion_headline').on('click', function() {
    var $this = jQuery(this),
        $li = $this.closest('li'),
        $open = $this.closest('.accordion').find('li.open').not($li);

    //Close open accordions
    $open.children('.accordion_content').slideUp();
    $open.removeClass('open');

    //Open selected accordion
    $li.toggleClass('open');
    $this.next('.accordion_content').slideToggle();
});

// Desktop Dropdown Menu
$(".dropdown_menu_toggle").click(function() {
    $(".dropdown_menus").slideToggle("slow");
});

// Modern Social Media Icon Display
$(".share_icon").mouseover(function() {
    $(".social_icon").addClass("active");
});
$(".share_icon").mouseout(function() {
    $(".social_icon").removeClass("active");
});