<?php

namespace Codingwithshawon\Todo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Codingwithshawon\Todo\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        return view('todo::todo');
    }

    public function store(Request $request){
        Todo::create($request->all());
        return back()->with('success','Item created successfully!');
        // $todo = new Todo();
        // $todo->title = $request->input('title');
        // $todo->description = $request->input('description');
        // $todo->save();
    }
}
