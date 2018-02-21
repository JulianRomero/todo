<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index() {

    	$todos = Todo::incomplete()->get();

    	return view('todos.index', compact('todos'));

    }

    public function show(Todo $todo) {

    	return view('todos.show', compact('todo'));
    	
    }
}
