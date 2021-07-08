@extends('todo::main')

@section('content')
    <div class="todosection">
        
        <form action="{{route('todo.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Task Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter task title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Task Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirm Submit</button>
            </div>
        </form>
    </div>
@endsection