@extends('admin.master')

@section('content')
<div class="shadow p-3 d-flex justify-content-between align-items-center">
    <h6 class="text-uppercase">My Task</h6>
</div>

<div class="my-5 py-5">
    <!-- Task Table Start -->
    <div class="w-100 mx-auto">
        <div>
            <table class="table align-middle mb-3 text-center">
                <thead class="bg-light">
                    <tr>
                        <th>#</th>
                        <th>Task Name</th>
                        <th>Task Details</th>
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>Total Days</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $key => $task)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $task->task_name }}</td>
                        <td>{{ $task->task_description }}</td>
                        <td>{{ $task->from_date }}</td>
                        <td>{{ $task->to_date }}</td>
                        <td>{{ $task->total_days }}</td>
                        <td>
                            @if($task->status == 'completed on time')
                                <span class="text-white fw-bold bg-success rounded-pill p-2">Completed on time</span>
                            @elseif($task->status == 'completed in late')
                                <span class="text-white fw-bold bg-danger rounded-pill p-2">Completed Late</span>
                            @else
                                <a class="btn btn-warning rounded-pill fw-bold text-white complete-btn"
                                   href="{{ route('taskComplete', ['id' => $task->id]) }}">Complete</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Task Table End -->
</div>

@endsection
