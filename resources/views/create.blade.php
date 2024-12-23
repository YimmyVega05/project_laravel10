@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
        </br>
            <h2>Create Tasks</h2>
        </div>
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

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Tasks</strong>
                    <input type="text" name="title" class="form-control" placeholder="Tarea" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Descripción..."></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Due Date:</strong>
                    <input type="date" name="due_date" class="form-control" id="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>State(initial):</strong>
                    <select name="status" class="form-select" id="">
                        <option value="">--Status --</option>
                        <option value="Pendiente">Pending</option>
                        <option value="En progreso">In progress</option>
                        <option value="Completada">Completed</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">create</button>
            </div>
        </div>
    </form>
</div>
@endsection