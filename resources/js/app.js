import './bootstrap';
// public/js/app.js
// small helpers shared across pages
window.addEventListener('DOMContentLoaded', ()=>{
  // any site-wide JS can go here
  // e.g., confirm on delete buttons (future)
  document.querySelectorAll('button[data-confirm]').forEach(btn=>{
    btn.addEventListener('click', e=>{
      if(!confirm(btn.dataset.confirm)) e.preventDefault();
    });
  });
});
