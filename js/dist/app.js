"use strict";(function(){window.FontAwesomeConfig={searchPseudoElements:!0},jQuery(document).ready((function(e){return e(".menu-toggle").on("click",(function(a){return e(this).toggleClass("active"),e(".menu-wrapper").toggleClass("open"),e(".body--wrapper").toggleClass("nav-open")})),e(".body--wrapper").click((function(){if(e(this).hasClass("nav-open"))return e(".menu-toggle").removeClass("active"),e(".menu-wrapper").removeClass("open"),e(".body--wrapper").removeClass("nav-open")})),e(".account-signed-out").click((function(a){return a.preventDefault(),e("#leaky-paywall-login-form").fadeToggle("fast"),e("#user_login").focus()})),e("body").on("click",".leaky-login-link",(function(){return e("#leaky-paywall-login-form").fadeIn("fast"),e("#user_login").focus()})),e(".nav-search-btn").click((function(){return e(".header-search-wrapper").addClass("search-open"),e(".header-search-input").focus()})),e(".header-search-close").click((function(){return e(".header-search-wrapper").removeClass("search-open")})),e(".series-slider").slick({prevArrow:!1,nextArrow:!1,fade:!0,autoplay:!0,autoplaySpeed:6e3,speed:800}),e(".leaky-paywall-profile-subscription-details").wrap('<div class="subscriber-table-wrapper"></div>'),AOS.init(),objectFitImages(),e(window).load((function(){}))}))}).call(void 0);