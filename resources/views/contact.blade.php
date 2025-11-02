@extends('layouts.guest')

@section('content')
<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-10">

      <!-- Contact Header -->
      <div class="text-center text-light mb-5 fade-in-up">
        <h2 class="fw-bold">
          <lord-icon
            src="https://cdn.lordicon.com/ayhtotha.json"
            trigger="hover"
            colors="primary:#ffffff,secondary:#00aaff"
            style="width:45px;height:45px">
          </lord-icon>
          Contact Us
        </h2>
        <p>We’d love to hear from you! Reach out through the details below or send us a message directly.</p>
      </div>

      <div class="row g-4">
        <!-- Contact Info -->
        <div class="col-md-5">
          <div class="p-4 rounded-3 shadow-lg text-light glass-card slide-in-left">
            <h4 class="fw-bold mb-3">Get in Touch</h4>

            <p>
              <lord-icon src="https://cdn.lordicon.com/gmzxduhd.json" trigger="hover"
                colors="primary:#ffffff,secondary:#00aaff" style="width:28px;height:28px"></lord-icon>
              Barangay Example, Olongapo City, Zambales
            </p>
            <p>
              <lord-icon src="https://cdn.lordicon.com/qhgmphtg.json" trigger="hover"
                colors="primary:#ffffff,secondary:#00aaff" style="width:28px;height:28px"></lord-icon>
              +63 912 345 6789
            </p>
            <p>
              <lord-icon src="https://cdn.lordicon.com/aycykizt.json" trigger="hover"
                colors="primary:#ffffff,secondary:#00aaff" style="width:28px;height:28px"></lord-icon>
              emecabilitousresort@gmail.com
            </p>

            <hr class="text-light">

            <!-- Map -->
            <h5 class="fw-bold mb-3">Find Us</h5>
            <div class="ratio ratio-4x3 rounded-3 overflow-hidden shadow">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.40170009883!2d120.283!3d14.837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDUwJzEyLjAiTiAxMjDCsDE3JzAwLjAiRQ!5e0!3m2!1sen!2sph!4v1234567890" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen 
                loading="lazy">
              </iframe>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-md-7">
          <div class="p-4 rounded-3 shadow-lg text-light glass-card slide-in-right">
            <h4 class="fw-bold mb-3">Send us a Message</h4>
            <form>
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control glow-input" placeholder="Enter your name" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control glow-input" placeholder="Enter your email" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea class="form-control glow-input" rows="4" placeholder="Type your message here..." required></textarea>
              </div>
              <button type="submit" class="btn btn-lg text-white fw-bold d-flex align-items-center justify-content-center gap-2 animate-btn"
                      style="background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 12px;">
                <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="hover"
                  colors="primary:#ffffff,secondary:#00aaff" style="width:28px;height:28px"></lord-icon>
                Send Message
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<style>
  body {
    background: url('/storage/img/image.png') no-repeat center center fixed;
    background-size: cover;
  }

  /* Frosted glass card */
  .glass-card {
    background: rgba(0, 0, 0, 0.65);
    backdrop-filter: blur(8px);
    transition: transform 0.3s ease;
  }
  .glass-card:hover {
    transform: translateY(-6px);
  }

  /* Input glow animation */
  .glow-input:focus {
    border: 2px solid #667eea;
    box-shadow: 0 0 12px #667eea;
    transition: all 0.3s ease-in-out;
  }

  /* Button hover animation */
  .animate-btn {
    transition: all 0.3s ease-in-out;
  }
  .animate-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px #764ba2;
  }

  /* Fade & Slide animations */
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .fade-in-up {
    animation: fadeInUp 1s ease forwards;
  }
  @keyframes slideInLeft {
    from { opacity: 0; transform: translateX(-40px); }
    to { opacity: 1; transform: translateX(0); }
  }
  .slide-in-left {
    animation: slideInLeft 1s ease forwards;
  }
  @keyframes slideInRight {
    from { opacity: 0; transform: translateX(40px); }
    to { opacity: 1; transform: translateX(0); }
  }
  .slide-in-right {
    animation: slideInRight 1s ease forwards;
  }
</style>

<!-- Lordicon script -->
<script src="https://cdn.lordicon.com/lordicon.js"></script>
@endsection
