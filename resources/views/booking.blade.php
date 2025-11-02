@extends('layouts.app') {{-- or layouts.guest if same navbar --}}
@section('content')

<div class="min-vh-100 d-flex flex-column align-items-center justify-content-center" 
     style="background: url('/storage/img/booking-bg.jpg') no-repeat center center/cover;">

  <div class="card shadow-lg text-white text-center p-4" 
       style="background: rgba(23, 44, 77, 0.85); border-radius: 20px; max-width: 600px; width: 100%;">

    <h2 class="fw-bold mb-3">🎟️ Booking Portal</h2>

    <p class="mb-4">
      Welcome back, 
      <strong>{{ session('loggedUser')->fullname ?? 'Guest' }}</strong>!  
      You are logged in as a <span class="text-info fw-bold">{{ session('loggedUser')->role ?? 'USER' }}</span>.
    </p>

    <div class="d-grid gap-3">
     

       {{-- <hr class="my-4 border-light"> --}}
      

   

    {{-- <a href="{{ route('logout') }}" 
       class="btn btn-danger fw-bold rounded-pill px-4 py-2 shadow-sm">
      🚪 Logout
    </a> --}}

  </div>
</div>

<style>
  body {
    background-color: #0f1c3f;
    font-family: 'Poppins', sans-serif;
  }
  .card {
    backdrop-filter: blur(12px);
  }
  .btn {
    transition: all 0.3s ease-in-out;
  }
  .btn:hover {
    transform: scale(1.05);
  }
</style>

@endsection
