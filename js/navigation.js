/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

(function($){
    $(function () {
        $(document).scroll(function () {
          var $header = $(".header-index");
          var $logo = $(".index-logo");
          var $nav_index = $(".nav-index-items");
          $header.toggleClass('scrolled', $(this).scrollTop() > 100);
          $logo.toggleClass('logo-scrolled', $(this).scrollTop() > 100);
          $nav_index.toggleClass('nav-scrolled', $(this).scrollTop() > 100);
        });
      });

      $(function () {
        $(document).scroll(function () {
          var $header_default = $(".header-default");
          var $logo_default = $(".default-logo");
          var $nav_default = $(".nav-default-items");
          $header_default.toggleClass('default-scrolled', $(this).scrollTop() > 100);
          $logo_default.toggleClass('logo-default-scrolled', $(this).scrollTop() > 100);
          $nav_default.toggleClass('nav-default-scrolled', $(this).scrollTop() > 100);
        });
      });

  $('.index-hamburger-container').click( function() {
    $(".index-hamburger-container").toggleClass("active");
    $(".index-overlay").toggleClass("open");
  } );

  $('.default-hamburger-container').click( function() {
    $(".default-hamburger-container").toggleClass("active");
    $(".default-overlay").toggleClass("open");
  } );
  

})(jQuery);