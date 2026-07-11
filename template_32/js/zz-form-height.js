(function () {
  var desktopQuery = window.matchMedia('(min-width: 992px)');
  var frameId = null;

  function syncDynamicTextHeight() {
    document.querySelectorAll('.zz-form-section').forEach(function (section) {
      var formPanel = section.querySelector('.zz-contact-form-container');
      var textPanel = section.querySelector('.zz-contact-copy');

      if (!formPanel || !textPanel) {
        return;
      }

      textPanel.style.height = '';
      textPanel.style.maxHeight = '';

      if (desktopQuery.matches) {
        var formHeight = Math.ceil(formPanel.getBoundingClientRect().height);
        textPanel.style.height = formHeight + 'px';
        textPanel.style.maxHeight = formHeight + 'px';
      }
    });
  }

  function scheduleSync() {
    if (frameId !== null) {
      window.cancelAnimationFrame(frameId);
    }

    frameId = window.requestAnimationFrame(function () {
      frameId = null;
      syncDynamicTextHeight();
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    syncDynamicTextHeight();

    if ('ResizeObserver' in window) {
      var observer = new ResizeObserver(scheduleSync);
      document.querySelectorAll('.zz-contact-form-container').forEach(function (formPanel) {
        observer.observe(formPanel);
      });
    }
  });

  window.addEventListener('load', scheduleSync);
  window.addEventListener('resize', scheduleSync);
})();
