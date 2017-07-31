<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Note;

class NotesController extends Controller
{
    public function index()
    {
    	$notes = Note::all();
    	return view('notes/list', compact('notes'));
    }

    public function create()
    {
    	return view('notes/create');
    }

    public function store()
    {
    	return 'Creando una nota';
    }

    public function show($id)
    {
    	dd($id);
    }
}
