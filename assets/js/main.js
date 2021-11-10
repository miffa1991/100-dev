jQuery(document).ready(function ($) {
	new WOW().init();
	var windowW, windowH, headerH, headerFixedH, headerFiltri, bottomHero, myScroll, faqTypeW, faqTypeH, marginFilterNews;

	function myVar() {
		windowW = $(window).width();
		windowH = $(window).height();
		bodyEl = $('body');
		headerH = $(".header").outerHeight();
		headerFixedH = $(".header.fixed").outerHeight();
		container = $(".container").width();
		myScroll = $(document).scrollTop();
	}

	function controllScroll(scrollo) {
    if (scrollo > (headerH / 2)) {
        $(".header").addClass("fixed");
        $(".header").removeClass("active");
    } else {
        $(".header").removeClass("fixed");
    }
	}

	jQuery(window).scroll(function (e) {
    myVar();
    controllScroll($(document).scrollTop());
	});

	myVar();
	controllScroll($(document).scrollTop());

	$('[data-fancybox]').fancybox();
	$.fancybox.defaults.backFocus = false;

	jQuery('.menu-item-has-children > a').on('click', function () {
		jQuery(this).next().slideToggle().parent().toggleClass('open-sub');
	})


	// PAGE CURSOR

	document.getElementsByTagName("body")[0].addEventListener("mousemove", function(n) {
    t.style.left = n.clientX + "px", 
		t.style.top = n.clientY + "px", 
		e.style.left = n.clientX + "px", 
		e.style.top = n.clientY + "px", 
		i.style.left = n.clientX + "px", 
		i.style.top = n.clientY + "px"
  });
  var t = document.getElementById("cursor"),
      e = document.getElementById("cursor2"),
      i = document.getElementById("cursor3");
  function n(t) {
      e.classList.add("hover"), i.classList.add("hover")
  }
  function s(t) {
      e.classList.remove("hover"), i.classList.remove("hover")
  }
  s();
  for (var r = document.querySelectorAll(".hover-target"), a = r.length - 1; a >= 0; a--) {
      o(r[a])
  }
  function o(t) {
      t.addEventListener("mouseover", n), t.addEventListener("mouseout", s)
  }

  // Check if custom element visible in Viewport
  jQuery.fn.isInViewport = function () {
    var elementTop = jQuery(this).offset().top;
    var elementBottom = elementTop + jQuery(this).outerHeight();

    var viewportTop = jQuery(window).scrollTop();
    var viewportBottom = viewportTop + jQuery(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
  };
  jQuery(window).on('resize scroll', function () {
    scrollView();
  });

  scrollView();
  function scrollView(){
	jQuery('.scroll-view').each(function () {
      if (jQuery(this).isInViewport()) {
			jQuery(this).addClass('visible-el');
        countNumbers(this);
      } else {
			jQuery(this).removeClass('visible-el');
      }
    });
  }
  // end
  
  //count numbers
  function countNumbers(element) {
    if(jQuery(element).data('anim') == 1) return;
    jQuery(element).data('anim', 1);

    jQuery(element).each(function () {
    	 var $this = jQuery(this).find('b');
		   var size = $this.text().split(".")[1] ? jQuery(this).text().split(".")[1].length : 0;
		   $this.prop('Counter', 0).animate({
		      Counter: $this.text()
		   }, {
		      duration: 5000,
		      step: function (func) {
		         $this.text(parseFloat(func).toFixed(size));
		      }
		   });
		});
  }
  //end

});

if(jQuery('.portfolio-section').length) {
	document.addEventListener( 'DOMContentLoaded', function () {
	  document.querySelectorAll( '.portfolio-section .swiper-container' ).forEach( function( node ) {
	    // Getting slides quantity before slider clones them
	    var node_nav_next = jQuery(node).parent().parent().find('.swiper-button-next');
    	var node_nav_prev = jQuery(node).parent().parent().find('.swiper-button-prev');
	    
	    // Swiper initialization
	    new Swiper( node, {
	      speed: 2000,
		  //  loop: true,
		    slidesPerView: 4,
		    observeParents: true,
		    reverseDirection: true,
		    autoplay: {
		    	delay: 2000,
		    },
		    disableOnInteraction: false,
		    spaceBetween: 14,
	      navigation: {
			    nextEl: node_nav_next,
			    prevEl: node_nav_prev,
			  },
	      breakpoints: {
	      	767: {
	      		slidesPerView: 2,
	      	},
	      	1024: {
	      		slidesPerView: 2,
	      	},
	      	1280: {
	      		slidesPerView: 3,
	      	}
	      }
	    });
	  });
	});

	jQuery('.load-more').on('click', function() {
		jQuery(this).closest('.container').find('.visible-less').removeClass('visible-less').next().remove();
	});

	// SOME BROWSER DON'T WANNA GET 'AUTOPLAY' ATTR FOR VIDEO TAG
	// so it's little hack
	let video = document.getElementById('video');
	video.addEventListener('click',function(){ video.play(); },false);
	// end

	jQuery('.js-anchor-block').on('click', function () {
	  var $el = jQuery(this),
	  		data_el = $el.data('scroll');
	  
			  jQuery('body').removeClass('open-menu');
			  jQuery('.hamburger').removeClass('opened');

	  setTimeout(function() {
		jQuery('html, body').animate({
		    scrollTop: jQuery('[data-scrolling=' + data_el + ']').offset().top - 77
		  }, 2000);
	  })

	  return false;
	});
}

