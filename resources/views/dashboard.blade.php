@extends('layouts.app')

@section('content')
<h3 class="fw-bold mb-4 text-light">
  <i class="bi bi-speedometer2 text-info me-2"></i> Dashboard
</h3>

<div class="row g-4">
  {{-- Cottages --}}
  <div class="col-md-3">
    <div class="card text-center bg-dark shadow-lg border-0 rounded-4 h-100 card-hover">
      <div class="card-body">
        <i class="bi bi-house-door-fill display-5 mb-2 text-primary icon-glow"></i>
        <h6 class="fw-semibold text-secondary">Cottages</h6>
        <h3 class="fw-bold text-primary">12</h3>
      </div>
    </div>
  </div>

  {{-- Guests --}}
  <div class="col-md-3">
    <div class="card text-center bg-dark shadow-lg border-0 rounded-4 h-100 card-hover">
      <div class="card-body">
        <i class="bi bi-people-fill display-5 mb-2 text-info icon-glow"></i>
        <h6 class="fw-semibold text-secondary">Guests</h6>
        <h3 class="fw-bold text-info">24</h3>
      </div>
    </div>
  </div>

  {{-- Reservations --}}
  <div class="col-md-3">
    <div class="card text-center bg-dark shadow-lg border-0 rounded-4 h-100 card-hover">
      <div class="card-body">
        <i class="bi bi-calendar-check-fill display-5 mb-2 text-warning icon-glow"></i>
        <h6 class="fw-semibold text-secondary">Reservations</h6>
        <h3 class="fw-bold text-warning">8</h3>
      </div>
    </div>
  </div>

  {{-- Revenue --}}
  <div class="col-md-3">
    <div class="card text-center bg-dark shadow-lg border-0 rounded-4 h-100 card-hover">
      <div class="card-body">
        <i class="bi bi-cash-stack display-5 mb-2 text-success icon-glow"></i>
        <h6 class="fw-semibold text-secondary">Total Revenue</h6>
        <h3 class="fw-bold text-success">₱12,000</h3>
      </div>
    </div>
  </div>
</div>

{{-- Custom styles for hover + glow --}}
<style>
  .card-hover {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }
  .card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 255, 255, 0.15);
  }
  .icon-glow {
    filter: drop-shadow(0 0 6px rgba(255, 255, 255, 0.3));
  }
</style>
@endsection
