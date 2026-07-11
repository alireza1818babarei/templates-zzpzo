(function () {
  var desktopQuery = window.matchMedia('(min-width: 768px)');
  var frameId = null;

  function syncFormCopyHeight() {
    document.querySelectorAll('.zz-form-row').forEach(function (row) {
      var form = row.querySelector('.zz-standard-form');
      var copy = row.querySelector('.zz-form-copy');

      if (!form || !copy) {
        return;
      }

      copy.style.height = '';
      copy.style.maxHeight = '';

      if (desktopQuery.matches) {
        var formHeight = Math.ceil(form.getBoundingClientRect().height);
        copy.style.height = formHeight + 'px';
        copy.style.maxHeight = formHeight + 'px';
      }
    });
  }

  function scheduleSync() {
    if (frameId !== null) {
      window.cancelAnimationFrame(frameId);
    }

    frameId = window.requestAnimationFrame(function () {
      frameId = null;
      syncFormCopyHeight();
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    syncFormCopyHeight();

    if ('ResizeObserver' in window) {
      var observer = new ResizeObserver(scheduleSync);
      document.querySelectorAll('.zz-standard-form').forEach(function (form) {
        observer.observe(form);
      });
    }
  });

  window.addEventListener('load', scheduleSync);
  window.addEventListener('resize', scheduleSync);
})();
