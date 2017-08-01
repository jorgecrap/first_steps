@extends('layout')


		@section('content')			
			<div class="row">
				
				<div class="eight columns">
					<h3>Nota:</h3>
					<div>{{ $note->note }}</div>
					@if ($note->category)
						<span class="label label-info">{{ $note->category->name }}</span>
					@else
						<span class="label label-info">Otras</span>
					@endif
				</div>

				<div class="four columns">
					
					<h4>Menu lateral</h4>
						<ul>
							<li>Item01</li>
							<li>Item02</li>
							<li>Item03</li>
							<li>Item04</li>
							<li>Item05</li>
						</ul>
				</div>

			</div>

		@endsection