@extends('layouts.guest')
@section('content')

<div class="container mt-4">

  <!-- Resort Carousel -->
  <div id="resortCarousel" class="carousel slide shadow-lg rounded-3 overflow-hidden mb-5" data-bs-ride="carousel" data-aos="fade-up">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/storage/img/resort-1.jpeg" class="d-block w-100" alt="Resort view 1">
      </div>
      <div class="carousel-item">
        <img src="/storage/img/resort-2.jpeg" class="d-block w-100" alt="Resort view 2">
      </div>
      <div class="carousel-item">
        <img src="/storage/img/resort-3.jpeg" class="d-block w-100" alt="Resort view 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#resortCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#resortCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- Resort Info -->
  <div class="text-center text-light p-4 rounded-3 shadow-lg mb-5"
       style="background: rgba(0,0,0,0.6);" data-aos="fade-up">
    <h2 class="fw-bold" data-aos="zoom-in">Welcome to The Emecabilititous Resort</h2>
    <p class="mt-3 mb-4" data-aos="fade-up" data-aos-delay="200">
      Experience paradise like never before. Enjoy our stunning cottages, relaxing pools, 
      and unforgettable beach views. Whether you’re here to relax or celebrate, 
      we make every stay special.
    </p>
    <a href="{{ route('auth.login') }}" class="btn btn-lg text-white fw-bold animated-btn"
       style="background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 12px;"
       data-aos="zoom-in" data-aos-delay="400">
      <i class="bi bi-box-arrow-in-right me-2"></i> Log In
    </a>
  </div>

  <!-- About Section -->
  <section class="mb-5 text-center text-light" data-aos="fade-up">
    <h3 class="fw-bold mb-3">About Our Resort</h3>
    <p class="lead">
      Nestled along the coastline, The Emecabilititous Resort is your sanctuary for relaxation. 
      Our resort offers world-class cottages, infinity pools, and breathtaking ocean sunsets. 
      Perfect for families, couples, and group celebrations.
    </p>
  </section>

  <!-- Amenities Section -->
  <section class="mb-5">
    <h3 class="fw-bold text-center text-light mb-4" data-aos="fade-up">Our Amenities</h3>
    <div class="row text-center">
      <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="100">
        <div class="card bg-dark text-light shadow-sm h-100 hover-card">
          <div class="card-body">
            <i class="bi bi-house-heart fs-1 mb-3"></i>
            <h5>Cottages</h5>
            <p>Stay in our cozy and private cottages by the beach.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="200">
        <div class="card bg-dark text-light shadow-sm h-100 hover-card">
          <div class="card-body">
            <i class="bi bi-water fs-1 mb-3"></i>
            <h5>Swimming Pools</h5>
            <p>Relax in our infinity pools with ocean views.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card bg-dark text-light shadow-sm h-100 hover-card">
          <div class="card-body">
            <i class="bi bi-cup-straw fs-1 mb-3"></i>
            <h5>Dining</h5>
            <p>Enjoy fresh seafood and local delicacies at our restaurant.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="400">
        <div class="card bg-dark text-light shadow-sm h-100 hover-card">
          <div class="card-body">
            <i class="bi bi-music-note-beamed fs-1 mb-3"></i>
            <h5>Events</h5>
            <p>Celebrate birthdays, weddings, or company outings in style.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="mb-5">
    <h3 class="fw-bold text-center text-light mb-4" data-aos="fade-up">Resort Gallery</h3>
    <div class="row g-3">
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
        <img src="/storage/img/gallery-1.jpeg" class="img-fluid rounded shadow hover-img" alt="Gallery 1">
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <img src="/storage/img/gallery-2.jpeg" class="img-fluid rounded shadow hover-img" alt="Gallery 2">
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
        <img src="/storage/img/gallery-3.jpeg" class="img-fluid rounded shadow hover-img" alt="Gallery 3">
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="mb-5 text-center text-light">
    <h3 class="fw-bold mb-4" data-aos="fade-up">What Our Guests Say</h3>
    <blockquote class="blockquote" data-aos="fade-right">
      <p>"The most relaxing weekend getaway ever! 10/10 service."</p>
      <footer class="blockquote-footer text-light">Maria G.</footer>
    </blockquote>
    <blockquote class="blockquote" data-aos="fade-left" data-aos-delay="200">
      <p>"Perfect place for family bonding. My kids loved the pool!"</p>
      <footer class="blockquote-footer text-light">John D.</footer>
    </blockquote>
  </section>

  <!-- Contact Section -->
  <section class="mb-5 text-center text-light" data-aos="fade-up">
    <h3 class="fw-bold mb-3">Find Us</h3>
    <p>📍 Barangay Example, Olongapo City, Philippines</p>
    <div class="ratio ratio-16x9" data-aos="zoom-in" data-aos-delay="200">
      <iframe src="https://maps.google.com/maps?q=olongapo%20city&t=&z=13&ie=UTF8&iwloc=&output=embed" 
              style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>

</div>

<style>
  body {
    background: url('/storage/img/image.png') no-repeat center center fixed;
    background-size: cover;
  }

  #resortCarousel {
    max-height: 400px;
  }
  #resortCarousel .carousel-item img {
    object-fit: cover;
    height: 400px;
    width: 100%;
  }

  /* Hover Effects */
  .hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .hover-card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 8px 20px rgba(0,0,0,0.6);
  }

  .hover-img {
    transition: transform 0.4s ease, filter 0.4s ease;
  }
  .hover-img:hover {
    transform: scale(1.05);
    filter: brightness(1.1);
  }

  .animated-btn {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .animated-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 15px rgba(118,75,162,0.6);
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
