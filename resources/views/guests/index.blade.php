@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h4 class="fw-bold text-light mb-0">
    <i class="bi bi-people-fill me-2 text-info"></i> Guest List
  </h4>
  <a href="{{ route('guests.create') }}" class="btn btn-primary shadow-sm">
    <i class="bi bi-person-plus me-1"></i> Add Guest
  </a>
</div>

@php
$sampleGuests = [
  (object)[
    'id'=>1,
    'name'=>'Juan Dela Cruz',
    'contact'=>'09171234567',
    'address'=>'Barangay 1',
    'guest_type'=>'Walk-in',
    'adults'=>2,
    'children'=>1,
    'total'=>1700,
    'paid'=>1000,
    'balance'=>700,
    'checkin'=>'2025-09-09 09:00',
    'checkout'=>'',
    'created_at'=>'2025-09-09 09:00'
  ],
];
$guests = $guests ?? $sampleGuests;
@endphp

<div class="card shadow-sm border-0" style="background-color:#121212; color:#e0e0e0;">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-dark table-hover align-middle mb-0" style="background-color:#1a1a1a;">
        <thead style="background-color:#2a2a2a; color:#bfbfbf;">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Guest Type</th>
            <th>Adults</th>
            <th>Children</th>
            <th>Total (₱)</th>
            <th>Amount Paid (₱)</th>
            <th>Balance (₱)</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($guests as $g)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $g->name }}</td>
            <td>{{ $g->contact }}</td>
            <td>{{ $g->address }}</td>
            <td>
              <span class="badge bg-info text-dark">{{ $g->guest_type }}</span>
            </td>
            <td>{{ $g->adults }}</td>
            <td>{{ $g->children }}</td>
            <td>₱{{ number_format($g->total,2) }}</td>
            <td class="text-success">₱{{ number_format($g->paid,2) }}</td>
            <td class="text-danger">₱{{ number_format($g->balance,2) }}</td>
            <td>{{ $g->checkin }}</td>
            <td>{{ $g->checkout ?: '-' }}</td>
            <td>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-sm btn-warning" title="Edit">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <a href="#" class="btn btn-sm btn-danger" title="Delete">
                  <i class="bi bi-trash"></i>
                </a>
                <a href="#" class="btn btn-sm btn-success" title="Check Out">
                  <i class="bi bi-box-arrow-right"></i>
                </a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
