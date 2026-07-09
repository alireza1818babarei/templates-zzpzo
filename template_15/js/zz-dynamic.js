(function () {
  var styleId = 'zz-template-15-footer-fix';

  if (document.getElementById(styleId)) {
    return;
  }

  var css = [
    'footer.zz-footer { overflow: hidden; }',
    'footer.zz-footer .row { display: flex; align-items: center; justify-content: space-between; gap: 24px; flex-wrap: nowrap; margin-left: 0; margin-right: 0; }',
    'footer.zz-footer .row:before, footer.zz-footer .row:after { display: none; }',
    'footer.zz-footer .col-md-6, footer.zz-footer .col-sm-6 { float: none; width: auto; padding-left: 0; padding-right: 0; }',
    'footer.zz-footer .row > .col-md-6:first-child { flex: 1 1 auto; min-width: 200px; }',
    'footer.zz-footer p { margin: 0; white-space: nowrap; }',
    'footer.zz-footer .zz-footer-links { flex: 0 1 auto; display: flex; align-items: center; justify-content: flex-end; gap: 26px; min-width: 0; text-align: right; }',
    'footer.zz-footer .zz-footer-links a { display: inline-flex; align-items: center; margin: 0; white-space: nowrap; line-height: 1.45; font-size: clamp(11px, 0.96vw, 13px); letter-spacing: clamp(1.5px, 0.22vw, 3px); }',
    '@media (max-width: 900px) { footer.zz-footer .row { flex-direction: column; justify-content: center; text-align: center; gap: 16px; } footer.zz-footer .row > .col-md-6:first-child { min-width: 0; } footer.zz-footer p { white-space: normal; } footer.zz-footer .zz-footer-links { justify-content: center; text-align: center; flex-wrap: wrap; gap: 10px 22px; } }',
    '@media (max-width: 480px) { footer.zz-footer { padding: 30px 0; } footer.zz-footer .zz-footer-links { flex-direction: column; gap: 10px; } }'
  ].join('\n');

  var style = document.createElement('style');
  style.id = styleId;
  style.appendChild(document.createTextNode(css));
  document.head.appendChild(style);
})();

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
