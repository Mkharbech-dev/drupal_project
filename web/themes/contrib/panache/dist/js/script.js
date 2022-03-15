/* eslint func-names: ["error", "never"] */
(($, Drupal) => {
  Drupal.behaviors.menu = {
    attach: context => {
      // Removed setting parameter from attach to fix warning 'settings' is defined but never used.
      const headerHeight = $("header").outerHeight(true);
      const footerHeight = $("footer").outerHeight(true);
      const pageHeight = footerHeight + headerHeight;
      if ($(window).width() > 991) {
        $("li.menu-item--expanded").hover(function () {
          $("> ul.menu", this).stop(true, true).fadeIn("fast");
          $(this).toggleClass("open");
          $("b", this).toggleClass("caret caret-up");
        }, function () {
          $("> ul.menu", this).stop(true, true).fadeOut("fast");
          $(this).toggleClass("open");
          $("b", this).toggleClass("caret caret-up");
        });
      }
      $(".navbar-toggle", context).click(function () {
        $(this).toggleClass("navbar-on");
        $("#panache-menu nav").animate({ width: "toggle" });
      });
      $(".menu-accordion-icon", context).click(function () {
        $(this).next("ul.menu").slideToggle();
      });
      $(".menu-accordion-icon", context).click(function () {
        $(this).toggleClass("accordion-open");
      });
      $(".panache-banner-wrapper", context).not(".slick-initialized").slick({
        lazyLoad: "ondemand",
        infinite: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1500,
        autoplay: true
      });
      $(".panache-testimonial-wrapper", context).not(".slick-initialized").slick({
        lazyLoad: "ondemand",
        infinite: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1500,
        autoplay: true,
        arrows: false
      });
      $(".main-wrapper").css("min-height", `calc(100vh - ${pageHeight}px`);
    }
  };
})(jQuery, Drupal);