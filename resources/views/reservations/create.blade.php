@extends('layouts.app')

@section('content')
<div class="card p-3 bg-dark">
  <div class="d-flex justify-content-between mb-3">
    <h5 class="mb-0 text-light">Add Reservation</h5>
    <a href="{{ route('reservations.index') }}" class="btn btn-outline-light btn-sm text-light">Reservation List</a>
  </div>

  <form id="reservationForm" method="" action="#">
    @csrf
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label text-light ">Guest Name</label>
        <input class="form-control bg-dark text-light" name="guest_name" id="resGuestName">
      </div>
      <div class="col-md-6">
        <label class="form-label text-light">Contact No.</label>
        <input class="form-control bg-dark text-light" name="contact" id="resContact">
      </div>

      <div class="col-md-4">
        <label class="form-label text-light bg-dark">Select Cottage</label>
        <select class="form-select bg-dark text-light" id="resCottageSelect">
          <option value="" data-price="0">-- None --</option>
        </select>
      </div>

      <div class="col-md-3">
        <label class="form-label text-light">Reservation Date</label>
        <input type="date" class="form-control bg-dark text-light" id="resDate">
      </div>

      <div class="col-md-2">
        <label class="form-label text-light">Start Time</label>
        <input type="time" class="form-control bg-dark text-light" id="resStart">
      </div>

      <div class="col-md-2">
        <label class="form-label text-light">End Time</label>
        <input type="time" class="form-control bg-dark text-light" id="resEnd">
      </div>

      <div class="col-md-2">
        <label class="form-label text-light">Adults</label>
        <input type="number" class="form-control calc-res bg-dark text-light" id="resAdults" min="0" value="1">
      </div>

      <div class="col-md-2">
        <label class="form-label text-light">Children</label>
        <input type="number" class="form-control calc-res bg-dark text-light" id="resChildren" min="0" value="0">
      </div>

      <div class="col-md-3">
        <label class="form-label text-light">Total Amount (₱)</label>
        <input class="form-control bg-dark text-light" id="resTotal" readonly>
      </div>

      <div class="col-md-3">
        <label class="form-label text-light">Amount Paid (₱)</label>
        <input type="number" class="form-control bg-dark text-light" id="resPaid" min="0" step="0.01" value="0">
      </div>

      <div class="col-md-3">
        <label class="form-label text-light ">Balance (₱)</label>
        <input class="form-control bg-dark text-light" id="resBalance" readonly>
      </div>

      <div class="col-md-3">
        <label class="form-label text-light">Payment Status</label>
        <select class="form-select text-light bg-dark" id="resStatus">
          <option>Unpaid</option>
          <option>Partial</option>
          <option>Paid</option>
        </select>
      </div>

      <div class="col-12 text-end">
        <button class="btn btn-success">Save Reservation</button>
      </div>
    </div>
  </form>
</div>

@push('scripts')
<script>
  // reuse sample cottages
  const SAMPLE_COTTAGES = [
    {id:1, type:'Large', name:'Cottage A', price:1500, quantity:3, status:'Available'},
    {id:2, type:'Small', name:'Cottage B', price:700, quantity:2, status:'Occupied'},
    {id:3, type:'Medium', name:'Cottage C', price:1000, quantity:1, status:'Available'},
  ];

  document.addEventListener('DOMContentLoaded', () => {
    const select = document.getElementById('resCottageSelect');
    SAMPLE_COTTAGES.forEach(c=>{
      const opt = document.createElement('option');
      opt.value = c.id;
      opt.text = `${c.name} — ${c.type} (₱${c.price})`;
      opt.dataset.price = c.price;
      select.appendChild(opt);
    });

    const adults = document.getElementById('resAdults');
    const children = document.getElementById('resChildren');
    const date = document.getElementById('resDate');
    const start = document.getElementById('resStart');
    const end = document.getElementById('resEnd');
    const paid = document.getElementById('resPaid');

    function parseNumber(v){ const n = parseFloat(v); return isNaN(n) ? 0 : n; }

    function computeDays(resDate, startTime, endTime){
      // when start & end are times, calculate difference in milliseconds.
      if(!resDate) return 1;
      // create full datetimes
      const startDT = new Date(`${resDate}T${startTime || '00:00'}`);
      const endDT = new Date(`${resDate}T${endTime || '23:59'}`);
      let diffMs = endDT - startDT;
      if(diffMs <= 0) return 1;
      const days = Math.ceil(diffMs / (1000 * 60 * 60 * 24));
      return Math.max(days,1);
    }

    function updateReservationTotals(){
      const perAdult = 75;
      const perChild = 50;
      const a = parseNumber(adults.value);
      const c = parseNumber(children.value);
      const selected = select.selectedOptions[0];
      const cottagePrice = parseNumber(selected?.dataset?.price || 0);
      const resDateVal = date.value;
      const days = computeDays(resDateVal, start.value, end.value);
      const personsTotal = (a * perAdult) + (c * perChild);
      const total = personsTotal + (cottagePrice * days);
      document.getElementById('resTotal').value = total.toFixed(2);
      const paidVal = parseNumber(paid.value);
      document.getElementById('resBalance').value = (total - paidVal).toFixed(2);
      // auto-update payment status
      const status = document.getElementById('resStatus');
      status.value = (paidVal <= 0) ? 'Unpaid' : (paidVal >= total ? 'Paid' : 'Partial');
    }

    ['input','change'].forEach(ev=>{
      adults.addEventListener(ev, updateReservationTotals);
      children.addEventListener(ev, updateReservationTotals);
      select.addEventListener(ev, updateReservationTotals);
      date.addEventListener(ev, updateReservationTotals);
      start.addEventListener(ev, updateReservationTotals);
      end.addEventListener(ev, updateReservationTotals);
      paid.addEventListener(ev, updateReservationTotals);
    });

    updateReservationTotals();
  });
</script>
@endpush
@endsection
