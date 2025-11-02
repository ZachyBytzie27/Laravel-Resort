@extends('layouts.app')

@section('content')



<style>
/* ================================
   GLASS UI + FORM + BUTTON STYLES
=================================== */
.card {
    background: rgba(0, 0, 0, 0.45);
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 1rem;
    color: #fff;
    box-shadow: 0 8px 25px rgba(0,0,0,0.5);
    transition: .2s ease;
}
.card:hover { transform: translateY(-5px); }
z
/* Header */
.card-header {
    background: rgba(255,255,255,0.08) !important;
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

/* Input Fields */
.card .form-control,
.card .form-select {
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.2);
    color: #fff;
    border-radius: .6rem;
    transition: .3s;
}
.card .form-control::placeholder { color: rgba(255,255,255,0.5); }
.card .form-control:focus,
.card .form-select:focus {
    background: rgba(0,0,0,0.6);
    border-color: #0dcaf0;
    box-shadow: 0 0 8px rgba(13,202,240,0.6);
}

/* Create User Button */
.btn-dark {
    background: linear-gradient(135deg, rgba(13,202,240,.8), rgba(0,123,255,.8));
    border: none;
    font-weight: 600;
    border-radius: .6rem;
    transition: .3s;
}
.btn-dark:hover {
    background: linear-gradient(135deg, rgba(0,123,255,.9), rgba(13,202,240,.9));
    box-shadow: 0 0 15px rgba(13,202,240,.8);
    transform: scale(1.02);
}

/* ================================
   SMALLER PAGINATION (GLASS UI, CENTERED, COMPACT)
=================================== */
.pagination {
    display: flex;
    justify-content: center !important;
    align-items: center;
    padding: 5px;
    background: rgba(0,0,0,0.4);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 0.5rem;
    border: 1px solid rgba(255,255,255,0.15);
    margin-top: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    position: relative;
    overflow: hidden;
}

.page-item {
    margin: 0 2px;
}
.page-item .page-link {
    background: rgba(250, 235, 235, 0.1) !important;
    border: 1px solid rgba(255,255,255,0.25) !important;
    color: #fff !important;
    border-radius: 0.4rem !important;
    padding: 6px 12px !important;
    font-weight: 500;
    font-size: 12px;
    transition: all 0.3s ease;
    text-decoration: none !important;
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 30px;
    height: 30px;
}
.page-item .page-link:hover {
    background: rgba(0,0,0,0.7) !important;
    border-color: #0dcaf0 !important;
    box-shadow: 0 0 10px rgba(13,202,240,0.5);
    color: #e0f7ff !important;
}
.page-item.active .page-link {
    background: linear-gradient(135deg, rgba(13,202,240,0.8), rgba(0,123,255,0.8)) !important;
    border-color: #0dcaf0 !important;
    box-shadow: 0 0 15px rgba(13,202,240,0.6);
    color: #fff !important;
    font-weight: 600;
}
.page-item.disabled .page-link {
    opacity: 0.5;
    cursor: not-allowed !important;
}

/* Pagination info text styling */
.pagination p {
    color: white !important;
    margin-bottom: 10px !important; /* Space after the text, before pagination */
}

</style>

<div class="container mt-5">
    <div class="row justify-content-center">

        {{-- Create User Form --}}
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-center text-white">
                    <h4 class="fw-bold">Create User Account</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('create') }}" method="POST">
                        @csrf

                        {{-- Success --}}
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        {{-- Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $err)
                                        <li>{{ $err }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="fullname" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <select name="role" class="form-select" required>
                                <option value="user">User</option>
                                <option value="staff">Staff</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <input type="hidden" name="from_admin" value="1">

                        <button type="submit" class="btn btn-dark w-100">Register User</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Users Table --}}
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center text-white">
                    <h4 class="fw-bold">Manage Users</h4>
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-dark table-hover table-bordered text-center align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($crud as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm me-1">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{-- ✅ Clean Pagination --}}
                   <div class="pagination justify-content-center">
    {{ $crud->onEachSide(1)->links('vendor.pagination.bootstrap-5') }}
</div>


                </div>
            </div>
        </div>

    </div>
</div>
@endsection
Z