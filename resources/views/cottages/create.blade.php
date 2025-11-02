@extends('layouts.app')

@section('content')
<div class="card p-3 bg-dark">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0 text-light">Add Cottage</h5>
    {{-- <a href="{{ route('cottages.index') }}" class="btn btn-sm btn-outline-light">Back to list</a> --}}
  </div>

  <form method="post" action="{{ route ('addcottage') }}">
    @csrf
    <div class="row g-3">
      <div class="col-md-4">
        <label class="form-label text-light">Cottage Type</label>
        <input class="form-control" name="cottage_type" placeholder="e.g. Large/Medium/Small">
      </div>
      <div class="col-md-4">
        <label class="form-label text-light">Cottage Name</label>
        <input class="form-control" name="cottage_name" placeholder="e.g. Coconut A">
      </div>
      <div class="col-md-2">
        <label class="form-label text-light">Price per day (₱)</label>
        <input type="number" step="0.01" class="form-control" name="price_per_day" placeholder="1500">
      </div>
      <div class="col-md-2">
        <label class="form-label text-light">Quantity</label>
        <input type="number" class="form-control" name="quantity" value="1" min="1">
      </div>

      

      <div class="col-12 text-end">
        <button class="btn btn-success" href="{{ route('cottages.index') }}">Save Cottage</button>
      </div>
    </div>
  </form>
</div>
@endsection
