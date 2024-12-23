@extends('layouts.base')

@section('content')
</br>
<div class="row">
    <div class="col-12">
        <div>
            <h2>Edit Task</h2>
        </div>
        </br>
        <div>
            <a href="{{route('tasks.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger mt-2">
        <strong>These fields are required</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('tasks.update',$task)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Taks</strong>
                    <input type="text" name="title" class="form-control" placeholder="Task" value="{{$task->title}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Descriptión</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Descritción...">{{$task->description}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Due Date:</strong>
                    <input type="date" name="due_date" class="form-control" value="{{$task->due_date}}" id="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>State (initial):</strong>
                    <select name="status" class="form-select" id="">
                        <option value="">-- Status --</option>
                        <option value="Pendiente" @selected(old('status', $task->status) == 'Pendiente')>Pending</option>
                        <option value="En progreso" @selected(old('status', $task->status) == 'En progreso')>In progress</option>
                        <option value="Completada" @selected(old('status', $task->status) == 'Completada')>Completed</option>
                    </select>    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection