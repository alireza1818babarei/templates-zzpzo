document.addEventListener('DOMContentLoaded', function(){
  document.querySelectorAll('.menu-toggle').forEach(function(btn){
    btn.addEventListener('click', function(){
      var links = btn.closest('.site-header').querySelector('.nav-links');
      if(links){ links.classList.toggle('open'); }
    });
  });
});
