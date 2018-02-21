<?php

namespace App\Http\Controllers;

use App\Lista;
use Illuminate\Http\Request;

class ListasController extends Controller
{
    public function index() {

    	$listas = Lista::get();

    	return view('listas.index', compact('listas'));

    }

    public function show(Lista $lista) {

    	return view('listas.show', compact('lista'));
    	
    }

    public function create() {

    	return view('listas.create');
    	
    }

    public function store(Request $request) {

    	Lista::create(request(['name']));

    	return redirect('/');

    }
}
