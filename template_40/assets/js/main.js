document.addEventListener('click', function (event) {
  const link = event.target.closest('a[href^="#"]');
  if (!link) return;
  const target = document.querySelector(link.getAttribute('href'));
  if (target) { event.preventDefault(); target.scrollIntoView({ behavior: 'smooth' }); }
});

(function () {
  function hideBrokenHeroImage(image) {
    var media = image.closest('.hero-media');
    var hero = image.closest('.hero');

    if (media) {
      media.style.display = 'none';
    }

    if (hero) {
      hero.style.gridTemplateColumns = '1fr';
      hero.classList.add('hero-image-missing');
    }
  }

  function watchHeroImages() {
    var images = document.querySelectorAll('.hero-media img');

    images.forEach(function (image) {
      image.addEventListener('error', function () {
        hideBrokenHeroImage(image);
      }, { once: true });

      if (image.complete && image.naturalWidth === 0) {
        hideBrokenHeroImage(image);
      }
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', watchHeroImages);
  } else {
    watchHeroImages();
  }
})();