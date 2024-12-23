@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
        </br>
            <h2 class="text-white">Create Tasks</h2>
        </div>
        </br>
        <div>
            <a href="{{route('tasks.create')}}" class="btn btn-primary">Create Tasks</a>
        </div>
    </div>

    @if (Session::get('success'))
    <div class="alert alert-success mt-2">
        <strong>{{Session::get('success')}}</strong></br>
    </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Tasks</th>
                <th>Description</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach ($tasks as $task)
            <tr>
                <td class="fw-bold">{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->due_date}}</td>
                <td>
                    <span class="badge bg-warning fs-6">{{$task->status}}</span>
                </td>
                <td>
                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary">Edit</a>

                    <form action="{{route('tasks.destroy', $task)}}" method="post" class="d-inline">
                        @csrf 
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach 
        </table>
        {{$tasks->links()}}
    </div>
</div>
@endsection