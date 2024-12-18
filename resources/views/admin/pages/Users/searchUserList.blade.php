@extends('admin.master')

@section('content')

<!-- Inline CSS -->
<style>
    body {
        background-color: #f8f9fa; /* Light background for contrast */
    }

    .table {
        border-radius: 0.5rem; /* Rounded corners */
        overflow: hidden; /* Prevents overflow from corners */
    }

    .table th, .table td {
        vertical-align: middle; /* Center align */
    }

    .table th {
        background-color: #007bff; /* Bootstrap primary color */
        color: white; /* White text on primary background */
    }

    .table tbody tr:hover {
        background-color: #f1f1f1; /* Light gray on hover */
    }

    .toggle-visibility {
        cursor: pointer; /* Pointer cursor for checkboxes */
    }

</style>

<!-- Title Section -->
<div class="shadow p-3 d-flex justify-content-between align-items-center">
    <h6 class="text-uppercase">Searched User</h6>
</div>

<!-- Result Banner -->
<br>
<div class="fw-normal mb-3">
    <h2 class="fw-normal fs-5 mx-auto text-center rounded-pill p-2 w-50 mb-5
        @if ($users->count() > 0) bg-success
        @else
            bg-danger text-white @endif">
        @if ($users->count() === 1)
            Found 1 matching data for "{{ request()->search }}"
        @elseif ($users->count() > 1)
            Found {{ $users->count() }} matching data for "{{ request()->search }}"
        @else
            No Data found for "{{ request()->search }}"
        @endif
    </h2>
</div>

<!-- Users Table -->
@if ($users->count() > 0)
    <table class="table align-middle text-center w-75 mx-auto">
        <thead class="bg-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td><img class="avatar p-1" src="{{ url('/uploads/' . $user->image) }}" alt=""></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a class="btn btn-outline-info rounded-pill" data-mdb-ripple-color="dark"
                            href="{{ route('users.profile.view', $user->id) }}">View</a>
                        <a class="btn btn-outline-dark btn-rounded rounded-pill" data-mdb-ripple-color="dark"
                            href="{{ route('edit', $user->id) }}">Edit</a>
                        <a class="btn btn-outline-danger btn-rounded rounded-pill" data-mdb-ripple-color="dark"
                            href="{{ route('delete', $user->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

<!-- Optional: Empty Div for future spacing -->
<div class="w-25 mx-auto mt-4">
</div>

@endsection
