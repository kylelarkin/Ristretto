window.FontAwesomeConfig={searchPseudoElements:!0},jQuery(document).ready((function($){return AOS.init(),objectFitImages(),$(".menu-toggle").on("click",(function(e){return $(this).toggleClass("active"),$(".menu-wrapper").toggleClass("open"),$(".body--wrapper").toggleClass("nav-open")})),$(".nav-search-btn").click((function(){return $(".header-search-wrapper").addClass("search-open"),$(".header-search-input").focus()})),$(".header-search-close").click((function(){return $(".header-search-wrapper").removeClass("search-open")})),$(window).load((function(){}))})),jQuery(window).on("scroll",(function(){return AOS.refreshHard()})),jQuery(window).on("load",(function(){return jarallax(document.querySelectorAll(".jarallax, .has-parallax"),{speed:.2,imgPosition:"center bottom"})}));