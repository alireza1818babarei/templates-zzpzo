
(function () {
  document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('loaded');
    var toggle = document.querySelector('.zz-menu-toggle');
    var wrap = document.querySelector('.zz-menu-wrap');
    if (toggle && wrap) {
      toggle.addEventListener('click', function () { wrap.classList.toggle('open'); });
      wrap.querySelectorAll('a').forEach(function (a) {
        a.addEventListener('click', function () { wrap.classList.remove('open'); });
      });
    }
  });
})();
