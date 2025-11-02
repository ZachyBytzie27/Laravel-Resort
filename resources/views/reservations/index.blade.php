@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h4 class="fw-bold text-light mb-0">
    <i class="bi bi-calendar-check me-2 text-info"></i> Reservation List
  </h4>
  <a href="{{ route('reservations.create') }}" class="btn btn-primary shadow-sm">
    <i class="bi bi-plus-circle me-1"></i> Add Reservation
  </a>
</div>

@php
$reservations = $reservations ?? [
  (object)[
    'id'=>1,'guest'=>'Juan','cottage'=>'Cottage A','date'=>'2025-09-12',
    'start'=>'08:00','end'=>'17:00','adults'=>4,'children'=>2,
    'total'=>3500,'paid'=>2000,'balance'=>1500,'status'=>'Partial',
    'created_at'=>'2025-09-09'
  ],
];
@endphp

<div class="card shadow-sm border-0" style="background-color:#121212; color:#e0e0e0;">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-dark table-hover align-middle mb-0" style="background-color:#1a1a1a;">
        <thead style="background-color:#2a2a2a; color:#bfbfbf;">
          <tr>
            <th>#</th>
            <th>Guest Name</th>
            <th>Cottage</th>
            <th>Date</th>
            <th>Start</th>
            <th>End</th>
            <th>Adults</th>
            <th>Children</th>
            <th>Total (₱)</th>
            <th>Paid (₱)</th>
            <th>Balance (₱)</th>
            <th>Payment Status</th>
            <th>Created At</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($reservations as $r)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $r->guest }}</td>
            <td>{{ $r->cottage }}</td>
            <td>{{ $r->date }}</td>
            <td>{{ $r->start }}</td>
            <td>{{ $r->end }}</td>
            <td>{{ $r->adults }}</td>
            <td>{{ $r->children }}</td>
            <td>₱{{ number_format($r->total,2) }}</td>
            <td>₱{{ number_format($r->paid,2) }}</td>
            <td>₱{{ number_format($r->balance,2) }}</td>
            <td>
              <span class="badge 
                @if($r->status === 'Paid') bg-success 
                @elseif($r->status === 'Partial') bg-warning text-dark 
                @else bg-danger @endif">
                {{ $r->status }}
              </span>
            </td>
            <td>{{ $r->created_at }}</td>
            <td>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-sm btn-info" title="View">
                  <i class="bi bi-eye"></i>
                </a>
                <a href="#" class="btn btn-sm btn-primary" title="Edit">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <a href="#" class="btn btn-sm btn-success" title="Mark as Paid">
                  <i class="bi bi-cash-stack"></i>
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
