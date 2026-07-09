
document.addEventListener('DOMContentLoaded', function () {
  var button = document.querySelector('.hamburger');
  var nav = document.querySelector('.mobile-nav');
  if (button && nav) {
    button.addEventListener('click', function () {
      button.classList.toggle('open');
      nav.classList.toggle('open');
    });
    nav.querySelectorAll('a').forEach(function (item) {
      item.addEventListener('click', function () {
        button.classList.remove('open');
        nav.classList.remove('open');
      });
    });
  }
});
