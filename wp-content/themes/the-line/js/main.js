jQuery(document).foundation(),jQuery(document).ready(function(){function e(e){document.getElementById("map").src="wp-content/themes/the-line/images/map.png",jQuery(".map__incentive--info").removeClass("show"),jQuery(".dropdown-"+$(this).data("continent")).removeClass("show")}function t(e){document.getElementById("map").src="wp-content/themes/the-line/images/map-"+e+".png",jQuery(".map__incentive--info").removeClass("show"),jQuery(".dropdown-"+e).addClass("show")}jQuery.cookieBar({message:"Cliccando su OK, l’utente accetta l’utilizzo dei cookie di terze parti. Per maggiori informazioni, anche in ordine alla disattivazione, è possibile consultare l'<a class='cookie-link-2' href='http://www.anaso.it/informativa-sui-cookie/'>informativa sui cookie</a> completa.",acceptText:"Ok",fixed:!0,bottom:!0}),jQuery(function(e){var t=window.location.href;e(".main-navigation ul a").each(function(){this.href===t&&e(this).addClass("active_page")})}),jQuery(".cont").on("mouseover",function(){t($(this).data("continent"))}).on("mouseout",function(){0==$(".map__incentive--info:hover").length&&e($(this))}),window.addEventListener("scroll",function(e){var t=window.pageYOffset||document.documentElement.scrollTop,o=jQuery("header");t>40?o.addClass("is--scrolled"):o.hasClass("is--scrolled")&&o.removeClass("is--scrolled")}),AOS.init({disable:"mobile"}),jQuery(".pop").click(function(e){return e.preventDefault(),newwindow=window.open(jQuery(this).attr("href"),"name","height=450,width=550"),window.focus&&newwindow.focus(),!1}),jQuery(".menu__mobile").on("click",function(){jQuery(".header__mobile").toggleClass("show"),jQuery(".menu__mobile").toggleClass("shrink")}),jQuery(".checkbox__material label span").on("click",function(){jQuery(".checkbox__material").toggleClass("check"),jQuery(".wpcf7-submit").toggleClass("is--disabled")});new Swiper(".swiper--hero",{speed:400,spaceBetween:100,loop:!0,pagination:{el:".swiper-pagination",type:"bullets",clickable:!0}});jQuery(function(){function e(){var e={center:new google.maps.LatLng(42.050939,12.402032),zoom:15,scrollwheel:!1,styles:[{featureType:"all",elementType:"labels.text.fill",stylers:[{saturation:36},{color:"#000000"},{lightness:40}]},{featureType:"all",elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#000000"},{lightness:16}]},{featureType:"all",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"administrative",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:17},{weight:1.2}]},{featureType:"landscape",elementType:"all",stylers:[{visibility:"on"}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"landscape",elementType:"labels.icon",stylers:[{saturation:"-100"},{lightness:"-54"}]},{featureType:"poi",elementType:"all",stylers:[{visibility:"on"},{lightness:"0"}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#000000"},{lightness:21}]},{featureType:"poi",elementType:"labels.icon",stylers:[{saturation:"-89"},{lightness:"-55"}]},{featureType:"road",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:17}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:29},{weight:.2}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#000000"},{lightness:18}]},{featureType:"road.local",elementType:"geometry",stylers:[{color:"#000000"},{lightness:16}]},{featureType:"transit",elementType:"geometry",stylers:[{color:"#000000"},{lightness:19}]},{featureType:"transit.station",elementType:"labels.icon",stylers:[{visibility:"on"},{saturation:"-100"},{lightness:"-51"}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#000000"},{lightness:17}]}]},t=new google.maps.Map(document.getElementById("map-theline"),e);new google.maps.Marker({position:new google.maps.LatLng(42.050939,12.402032),map:t})}jQuery("#cookie-bar").length?jQuery(".cb-enable").on("click",e):e()}),jQuery(".images__event").magnificPopup({delegate:"a",type:"image",gallery:{enabled:!0,preload:[1,3],navigateByImgClick:!0,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',tPrev:"Previous (Left arrow key)",tNext:"Next (Right arrow key)",tCounter:'<span class="mfp-counter">%curr% of %total%</span>'}})}),jQuery(window).on("load",function(){jQuery(".grid").masonry({itemSelector:".column",horizontalOrder:!1,columnWidth:".column",percentPosition:!1});mixitup(".all_events",{animation:{duration:800}})});