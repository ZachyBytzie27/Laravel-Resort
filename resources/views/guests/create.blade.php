@extends('layouts.app')

@section('content')
<div class="card p-3 bg-dark">
  <div class="d-flex justify-content-between mb-3">
    <h5 class="mb-0 text-light">Add Guest (Walk-in)</h5>
    <a href="{{ route('guests.index') }}" class="btn btn-outline-light btn-sm">Guest List</a>
  </div>

  <form id="guestForm" method="" action="#">
    @csrf
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label text-light">Name</label>
        <input class="form-control bg-dark text-light" name="name" id="guestName">
      </div>
      <div class="col-md-6">
        <label class="form-label text-light">Contact</label>
        <input class="form-control bg-dark text-light" name="contact" id="guestContact">
      </div>

      <div class="col-12">
        <label class="form-label text-light">Address</label>
        <input class="form-control bg-dark text-light" name="address" id="guestAddress">
      </div>

      <div class="col-md-3">
        <label class="form-label text-light">Guest Type</label>
        <input class="form-control bg-dark text-light" value="Walk-in" readonly>
      </div>

      <div class="col-md-3">
        <label class="form-label text-light">Check-in (date & time)</label>
        <input type="datetime-local" class="form-control bg-dark text-light" name="checkin" id="guestCheckin">
      </div>

      <div class="col-md-2">
        <label class="form-label text-light">Adults</label>
        <input type="number" class="form-control calc bg-dark text-light" id="guestAdults" min="0" value="1">
      </div>

      <div class="col-md-2">
        <label class="form-label text-light">Children</label>
        <input type="number" class="form-control calc bg-dark text-light" id="guestChildren" min="0" value="0">
      </div>

      <div class="col-md-4">
        <label class="form-label text-light">Select Cottage</label>
        <select class="form-select bg-dark text-light" id="guestCottageSelect">
          <option value="" data-price="0">Large</option>
          <option value="" data-price="0">Medium</option>
          <option value="" data-price="0">Small</option>
        </select>
      </div>

      <div class="col-md-3">
        <label class="form-label text-light">Total Amount (₱)</label>
        <input class="form-control bg-dark text-light" id="guestTotal" readonly>
      </div>

      <div class="col-md-3">
        <label class="form-label text-light">Amount Paid (₱)</label>
        <input type="number" class="form-control bg-dark text-light" id="guestPaid" min="0" step="0.01" value="0">
      </div>

      <div class="col-md-3">
        <label class="form-label text-light">Balance (₱)</label>
        <input class="form-control bg-dark text-light" id="guestBalance" readonly>
      </div>

      <div class="col-12 text-end">
        <button class="btn btn-success">Save Guest</button>
      </div>
    </div>
  </form>
</div>

@push('scripts')
<script>
  // sample cottages - same shape as cottages.index
  const SAMPLE_COTTAGES = [
    {id:1, type:'Large', name:'Cottage A', price:1500, quantity:3, status:'Available'},
    {id:2, type:'Small', name:'Cottage B', price:700, quantity:2, status:'Occupied'},
    {id:3, type:'Medium', name:'Cottage C', price:1000, quantity:1, status:'Available'},
  ];
  // populate select and wire up listeners
  document.addEventListener('DOMContentLoaded', () => {
    const select = document.getElementById('guestCottageSelect');
    SAMPLE_COTTAGES.forEach(c=>{
      const opt = document.createElement('option');
      opt.value = c.id;
      opt.text = `${c.name} — ${c.type} (₱${c.price})`;
      opt.dataset.price = c.price;
      opt.dataset.status = c.status;
      select.appendChild(opt);
    });

    const adults = document.getElementById('guestAdults');
    const children = document.getElementById('guestChildren');
    const paid = document.getElementById('guestPaid');

    function parseNumber(v){ const n = parseFloat(v); return isNaN(n) ? 0 : n; }

    function updateGuestTotals(){
      const perAdult = 75;
      const perChild = 50;
      const a = parseNumber(adults.value);
      const c = parseNumber(children.value);
      const selected = select.selectedOptions[0];
      const cottagePrice = parseNumber(selected?.dataset?.price || 0);
      const personsTotal = (a * perAdult) + (c * perChild);
      const total = personsTotal + cottagePrice;
      document.getElementById('guestTotal').value = total.toFixed(2);
      const paidVal = parseNumber(paid.value);
      document.getElementById('guestBalance').value = (total - paidVal).toFixed(2);
    }

    adults.addEventListener('input', updateGuestTotals);
    children.addEventListener('input', updateGuestTotals);
    select.addEventListener('change', updateGuestTotals);
    paid.addEventListener('input', updateGuestTotals);

    updateGuestTotals();
  });
</script>
@endpush
@endsection
