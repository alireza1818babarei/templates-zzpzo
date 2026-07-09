
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
