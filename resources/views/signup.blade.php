@extends('layouts.guest')

@section('content')
<style>
    body {
        background: url('/storage/img/image.png') no-repeat center center/cover;
    }

    .card {
        background: rgba(0, 0, 0, 0.45);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 1rem;
        color: #fff;
        box-shadow: 0 8px 25px rgba(0,0,0,0.5);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.6);
    }

    .card-header {
        background: rgba(255, 255, 255, 0.08) !important;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        text-shadow: 0 0 8px rgba(255,255,255,0.4);
    }

    .form-control, .form-select {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #fff;
        border-radius: 0.6rem;
        transition: all 0.3s ease;
    }
    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }
    .form-control:focus {
        background: rgba(255, 255, 255, 0.984);
        border-color: #0dcaf0;
        box-shadow: 0 0 8px rgba(13, 202, 240, 0.6);
    }

    .btn-dark {
        background: linear-gradient(135deg, rgba(13,202,240,0.8), rgba(0,123,255,0.8));
        border: none;
        font-weight: 600;
        letter-spacing: 0.5px;
        border-radius: 0.6rem;
        transition: all 0.3s ease;
    }
    .btn-dark:hover {
        background: linear-gradient(135deg, rgba(0,123,255,0.9), rgba(13,202,240,0.9));
        box-shadow: 0 0 15px rgba(13,202,240,0.8);
        transform: scale(1.02);
    }
</style>

<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6">
        <div class="card shadow-lg border-0">
            <div class="card-header text-white text-center rounded-top">
                <h4 class="fw-bold mb-0">Create User Account</h4>
            </div>
            <div class="card-body">
                
                {{-- ✅ FORM FIXED --}}
                <form action="{{ route('create') }}" method="POST">
                    @csrf

                    {{-- ✅ Error Handling --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Enter full name" required>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Choose a username" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    </div>

                    {{-- ✅ Hidden role (auto set to user) --}}
                    <input type="hidden" name="role" value="user">

                    <button type="submit" class="btn btn-dark w-100">Register User</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
