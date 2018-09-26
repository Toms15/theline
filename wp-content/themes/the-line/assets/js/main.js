jQuery(document).foundation();
jQuery(document).ready(function(){

  // ----------------------------------------
  // Cookie Bar
  // ----------------------------------------
  jQuery.cookieBar({
   message: "Cliccando su OK, l’utente accetta l’utilizzo dei cookie di terze parti. Per maggiori informazioni, anche in ordine alla disattivazione, è possibile consultare l'<a class='cookie-link-2' href='/cookie'>informativa sui cookie</a> completa.",
   acceptText: 'Ok',
   fixed: true,
   bottom: true
  });
	
	// ----------------------------------------
  // Add Active Class to Current Page
  // ----------------------------------------
	jQuery(function(jQuery) {
     var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
     jQuery('.main-navigation ul a').each(function() {
     	if (this.href === path) {
     		jQuery(this).addClass('active_page');
     	}
     });
   });

  jQuery('.cont').on('mouseover', function(){
    turnOnContinent($(this).data('continent'));
  }).on('mouseout', function(){

    

    if ($('.map__incentive--info:hover').length == 0) {
      turnOffContinent($(this));
    }

  })

  function turnOffContinent(continent){
    document.getElementById('map').src= 'wp-content/themes/the-line/images/map.png';
    jQuery('.map__incentive--info').removeClass('show');
    jQuery('.dropdown-' + $(this).data('continent')).removeClass('show');
  }

  function turnOnContinent(continent){
    document.getElementById('map').src= 'wp-content/themes/the-line/images/map-' + continent + '.png';
    jQuery('.map__incentive--info').removeClass('show');
    jQuery('.dropdown-' + continent).addClass('show');
  }

	// ----------------------------------------
  // Add Class to Scroll Page
  // ----------------------------------------
	window.addEventListener('scroll', function(e){
		var distanceY = window.pageYOffset || document.documentElement.scrollTop,
		shrinkOn = 40,
		header = jQuery("header");
		if (distanceY > shrinkOn) {
			header.addClass("is--scrolled");
		} else {
			if (header.hasClass("is--scrolled")) {
				header.removeClass("is--scrolled");
			}
		}
	});

  // ----------------------------------------
  // AOS
  // ----------------------------------------
  AOS.init({
    disable: 'mobile'
  });

  // ----------------------------------------
  // Pop-up for Share Event
  // ----------------------------------------
  jQuery('.pop').click(function(event){
    event.preventDefault();
    // console.log('clicked');

    newwindow=window.open(jQuery(this).attr('href'),'name','height=450,width=550');
    if (window.focus) {newwindow.focus()}
      return false;
  });

	// ----------------------------------------
  // Header Mobile
  // ----------------------------------------
  jQuery('.menu__mobile').on('click', function() {
    jQuery('.header__mobile').toggleClass('show');
    jQuery('.menu__mobile').toggleClass('shrink');
  });

  // ----------------------------------------
  // Material
  // ----------------------------------------
  jQuery('.checkbox__material label span').on('click', function() {
    jQuery('.checkbox__material').toggleClass('check');
    jQuery('.wpcf7-submit').toggleClass('is--disabled');
  });

  // ----------------------------------------
  // Init Swiper
  // ----------------------------------------
  if(jQuery('.swiper--hero').length) {
    var mySwiper = new Swiper('.swiper--hero', {
    	speed: 400,
    	spaceBetween: 0,
      loop: true,
    	pagination: {
    		el: '.swiper-pagination',
    		type: 'bullets',
    		clickable: true
    	},
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });
  }
  if(jQuery('.page__slider').length) {
    var mySwiper = new Swiper('.page__slider', {
      slidesPerView: 'auto',
      spaceBetween: 20,
      speed: 400,
      loop: true,
      breakpoints: {
        1024: {
          spaceBetween: 20,
        },
        768: {
          spaceBetween: 20,
        },
        640: {
          spaceBetween: 10,
        },
        320: {
          spaceBetween: 10,
        }
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 5000,
      },
    });
  }

  // ----------------------------------------
  // Google Maps
  // ----------------------------------------
  jQuery(function() {
    function initialize() {       
      var mapOptions = {
        center: new google.maps.LatLng(42.050939,12.402032),
        zoom: 15,
        scrollwheel: false,
        styles: [
        {
          "featureType": "all",
          "elementType": "labels.text.fill",
          "stylers": [
          {
            "saturation": 36
          },
          {
            "color": "#000000"
          },
          {
            "lightness": 40
          }
          ]
        },
        {
          "featureType": "all",
          "elementType": "labels.text.stroke",
          "stylers": [
          {
            "visibility": "on"
          },
          {
            "color": "#000000"
          },
          {
            "lightness": 16
          }
          ]
        },
        {
          "featureType": "all",
          "elementType": "labels.icon",
          "stylers": [
          {
            "visibility": "off"
          }
          ]
        },
        {
          "featureType": "administrative",
          "elementType": "geometry.fill",
          "stylers": [
          {
            "color": "#000000"
          },
          {
            "lightness": 20
          }
          ]
        },
        {
          "featureType": "administrative",
          "elementType": "geometry.stroke",
          "stylers": [
          {
            "color": "#000000"
          },
          {
            "lightness": 17
          },
          {
            "weight": 1.2
          }
          ]
        },
        {
          "featureType": "landscape",
          "elementType": "all",
          "stylers": [
          {
            "visibility": "on"
          }
          ]
        },
        {
          "featureType": "landscape",
          "elementType": "geometry",
          "stylers": [
          {
            "color": "#000000"
          },
          {
            "lightness": 20
          }
          ]
        },
        {
          "featureType": "landscape",
          "elementType": "labels.icon",
          "stylers": [
          {
            "saturation": "-100"
          },
          {
            "lightness": "-54"
          }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "all",
          "stylers": [
          {
            "visibility": "on"
          },
          {
            "lightness": "0"
          }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
          {
            "color": "#000000"
          },
          {
            "lightness": 21
          }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels.icon",
          "stylers": [
          {
            "saturation": "-89"
          },
          {
            "lightness": "-55"
          }
          ]
        },
        {
          "featureType": "road",
          "elementType": "labels.icon",
          "stylers": [
          {
            "visibility": "off"
          }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [
          {
            "color": "#000000"
          },
          {
            "lightness": 17
          }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [
          {
            "color": "#000000"
          },
          {
            "lightness": 29
          },
          {
            "weight": 0.2
          }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "geometry",
          "stylers": [
          {
            "color": "#000000"
          },
          {
            "lightness": 18
          }
          ]
        },
        {
          "featureType": "road.local",
          "elementType": "geometry",
          "stylers": [
          {
            "color": "#000000"
          },
          {
            "lightness": 16
          }
          ]
        },
        {
          "featureType": "transit",
          "elementType": "geometry",
          "stylers": [
          {
            "color": "#000000"
          },
          {
            "lightness": 19
          }
          ]
        },
        {
          "featureType": "transit.station",
          "elementType": "labels.icon",
          "stylers": [
          {
            "visibility": "on"
          },
          {
            "saturation": "-100"
          },
          {
            "lightness": "-51"
          }
          ]
        },
        {
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [
          {
            "color": "#000000"
          },
          {
            "lightness": 17
          }
          ]
        }
        ] 
      };
      var map = new google.maps.Map(document.getElementById("map-theline"),
        mapOptions);

      // var icon = {
      //   url: 'images/marker.png',
      // }

      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(42.050939,12.402032),
        map: map,
        // icon: icon
      });
    }

    if(jQuery('#cookie-bar').length) {
      jQuery('.cb-enable').on('click', initialize);
    } else {
      initialize();
    }

  });

  // ----------------------------------------
  // Magnific Popup Gallery
  // ----------------------------------------
  jQuery('.images__event').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    gallery: {
      enabled:true,

      preload: [1,3],

      navigateByImgClick: true,

      arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',

      tPrev: 'Previous (Left arrow key)',
      tNext: 'Next (Right arrow key)',
      tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
    }
  });

  // ----------------------------------------
  // Fix Footer on bottom page
  // ----------------------------------------
  // function fixfooter()
  // { 
  //  if(jQuery('footer').length > 0){
  //    var docHeight = jQuery(window).height();
  //    var footerHeight = jQuery('footer').height();
  //    var footerTop = jQuery('footer').position().top + footerHeight;
  //    if (footerTop < docHeight) {
  //       jQuery('footer').css('margin-top', (docHeight - footerTop - 1) + 'px');
  //     }
  //   }
  // };
  // if (jQuery(window).width() > 767) {
  //   fixfooter();  
  // };
  // jQuery(window).resize(function() {
  //   fixfooter();  
  // });
});

jQuery(window).on('load', function() {
  // jQuery('.grid-events').masonry({
  //   // options
  //   itemSelector: ".mix",
  //   horizontalOrder: false,
  //   columnWidth: ".mix",
  //   percentPosition: false
  // });

  jQuery('.grid').masonry({
    // options
    itemSelector: ".column",
    horizontalOrder: false,
    columnWidth: ".column",
    percentPosition: false
  });

  // mixItUp function
  var mixer = mixitup('.all_events', {
    animation: {
        duration: 800
    }
  });
});