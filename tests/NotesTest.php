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

      
      $this->visit('notes')
            ->click('Nueva nota')
            ->seePageIs('notes/create')
            ->see('Crear una nota')
            ->type('Una nueva nota','note')
            ->press('Crear nota')
            ->seePageIs('notes')
            ->see('Una nueva nota')
            ->seeInDatabase('notes',[
                'note' => 'Una nueva nota'
            ]);

    }
}
