/*
TemplateMo 621 Luminary
Standalone-page compatibility script for the converted PHP pages.
*/

document.querySelectorAll('a[href^="#"]').forEach(function (link) {
  link.addEventListener('click', function (event) {
    var href = link.getAttribute('href');

    if (href === '#') {
      event.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
      return;
    }

    var target = document.querySelector(href);

    if (target) {
      event.preventDefault();
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

var reveals = document.querySelectorAll('.reveal');

if ('IntersectionObserver' in window) {
  var revealObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -30px 0px' });

  reveals.forEach(function (element) {
    revealObserver.observe(element);
  });
} else {
  reveals.forEach(function (element) {
    element.classList.add('visible');
  });
}

var topNav = document.getElementById('topNav');

if (topNav) {
  window.addEventListener('scroll', function () {
    topNav.classList.toggle('scrolled', window.scrollY > 60);
  }, { passive: true });
}

var heroGrid = document.querySelector('.hero-grid');
var hero = document.getElementById('hero');

if (heroGrid && hero) {
  var gridX = 0;
  var gridY = 0;
  var targetX = 0;
  var targetY = 0;

  document.addEventListener('mousemove', function (event) {
    var heroRect = hero.getBoundingClientRect();
    var gridRect = heroGrid.getBoundingClientRect();

    if (event.clientY >= heroRect.top && event.clientY <= heroRect.bottom) {
      targetX = event.clientX - gridRect.left;
      targetY = event.clientY - gridRect.top;
    }
  });

  (function moveGrid() {
    gridX += (targetX - gridX) * 0.08;
    gridY += (targetY - gridY) * 0.08;
    heroGrid.style.setProperty('--mx', gridX + 'px');
    heroGrid.style.setProperty('--my', gridY + 'px');
    window.requestAnimationFrame(moveGrid);
  }());
}

var leftTrack = document.getElementById('leftTrack');
var rightTrack = document.getElementById('rightTrack');
var scrollPercent = document.getElementById('scrollPct');

function updateScrollPanels() {
  var maxScroll = document.documentElement.scrollHeight - window.innerHeight;
  var ratio = maxScroll > 0 ? Math.min(window.scrollY / maxScroll, 1) : 0;
  var percent = Math.round(ratio * 100);

  if (leftTrack) {
    leftTrack.style.height = percent + '%';
  }

  if (rightTrack) {
    rightTrack.style.height = percent + '%';
  }

  if (scrollPercent) {
    scrollPercent.textContent = String(percent).padStart(2, '0');
  }
}

window.addEventListener('scroll', updateScrollPanels, { passive: true });
updateScrollPanels();

var toggle = document.getElementById('navToggle');
var menu = document.getElementById('mobileMenu');

if (toggle && menu) {
  var menuLinks = menu.querySelectorAll('.mobile-menu-link');
  var isOpen = false;

  function closeMenu() {
    if (!isOpen) {
      return;
    }

    isOpen = false;
    toggle.classList.remove('active');
    toggle.setAttribute('aria-expanded', 'false');
    menu.classList.remove('open');
    document.body.classList.remove('menu-open');
  }

  function openMenu() {
    isOpen = true;
    toggle.classList.add('active');
    toggle.setAttribute('aria-expanded', 'true');
    menu.classList.add('open');
    document.body.classList.add('menu-open');
  }

  toggle.addEventListener('click', function () {
    if (isOpen) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  menuLinks.forEach(function (link) {
    link.addEventListener('click', closeMenu);
  });

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
      closeMenu();
    }
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth > 1024) {
      closeMenu();
    }
  });
}
