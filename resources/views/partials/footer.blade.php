<!-- resources/views/layouts/footer.blade.php -->
<footer class="py-3 mt-auto footer-glass">
  <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
    
    <!-- Left side -->
    <p class="mb-2 mb-md-0 small">
      &copy; {{ date('Y') }} Resort Management System. Emecabilititious!
    </p>

    <!-- Right side -->
    <div class="d-flex gap-3">
      <a href="#" class="text-decoration-none text-light"><i class="bi bi-facebook"></i></a>
      <a href="#" class="text-decoration-none text-light"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="text-decoration-none text-light"><i class="bi bi-instagram"></i></a>
    </div>
  </div>
</footer>

<style>
html, body {
  height: 100%;
}

body {
  display: flex;
  flex-direction: column;
}

main {
  flex: 1;
}

/* Transparent blurred footer */
.footer-glass {
  background: rgba(13, 43, 93, 0.3); /* transparent navy tint */
  backdrop-filter: blur(12px); 
  -webkit-backdrop-filter: blur(12px); /* Safari */
  color: #e0e0e0;
  border-top: 1px solid rgba(255, 255, 255, 0.15);
}
.footer-glass a {
  transition: color 0.3s ease;
}
.footer-glass a:hover {
  color: #00c3ff;
}
</style>
