<?php

use App\Note;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class NoteExerciseTest extends TestCase
{
   
	use DatabaseTransactions;

    public function test_note_summary_and_notes_details()
    {
       	
    	$text = 'Begin of the note. In est inventore occaecati nesciunt qui. Accusamus temporibus mollitia consequatur est qui autem perferendis. Maiores et facilis cumque. Velit ullam fugit iste illo eum.';
    	$text .= 'End of the note';



       	$note = Note::create(['note'=> $text]);

       	$this->visit('notes')
       		->see('Begin of the note.')
       		->seeInElement('.label','Otras')
       		->dontSee('End of the note')
       		->seeLink('Ver nota')
       		->click('Ver nota')
       		->see($text);
    }
}
