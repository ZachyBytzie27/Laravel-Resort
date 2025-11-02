@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h4 class="fw-bold text-light mb-0">
    <i class="bi bi-house-door-fill me-2 text-white"></i> Cottage List
  </h4>
  <a href="{{ route('cottages.create') }}" class="btn btn-primary shadow-sm">
    <i class="bi bi-plus-circle me-1"></i> Add Cottage
  </a>
</div>



<div class="card shadow-sm">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Type</th>
            <th>Name</th>
            <th>Price (₱)</th>
            <th>Quantity</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($addcottage as $add)
          <tr>
            <td>{{$add->id}}</td>
            <td>{{$add->cottage_type}}</td>
            <td>{{$add->cottage_name}}</td>
            <td>{{$add->price_per_day}}</td>
            <td>{{$add->quantity}}</td>
            <td>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-sm btn-warning" title="Edit">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <button class="btn btn-sm btn-danger" title="Delete">
                  <i class="bi bi-trash"></i>
                </button>
              </div>
            </td>
          </tr>
          @endforeach
      
        </tbody>
      </table>
 <div class="pagination justify-content-center">
    {{ $addcottage->onEachSide(1)->links('vendor.pagination.bootstrap-5') }}
</div>

    </div>
  </div>
</div>
@endsection
