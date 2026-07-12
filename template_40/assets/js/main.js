document.addEventListener('click', function (event) {
  const link = event.target.closest('a[href^="#"]');
  if (!link) return;
  const target = document.querySelector(link.getAttribute('href'));
  if (target) { event.preventDefault(); target.scrollIntoView({ behavior: 'smooth' }); }
});

(function () {
  function removeBrokenHeroImage(image) {
    if (!image || image.dataset.zzHeroHandled === '1') {
      return;
    }

    image.dataset.zzHeroHandled = '1';

    var media = image.closest('.hero-media');
    var hero = image.closest('.hero');

    if (media) {
      media.remove();
    }

    if (hero) {
      hero.classList.add('hero-image-missing');
      hero.style.gridTemplateColumns = '1fr';
    }
  }

  window.zzRemoveBrokenHeroImage = removeBrokenHeroImage;

  document.addEventListener('error', function (event) {
    var image = event.target;

    if (image && image.matches && image.matches('.hero-media img')) {
      removeBrokenHeroImage(image);
    }
  }, true);

  function watchHeroImages() {
    var images = document.querySelectorAll('.hero-media img');

    images.forEach(function (image) {
      image.addEventListener('error', function () {
        removeBrokenHeroImage(image);
      }, { once: true });

      if (image.complete && image.naturalWidth === 0) {
        removeBrokenHeroImage(image);
      }
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', watchHeroImages);
  } else {
    watchHeroImages();
  }
})();
