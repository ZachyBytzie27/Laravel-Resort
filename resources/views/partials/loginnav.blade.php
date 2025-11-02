<nav class="navbar navbar-expand-lg navbar-dark shadow-sm p-3"
     style="background: rgba(61, 91, 135, 0.082); backdrop-filter: blur(10px);">
  <div class="container">

    <!-- Brand -->
    <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('outside') }}">
      <i class="bi bi-water me-2 animated-icon"></i> The Emecabilititous Resort
    </a>

    <!-- Hamburger toggler -->
    <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" 
            data-bs-target="#loginNav" aria-controls="loginNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav Links -->
    <div class="collapse navbar-collapse ms-lg-4 mt-3 mt-lg-0" id="loginNav">
      <ul class="navbar-nav ms-auto d-flex align-items-lg-center gap-2">

        <li class="nav-item">
          <a class="btn btn-outline-light d-flex align-items-center" href="{{ route('outside') }}">
            <i class="bi bi-house-door me-1 animated-icon"></i> Home
          </a>
        </li>

        <li class="nav-item">
          <a class="btn btn-outline-light d-flex align-items-center" href="/about">
            <i class="bi bi-info-circle me-1 animated-icon"></i> About
          </a>
        </li>

        <li class="nav-item">
          <a class="btn btn-outline-light d-flex align-items-center" href="/contact">
            <i class="bi bi-telephone me-1 animated-icon"></i> Contact
          </a>
        </li>

        <li class="nav-item">
          <a class="btn btn-outline-light d-flex align-items-center" href="{{ route('auth.login') }}">
            <i class="bi bi-box-arrow-in-right me-1 animated-icon"></i> Login
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- Custom Styles -->
<style>
  /* 🔹 Add spacing between toggler and first button */
  @media (max-width: 991.98px) { /* applies when collapsed */
    #loginNav {
      margin-top: 0.75rem; /* gap between toggler and menu items */
    }
  }

  /* Smooth transition for icons */
  .animated-icon {
    transition: transform 0.3s ease, color 0.3s ease;
  }

  /* Animate icons when hovering on the whole button */
  .btn-outline-light:hover .animated-icon {
    transform: scale(1.2) rotate(8deg);
    color: #00d4ff; /* glowing light blue */
  }

  /* Make outline buttons less white when clicked */
  .btn-outline-light:active,
  .btn-outline-light:focus,
  .btn-outline-light.show {
    background-color: rgba(255, 255, 255, 0.2) !important;
    border-color: #fff !important;
    color: #fff !important;
    box-shadow: none !important;
  }

  /* Optional: smooth hover background */
  .btn-outline-light:hover {
    background-color: rgba(255, 255, 255, 0.15);
    color: #fff;
  }
</style>
