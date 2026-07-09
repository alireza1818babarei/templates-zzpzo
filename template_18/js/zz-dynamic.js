(function () {
  var styleId = 'zz-template-18-text-image-spacing-fix';

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
