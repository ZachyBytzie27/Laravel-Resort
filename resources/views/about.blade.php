@extends('layouts.guest')

@section('content')
<div class="container my-5 text-light">

  <!-- Hero Section -->
  <div class="text-center mb-5" data-aos="fade-down">
    <h1 class="fw-bold" data-aos="zoom-in">About The Emecabilititous Resort</h1>
    <p class="lead" data-aos="fade-up" data-aos-delay="200">Where paradise meets comfort</p>
  </div>

  <!-- Intro -->
  <div class="row align-items-center mb-5">
    <div class="col-md-6" data-aos="fade-right">
      <img src="/storage/img/resort-1.jpeg" class="img-fluid rounded shadow hover-img" alt="Resort Overview">
    </div>
    <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
      <h3 class="fw-bold">Our Story</h3>
      <p>
        Established with the dream of providing a serene escape, The Emecabilititous Resort 
        has been a haven for families, couples, and travelers. Our mission is to offer guests 
        an unforgettable experience through exceptional service, breathtaking views, and 
        world-class facilities.
      </p>
    </div>
  </div>

  <!-- Mission & Vision -->
  <div class="row text-center mb-5">
    <div class="col-md-6 mb-3" data-aos="flip-left">
      <div class="card bg-dark text-light h-100 shadow hover-card">
        <div class="card-body">
          <h4 class="fw-bold">🌟 Our Mission</h4>
          <p>
            To create a memorable resort experience where relaxation, adventure, 
            and hospitality come together in harmony.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-3" data-aos="flip-right" data-aos-delay="200">
      <div class="card bg-dark text-light h-100 shadow hover-card">
        <div class="card-body">
          <h4 class="fw-bold">🌴 Our Vision</h4>
          <p>
            To be the leading destination resort in Zambales, known for blending 
            nature’s beauty with modern luxury.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Highlights -->
  <div class="mb-5">
    <h3 class="fw-bold text-center mb-4" data-aos="fade-up">Why Choose Us?</h3>
    <div class="row text-center">
      <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="100">
        <i class="bi bi-house-heart fs-1 mb-2"></i>
        <h5>Cozy Cottages</h5>
        <p>Our private cottages are designed for comfort and privacy.</p>
      </div>
      <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="200">
        <i class="bi bi-water fs-1 mb-2"></i>
        <h5>Infinity Pools</h5>
        <p>Take a dip in our pools with stunning ocean views.</p>
      </div>
      <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="300">
        <i class="bi bi-cup-straw fs-1 mb-2"></i>
        <h5>Local Dining</h5>
        <p>Enjoy freshly prepared seafood and local specialties.</p>
      </div>
    </div>
  </div>

  <!-- Call to Action -->
  <div class="text-center" data-aos="fade-up" data-aos-delay="200">
    <a href="{{ route('auth.login') }}" class="btn btn-lg text-white fw-bold animated-btn"
       style="background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 12px;">
      <i class="bi bi-box-arrow-in-right me-2"></i> Book Now / Log In
    </a>
  </div>

</div>

<style>
  body {
    background: url('/storage/img/image.png') no-repeat center center fixed;
    background-size: cover;
  }

  /* Hover Effects */
  .hover-card {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }
  .hover-card:hover {
    transform: translateY(-8px) scale(1.05);
    box-shadow: 0 8px 20px rgba(0,0,0,0.6);
  }

  .hover-img {
    transition: transform 0.5s ease, filter 0.5s ease;
  }
  .hover-img:hover {
    transform: scale(1.07);
    filter: brightness(1.1);
  }

  .animated-btn {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .animated-btn:hover {
    transform: scale(1.08);
    box-shadow: 0 8px 20px rgba(118, 75, 162, 0.7);
  }
</style>

<!-- AOS Library -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1200,
    once: true
  });
</script>

@endsection
