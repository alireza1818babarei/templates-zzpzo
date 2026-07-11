(function () {
  function focusFormFeedback() {
    var feedback = document.getElementById('form-feedback');

    if (!feedback) {
      return;
    }

    var scrollToFeedback = function () {
      feedback.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
      });
    };

    if (window.fullpage_api && window.innerWidth >= 768 && window.innerHeight >= 600) {
      try {
        window.fullpage_api.moveTo('slide02');
      } catch (error) {
        window.fullpage_api.moveTo(2);
      }

      window.setTimeout(scrollToFeedback, 650);
      return;
    }

    window.setTimeout(scrollToFeedback, 150);
  }

  window.addEventListener('load', focusFormFeedback);
})();
