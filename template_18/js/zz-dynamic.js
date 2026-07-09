(function () {
  var styleId = 'zz-template-18-responsive-layout-fix';

  if (document.getElementById(styleId)) {
    return;
  }

  var css = [
    '@media (min-width: 993px) {',
    '  .zz-page-section .container { width: min(1180px, calc(100% - 90px)); max-width: none; }',
    '  .zz-content-layout { --zz-circle-size: min(550px, 42vw); align-items: flex-start !important; justify-content: space-between; gap: 0; }',
    '  .zz-content-layout .tm-section-left { flex: 0 0 calc(50% - 35px); max-width: calc(50% - 35px); height: var(--zz-circle-size); max-height: var(--zz-circle-size); display: flex; flex-direction: column; justify-content: flex-start !important; padding-top: 8px; padding-right: 20px; min-width: 0; overflow: hidden; }',
    '  .zz-content-layout .tm-section-left .zz-page-title { flex: 0 0 auto; margin-bottom: 22px; }',
    '  .zz-content-layout .tm-section-left .zz-dynamic-content { flex: 1 1 auto; min-height: 0; overflow-y: auto; overflow-x: hidden; padding-right: 14px; scrollbar-width: thin; }',
    '  .zz-content-image-wrap { flex: 0 0 calc(50% - 35px); max-width: calc(50% - 35px); display: flex; justify-content: flex-end; align-items: flex-start; min-width: 0; }',
    '  .zz-circle-image { width: var(--zz-circle-size); height: var(--zz-circle-size); max-width: 100%; object-fit: cover; }',
    '}',
    '@media (min-width: 1200px) {',
    '  .zz-content-layout .tm-section-left { flex-basis: 48%; max-width: 48%; }',
    '  .zz-content-image-wrap { flex-basis: 48%; max-width: 48%; }',
    '}',
    '@media (max-width: 992px) {',
    '  .zz-content-layout .tm-section-left { height: auto; max-height: none; overflow: visible; padding-right: 0; }',
    '  .zz-content-layout .tm-section-left .zz-dynamic-content { overflow: visible; padding-right: 0; }',
    '}',

    '  .zz-contact-content-section { padding-bottom: 34px; }',
    '  .zz-contact-form-section { background: #fff; padding: 22px 24px 90px; }',
    '  .zz-contact-form-section .container { width: min(760px, calc(100% - 44px)); max-width: none; }',
    '  .zz-contact-form-card { width: 100%; max-width: none; margin: 0 auto; padding: clamp(34px, 4vw, 54px); background: #fff; border: 1px solid rgba(0,149,191,0.09); border-radius: 18px; box-shadow: 0 14px 34px rgba(0,0,0,0.05); }',
    '  .zz-contact-form-card .form-control { max-width: 100%; width: 100%; box-sizing: border-box; background: rgba(255,255,255,0.96); }',
    '  .zz-contact-form-card textarea.form-control { min-height: 170px; resize: vertical; }',
    '  .zz-contact-form-card .zz-form-note { margin-top: 26px; }',
    '  .zz-contact-text-panel .zz-dynamic-content { color: #6c6c6c; }',

    '@media (min-width: 993px) {',
    '  .zz-contact-content-layout .zz-contact-image-wrap { order: 2; }',
    '  .zz-contact-content-layout .zz-contact-text-panel { order: 1; }',
    '}',
    '@media (max-width: 992px) {',
    '  .zz-contact-content-section { display: block !important; min-height: auto !important; padding-top: 128px !important; padding-bottom: 24px !important; align-items: initial !important; }',
    '  .zz-contact-content-section .container { width: min(100% - 28px, 760px) !important; max-width: none !important; }',
    '  .zz-contact-content-layout { display: flex !important; flex-direction: column !important; flex-wrap: nowrap !important; align-items: center !important; gap: 22px !important; margin: 0 !important; }',
    '  .zz-contact-content-layout .zz-contact-image-wrap { order: 1 !important; width: 100% !important; max-width: 100% !important; flex: 0 0 auto !important; display: flex !important; justify-content: center !important; align-items: center !important; margin: 0 0 14px !important; padding: 0 !important; }',
    '  .zz-contact-content-layout .zz-contact-image-wrap .zz-circle-image { width: min(360px, 72vw) !important; height: min(360px, 72vw) !important; max-width: 100% !important; object-fit: cover !important; border-radius: 50% !important; display: block !important; }',
    '  .zz-contact-content-layout .zz-contact-text-panel { order: 2 !important; width: 100% !important; max-width: 100% !important; flex: 0 0 auto !important; display: block !important; margin: 0 !important; padding: 0 !important; height: auto !important; max-height: none !important; overflow: visible !important; }',
    '  .zz-contact-text-panel .zz-page-title { margin: 0 0 16px !important; }',
    '  .zz-contact-text-panel .zz-dynamic-content { width: 100% !important; max-height: clamp(220px, 42vh, 380px) !important; overflow-y: auto !important; overflow-x: hidden !important; padding: 0 12px 0 0 !important; line-height: 1.75 !important; box-sizing: border-box !important; scrollbar-width: thin; }',
    '  .zz-contact-form-section { clear: both !important; display: block !important; position: relative !important; z-index: 2 !important; min-height: auto !important; padding: 22px 0 70px !important; background: #fff !important; }',
    '  .zz-contact-form-section .container { width: min(100% - 28px, 640px) !important; max-width: none !important; padding-left: 0 !important; padding-right: 0 !important; }',
    '  .zz-contact-form-card { position: relative !important; z-index: 3 !important; width: 100% !important; max-width: 100% !important; margin: 0 auto !important; padding: 30px 24px !important; box-sizing: border-box !important; background: rgba(255,255,255,0.98) !important; }',
    '}',
    '@media (max-width: 576px) {',
    '  .zz-contact-content-section { padding-top: 112px !important; }',
    '  .zz-contact-content-section .container, .zz-contact-form-section .container { width: min(100% - 22px, 640px) !important; }',
    '  .zz-contact-content-layout .zz-contact-image-wrap .zz-circle-image { width: min(300px, 78vw) !important; height: min(300px, 78vw) !important; }',
    '  .zz-contact-text-panel .zz-dynamic-content { max-height: 320px !important; font-size: 16px !important; line-height: 1.65 !important; }',
    '  .zz-contact-form-card { padding: 26px 18px !important; border-radius: 14px !important; }',
    '  .zz-contact-form-card .text-right { text-align: center !important; }',
    '}',

    '  .zz-complain-layout-section { background: #fff; min-height: calc(100vh - 94px); padding: 132px 30px 90px; }',
    '  .zz-complain-layout-section .container { width: min(1120px, calc(100% - 44px)); max-width: none; }',
    '  .zz-complain-two-col { display: grid; grid-template-columns: minmax(0, 1fr) minmax(320px, 0.95fr); gap: clamp(34px, 5vw, 76px); align-items: flex-start; }',
    '  .zz-complain-content-card { padding: clamp(36px, 4vw, 62px); border: 1px solid rgba(0,149,191,0.08); border-radius: 18px; box-shadow: 0 14px 34px rgba(0,0,0,0.05); background: #fff; min-width: 0; max-height: min(620px, calc(100vh - 230px)); overflow-y: auto; overflow-x: hidden; }',
    '  .zz-complain-content-card h2 { margin-bottom: 24px; }',
    '  .zz-complain-content-card .zz-dynamic-content { color: #6c6c6c; line-height: 1.9; }',
    '  .zz-complain-form-card { align-self: flex-start; }',
    '@media (max-width: 992px) {',
    '  .zz-complain-layout-section { padding: 122px 24px 70px; }',
    '  .zz-complain-two-col { grid-template-columns: 1fr; gap: 30px; }',
    '  .zz-complain-content-card { order: 1; max-height: 420px; }',
    '  .zz-complain-form-card { order: 2; }',
    '}',
    '@media (max-width: 576px) {',
    '  .zz-complain-layout-section .container { width: min(100% - 24px, 1050px); }',
    '  .zz-complain-content-card { padding: 28px 20px; border-radius: 14px; }',
    '  .zz-complain-form-card .text-right { text-align: center !important; }',
    '}',

    '  .zz-footer .row { display: flex; align-items: center; justify-content: space-between; gap: 24px; flex-wrap: nowrap; }',
    '  .zz-footer .col-md-6, .zz-footer .col-sm-12 { float: none; width: auto; max-width: none; padding-left: 0; padding-right: 0; }',
    '  .zz-footer .row > div:first-child { flex: 1 1 auto; min-width: 190px; }',
    '  .zz-footer p { margin: 0; white-space: nowrap; }',
    '  .zz-footer-links { flex: 0 1 auto; display: flex; justify-content: flex-end; align-items: center; gap: 18px; flex-wrap: nowrap; min-width: 0; text-align: right; }',
    '  .zz-footer-links a { margin: 0 !important; white-space: nowrap; font-size: clamp(11px, 0.92vw, 13px); letter-spacing: clamp(0.5px, 0.12vw, 2px); }',
    '@media (max-width: 900px) {',
    '  .zz-footer .row { flex-direction: column; justify-content: center; text-align: center; gap: 14px; }',
    '  .zz-footer .row > div:first-child { min-width: 0; }',
    '  .zz-footer p { white-space: normal; }',
    '  .zz-footer-links { justify-content: center; text-align: center; flex-wrap: wrap; gap: 10px 18px; }',
    '}',
    '@media (max-width: 520px) {',
    '  .zz-footer-links { flex-direction: column; gap: 9px; }',
    '}'
  ].join('\n');

  var style = document.createElement('style');
  style.id = styleId;
  style.appendChild(document.createTextNode(css));
  document.head.appendChild(style);
})();

document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.querySelector('.zz-menu-toggle');
  var links = document.querySelector('.zz-menu-links');
  if (toggle && links) {
    toggle.addEventListener('click', function () {
      links.classList.toggle('open');
    });
    links.querySelectorAll('a').forEach(function (item) {
      item.addEventListener('click', function () {
        links.classList.remove('open');
      });
    });
  }
});
