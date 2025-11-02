@extends('layouts.guest')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100" 
     style="background: url('/storage/img/image.png') no-repeat center center/cover;">

  <div class="login-card text-white shadow-lg mx-3 mx-sm-0">
    <h3 class="fw-bold text-center mb-0 slide-down">🔑 Log in</h3>

    <form method="POST" action="{{ route('login.authenticate') }}" class="login-form">
      @csrf
      
      {{-- ✅ Error Message Display --}}
      @if ($errors->any())
        <div class="alert alert-danger py-1 px-2 mt-2 rounded" style="font-size: 0.9rem;">
          {{ $errors->first() }}
        </div>
      @endif

      <div class="mb-3 mt-2">
        <label class="form-label">Email / Username</label>
        <input type="text" name="login" class="form-control glow-input" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control glow-input" required>
      </div>

      <button type="submit" class="btn w-100 text-white fw-bold animate-btn">
        Login
      </button>

      <div class="text-center mt-3">
        <small>Not registered yet?</small>
        <a href="{{ route('signup') }}" class="text-info text-decoration-none">Sign Up Now!</a>
      </div>
    </form>
  </div>
</div>

<style>
  /* 🔹 Transparent Navbar */
  nav.navbar, header.navbar, .navbar {
    box-shadow: none !important;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 10;
    background: rgb(23, 44, 77);
    backdrop-filter: blur(10px);
  }

  .navbar a.nav-link, .navbar-brand {
    color: white !important;
  }

  /* 🔹 Login Card */
  .login-card {
    max-width: 400px;
    width: 250px;
    background: rgba(23, 50, 101, 0.78);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    padding: 1rem;
    text-align: left;
    overflow: hidden;
    transition: all 0.6s ease-in-out;
  }

  /* 🔹 Hidden Form Animation */
  .login-form {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: all 0.6s ease-in-out;
  }

  /* 🔹 Hover Effect for Card */
  .login-card:hover {
    width: 100%;
    max-width: 400px;
    padding: 2rem;
  }

  .login-card:hover .login-form {
    max-height: 500px;
    opacity: 1;
    margin-top: 1rem;
  }

  /* 🔹 Input Glow Effect */
  .glow-input {
    background: rgba(255,255,255,0.9);
    border-radius: 10px;
  }

  .glow-input:focus {
    border: 2px solid #667eea !important;
    box-shadow: 0 0 12px #667eea !important;
    transition: all 0.3s ease-in-out;
  }

  /* 🔹 Button Animation */
  .animate-btn {
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 10px;
    transition: all 0.3s ease-in-out;
  }

  .animate-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px #764ba2;
  }
</style>
@endsection
