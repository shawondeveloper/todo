<?php

namespace Codingwithshawon\Todo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Codingwithshawon\Todo\Models\Todo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class TodoController extends Controller
{
    public function index(){
        return view('todo::todo');
    }

    public function store(Request $request){
        Todo::create($request->all());
        return redirect()->route('todo.details')
        ->with('success','Working.');
        // $todo = new Todo();
        // $todo->title = $request->input('title');
        // $todo->description = $request->input('description');
        // $todo->save();
    }

    public function details(){
        $todos = DB::table('todos')->get();
        return view('todo::details',['todos'=>$todos]);
    }
}
