
(function ($) {
  $(function () {
    $('.zz-menu-toggle').on('click', function () {
      $('.zz-main-menu-wrap').toggleClass('open');
    });
    $('.zz-main-menu a').on('click', function () {
      $('.zz-main-menu-wrap').removeClass('open');
    });
  });
})(jQuery);
