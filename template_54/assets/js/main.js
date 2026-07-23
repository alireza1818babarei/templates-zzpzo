document.querySelectorAll('a[href^="#"]').forEach(function(link){
  link.addEventListener('click', function(event){
    var target = document.querySelector(this.getAttribute('href'));
    if(target){ event.preventDefault(); target.scrollIntoView({behavior:'smooth'}); }
  });
});

(function(){
  var menuToggle = document.querySelector('.menu-toggle');
  var navigation = document.getElementById('primaryNav');

  if(!menuToggle || !navigation){
    return;
  }

  function closeMenu(){
    navigation.classList.remove('is-open');
    menuToggle.setAttribute('aria-expanded', 'false');
    menuToggle.setAttribute('aria-label', 'Open menu');
  }

  menuToggle.addEventListener('click', function(){
    var isOpen = navigation.classList.toggle('is-open');
    menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    menuToggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
  });

  navigation.querySelectorAll('a').forEach(function(link){
    link.addEventListener('click', closeMenu);
  });

  window.addEventListener('resize', function(){
    if(window.innerWidth > 760){
      closeMenu();
    }
  });
})();
