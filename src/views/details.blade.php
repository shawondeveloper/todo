@extends('todo::main')

@section('content')
    <div class="todosection">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <a class="btn btn-primary" href="{{route('todo')}}">Back</a>

        <div class="tablesection">
            <table class="table table-bordered">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                @foreach($todos as $todo)
                <tr>
                    <td>{{$todo->title}}</td>
                    <td>{{$todo->description}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection