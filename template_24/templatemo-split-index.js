/* JavaScript Document

TemplateMo 616 Split Index

https://templatemo.com/tm-616-split-index

*/

const navLinks = document.querySelectorAll('[data-nav]');
const panels = document.querySelectorAll('.panel');
const canvasImages = document.querySelectorAll('.canvas-image');
const canvasContexts = document.querySelectorAll('.canvas-context');
const placeholder = document.getElementById('placeholder');
let currentPanel = 'work';
let currentSlide = -1;

function switchPanel(target) {
   if (target === currentPanel) return;
   currentPanel = target;
   currentSlide = -1;

   navLinks.forEach(link => {
      link.classList.toggle('nav-active', link.dataset.nav === target);
   });

   panels.forEach(panel => {
      panel.classList.toggle('panel-active', panel.id === 'panel-' + target);
   });

   canvasImages.forEach(img => img.classList.remove('visible'));
   canvasContexts.forEach(ctx => ctx.classList.remove('visible'));

   if (placeholder) {
      if (target === 'work') {
         placeholder.classList.remove('hidden');
      } else {
         placeholder.classList.add('hidden');
         const contextImg = document.querySelector('[data-context="' + target + '"]');
         if (contextImg) {
            setTimeout(() => contextImg.classList.add('visible'), 80);
         }
      }
   }
}

navLinks.forEach(link => {
   link.addEventListener('click', (e) => {
      if (!link.dataset.nav) return;
      e.preventDefault();
      switchPanel(link.dataset.nav);
   });
});

const projectItems = document.querySelectorAll('.project-item');
const slides = document.querySelectorAll('.canvas-image');
const panelWork = document.querySelector('#panel-work');

projectItems.forEach(item => {
   item.addEventListener('mouseenter', () => {
      if (currentPanel !== 'work') return;
      const idx = parseInt(item.dataset.index, 10);
      if (idx === currentSlide) return;
      currentSlide = idx;

      if (placeholder) placeholder.classList.add('hidden');

      slides.forEach(slide => {
         slide.classList.toggle('visible', parseInt(slide.dataset.slide, 10) === idx);
      });
   });
});

if (panelWork) {
   panelWork.addEventListener('mouseleave', () => {
      if (currentPanel !== 'work') return;
      currentSlide = -1;
      slides.forEach(s => s.classList.remove('visible'));
      if (placeholder) placeholder.classList.remove('hidden');
   });
}

if ('ontouchstart' in window || navigator.maxTouchPoints > 0) {
   projectItems.forEach(item => {
      item.addEventListener('click', (e) => {
         if (currentPanel !== 'work') return;
         e.preventDefault();
         const idx = parseInt(item.dataset.index, 10);

         if (placeholder) placeholder.classList.add('hidden');
         projectItems.forEach(i => i.classList.remove('active'));
         item.classList.add('active');

         slides.forEach(slide => {
            const match = parseInt(slide.dataset.slide, 10) === idx;
            slide.classList.toggle('visible', match);
            if (match && window.innerWidth <= 900) {
               slide.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
         });
      });
   });
}
