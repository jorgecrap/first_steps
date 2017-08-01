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
    	$notes = Note::paginate(10);
    	return view('notes/list', compact('notes'));
    }

    public function create()
    {
    	return view('notes/create');
    }

    public function store()
    {
    	
        $this->validate(request(),[
            'note' => ['required','max:200']        
        ]);

        $data =  request()->all();
        
        Note::create($data);

        return redirect()->to('notes');

    }

    public function show($id)
    {
    	$note = Note::findOrFail($id);
        return view('notes/details', compact('note'));
        
    }
}
