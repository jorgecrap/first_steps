@extends('layout')


		@section('content')			
			<div class="row">
				
				<div class="eight columns">
					<h2>Listado de notas</h2>
					<p>
						<a href="{{ url('notes/create') }}">Nueva nota</a>
					</p>
					<ul>
						@foreach ($notes as $note)

						<li>
							{{ $note->note }}				
						</li>

						@endforeach

					</ul>
					{!! $notes->render() !!}
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