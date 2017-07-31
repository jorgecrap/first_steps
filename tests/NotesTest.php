<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{
    
    use WithoutMiddleware;

    public function test_notes_list()
    {
        // Having
        Note::create(['note' => 'My first note']);
        Note::create(['note' => 'second notes']);
        // When
        $this->visit('notes')
            // Then
            ->see('My first note')
            ->see('Second notes');
    }

    public function test_create_note()
    {

      //When
      $this->post('notes/create')
            //Then
            ->see('Creando una nota');

    }
}
