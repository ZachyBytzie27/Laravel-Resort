<style>
  /* ===== Navbar Styling ===== */
  .navbar {
    background: rgba(10, 25, 47, 0.7);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    transition: background 0.3s ease-in-out;
    z-index: 1050;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
  }

  /* ===== Sidebar Styling ===== */
  .sidebar {
    position: fixed;
    top: 70px; /* height of navbar */
    left: 0;
    width: 240px;
    height: calc(100% - 70px);
    background: rgba(10, 25, 47, 0.95);
    backdrop-filter: blur(10px);
    padding: 20px;
    transform: translateX(-100%);
    transition: transform 0.3s ease;
    z-index: 1040;
  }

  .sidebar.active {
    transform: translateX(0);
  }

  /* ===== Sidebar Links ===== */
  .sidebar a {
    display: flex;
    align-items: center;
    padding: 12px 16px;
    color: #e6f1ff;
    margin-bottom: 12px;
    border-radius: 12px;
    text-decoration: none;
    border: 2px solid rgba(255, 255, 255, 0.25);
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
  }

  /* White border + glowing blue hover animation */
  .sidebar a::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(120deg, transparent, #00d4ff, transparent);
    transition: 0.6s;
  }

  .sidebar a:hover::before {
    left: 100%;
  }

  .sidebar a:hover {
    color: #00d4ff;
    border-color: #00d4ff;
    box-shadow: 0 0 10px #00d4ff, 0 0 20px #00d4ff inset;
    transform: translateX(4px);
  }

  /* Icon animation */
  .sidebar a i {
    margin-right: 10px;
    transition: transform 0.3s ease, color 0.3s ease, text-shadow 0.3s ease;
  }

  .sidebar a:hover i {
    transform: translateX(5px);
    color: #00d4ff;
    text-shadow: 0 0 8px #00d4ff;
  }

  /* ===== Content Push When Sidebar Opens ===== */
  .content {
    margin-left: 0;
    transition: margin-left 0.3s ease;
    padding: 20px;
    padding-top: 90px; /* Adjust for fixed navbar height */
  }

  .content.shifted {
    margin-left: 240px;
  }

  /* ===== Toggle Button Active State ===== */
  #sidebarToggle.active {
    border-color: #00d4ff;
    box-shadow: 0 0 10px #00d4ff, 0 0 20px #00d4ff inset;
    color: #00d4ff;
  }

  /* ===== Active Sidebar Link Circulating Glow Effect ===== */
  .sidebar a.active {
    position: relative;
    color: #00d4ff;
    border-color: #00d4ff;
    box-shadow: 0 0 5px rgba(0, 212, 255, 0.5), 0 0 10px rgba(0, 212, 255, 0.2) inset;
  }

  .sidebar a.active::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: conic-gradient(from 0deg, transparent, rgba(0, 212, 255, 0.5), transparent);
    border-radius: 12px;
    animation: rotate 2s linear infinite;
    z-index: -1;
  }

  @keyframes rotate {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(360deg);
    }
  }
</style>


<nav class="navbar navbar-expand-lg shadow-sm p-3 navbar-dark">
  <div class="container-lg d-flex align-items-center">
    
    <!-- Toggle + Brand group -->
    <div class="d-flex align-items-center">
      <!-- Sidebar toggle button -->
      <button class="btn btn-outline-light me-2" id="sidebarToggle">
        <i class="bi bi-list"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand d-flex align-items-center m-0" href="{{ route('dashboard') }}">
        <i class="bi bi-house-door-fill me-2"></i>
        The Emecabilititous Resort
      </a>
    </div>

  </div>
</nav>


<!-- Sidebar -->
<!-- Sidebar -->
<div class="sidebar active" id="sidebarMenu">
    @if(Session::get('role') === 'admin')
        <a href="{{ route('dashboard') }}">
            <i class="bi bi-speedometer2 me-2"></i> Dashboard
        </a>
        <a href="{{ route('cottages.index') }}">
            <i class="bi bi-house-heart me-2"></i> Cottages
        </a>
        <a href="{{ route('guests.index') }}">
            <i class="bi bi-people-fill me-2"></i> Guests
        </a>
        <a href="{{ route('reservations.index') }}">
            <i class="bi bi-calendar-check me-2"></i> Reservations
        </a>
        <a href="{{ route('reports.index') }}">
            <i class="bi bi-graph-up-arrow me-2"></i> Reports
        </a>
        <a href="{{ route('register') }}">
            <i class="bi bi-person-plus-fill me-2"></i> Registration
        </a>


        
    @elseif(Session::get('role') === 'user')
        <a href="{{ route('booking') }}">
            <i class="bi bi-calendar-plus me-2"></i> Book Now
        </a>
        <a href="#">
            <i class="bi bi-calendar-event me-2"></i> View Bookings
        </a>
        <a href="#">
            <i class="bi bi-gear-fill me-2"></i> Account Settings
        </a>
    @endif

    <!-- Logout Link - styled as link, not button -->
    <a href="{{ route('auth.login') }}" class="logout-link">
        <i class="bi bi-box-arrow-right me-2"></i> Logout
    </a>
</div>
   
 

<!-- Page Content -->

<script>
  document.getElementById('sidebarToggle').addEventListener('click', function () {
    document.getElementById('sidebarMenu').classList.toggle('active');
    document.getElementById('pageContent').classList.toggle('shifted');
  });
</script>
