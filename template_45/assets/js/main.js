
(function(){
  const toggle = document.querySelector('[data-menu-toggle]');
  const links = document.querySelector('[data-nav-links]');
  if(toggle && links){
    toggle.addEventListener('click', function(){
      const expanded = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!expanded));
      links.classList.toggle('open');
    });
    links.querySelectorAll('a').forEach(function(link){
      link.addEventListener('click', function(){
        if(window.matchMedia('(max-width: 920px)').matches){
          links.classList.remove('open');
          toggle.setAttribute('aria-expanded', 'false');
        }
      });
    });
  }
})();
