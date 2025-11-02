@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h4 class="fw-bold text-light mb-0">
    <i class="bi bi-bar-chart-line me-2"></i> Reports
  </h4>
  <div>
    <button onclick="printSection('#')" class="btn btn-outline-info me-2">
      <i class="bi bi-printer me-1"></i> Print Daily
    </button>
    <button onclick="printSection('#')" class="btn btn-outline-warning">
      <i class="bi bi-printer me-1"></i> Print Monthly
    </button>
  </div>
</div>

<div class="row g-3">
  <!-- Guest Table -->
  <div class="col-12">
    <div class="card shadow-sm border-0" style="background-color:#121212; color:#e0e0e0;">
      <div class="card-body" id="guestTable">
        <h5 class="fw-bold mb-3">
          <i class="bi bi-people-fill me-2 text-info"></i> Completed Guest Lists
        </h5>
        <div class="table-responsive">
          <table class="table table-dark table-striped align-middle mb-0" style="background-color:#1a1a1a;">
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
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Juan Dela Cruz</td>
                <td>09123456789</td>
                <td>Olongapo City</td>
                <td>Walk-in</td>
                <td>2</td>
                <td>1</td>
                <td>₱3,000</td>
                <td>₱3,000</td>
                <td>₱0</td>
                <td>2025-09-01</td>
                <td>2025-09-03</td>
                <td>
                  <div class="d-flex justify-content-center gap-2">
                    <button class="btn btn-sm btn-primary" title="View"><i class="bi bi-eye"></i></button>
                    <button class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Reservation Table -->
  <div class="col-12">
    <div class="card shadow-sm border-0" style="background-color:#121212; color:#e0e0e0;">
      <div class="card-body" id="reservationTable">
        <h5 class="fw-bold mb-3">
          <i class="bi bi-journal-check me-2 text-success"></i> Completed Reservation Lists
        </h5>
        <div class="table-responsive">
          <table class="table table-dark table-striped align-middle mb-0" style="background-color:#1a1a1a;">
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
                <th>Amount Paid (₱)</th>
                <th>Balance (₱)</th>
                <th>Payment Status</th>
                <th>Created At</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Carlos Reyes</td>
                <td>Cottage A</td>
                <td>2025-09-02</td>
                <td>10:00 AM</td>
                <td>5:00 PM</td>
                <td>3</td>
                <td>2</td>
                <td>₱4,500</td>
                <td>₱4,500</td>
                <td>₱0</td>
                <td><span class="badge bg-success">Paid</span></td>
                <td>2025-08-25</td>
                <td>
                  <div class="d-flex justify-content-center gap-2">
                    <button class="btn btn-sm btn-primary" title="View"><i class="bi bi-eye"></i></button>
                    <button class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Total Revenue Section -->
<div class="mt-4">
  <div class="card border-0 shadow-sm" style="background-color:#1a1a1a; color:#e0e0e0;">
    <div class="card-body d-flex justify-content-between align-items-center">
      <h5 class="fw-bold mb-0">
        <i class="bi bi-cash-stack text-success me-2"></i> Total Revenue
      </h5>
      <h4 class="fw-bold text-success mb-0">₱7,500</h4>
    </div>
  </div>
</div>

<!-- Print Script -->
<script>
  function printSection(sectionId) {
    let printContent = document.getElementById(sectionId).innerHTML;
    let originalContent = document.body.innerHTML;

    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = originalContent;
    location.reload(); // refresh to restore JS
  }
</script>
@endsection
