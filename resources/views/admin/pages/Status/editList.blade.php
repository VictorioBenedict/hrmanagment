@extends('admin.master')

@section('content')
  <style>
    body {
        color: #F0F1F7; /* White text for high contrast */
        margin-bottom: 3%;
    }

    .table {
        border-radius: 0.5rem; /* Rounded corners */
        overflow: hidden; /* Prevents overflow from corners */
    }

    .table th, .table td {
        vertical-align: middle; /* Center align */
    }

    .table th {
        background-color: #19305C; /* Bootstrap primary color */
        color: white; /* White text on primary background */
    }

    .table tbody tr:hover {
        background-color: #D1D6E8; /* Light gray on hover */
    }

    .table thead {
        background-color: #AE7DAC; /* Background for table header */
        color: #F0F1F7; /* White text on header */
    }

    .toggle-visibility {
        cursor: pointer; /* Pointer cursor for checkboxes */
    }

    .card-header {
        background-color: #AE7DAC; /* Dark background for cards */
        color: #F0F1F7; /* White text */
    }

    .input-group-text {
        background-color: white; /* Light background for search box */
        color: #AE7DAC; /* Dark text color */
    }

    .input-group .form-control {
        background-color: #D1D6E8; /* Light background for input */
        color: #AE7DAC; /* Dark text color */
    }

    .modal-content {
        background-color: #F1916D; /* Darker background for modal */
        color: #F0F1F7; /* White text */
    }

    .modal-header {
        background-color: #AE7DAC; /* Dark background for modal header */
        color: #F0F1F7; /* White text */
    }

    .modal-footer button {
        background-color: #F1916D; /* Button color in modal */
        color: #F0F1F7; /* White text */
    }

    /* Pagination Container */
    .pagination {
        margin-top: 20px;
    }

    /* Disable state for previous and next buttons */
    .pagination .page-item.disabled .page-link {
        color: #A0A6B1; /* Light gray color for disabled buttons */
        pointer-events: none; /* Prevent clicks */
    }

    /* Active page number styling */
    .pagination .page-item.active .page-link {
        background-color: #3D5A5C !important; /* Custom active color */
        border-color: #3D5A5C !important;
        color: #F0F1F7; /* Light text color */
    }

    /* Page link styling */
    .pagination .page-link {
        color: #AE7DAC; /* Dark color for page numbers */
        border: 1px solid #D1D6E8; /* Light border for links */
        padding: 0.5rem 0.75rem;
    }

    /* Hover effect for page links */
    .pagination .page-item:not(.disabled) .page-link:hover {
        background-color: #3D5A5C !important;
        color: white !important;
    }

    /* Custom icon styles */
    .pagination .page-link i {
        font-size: 1.2rem;
        color: #AE7DAC; /* Match the text color */
    }

    /* Adjustments for form layout */
    .card {
        max-width: 600px;
        margin: auto;
    }

    .form-outline {
        margin-bottom: 1.5rem;
    }

    .text-center {
        margin-top: 20px;
    }

  </style>

  <div class="shadow p-3 d-flex justify-content-between align-items-center ">
    <h6 class="text-uppercase" style="color:#AE7DAC;">Update Status Type</h6>
  </div>
  <br>

  <!-- Section: Form Design Block -->
  <section>
    <div class="d-flex justify-content-center align-items-center">

      {{-- Status Form Start --}}
      <div class="w-75">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h5 class="text-uppercase">Update Status Form</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('status.update', $statusTypes->id) }}" method="post">
              @csrf
              @method('put')

              <div class="row mb-3">
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label mt-2" for="status_type">Status Type</label>
                    <input value="{{ $statusTypes->status_type }}" placeholder="Enter Status Type" class="form-control" name="status_type" id="status_type" required>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-auto">
                  <button type="submit" class="btn btn-success p-2 px-3 rounded-pill">Update</button>
                </div>
                <div class="col-auto">
                  <a href="{{ route('status.list') }}" class="btn btn-danger p-2 px-3 rounded-pill">Cancel</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection