@extends('layout')


		@section('content')			
			<div class="row">
				
				<div class="eight columns">
					
					<h2>Crear una nota</h2>

					<form method="post" action="{{ url('notes') }}">

						@include('partials/errors')

						{{ csrf_field() }}

						<label for="note">Nota</label>

						<textarea id="note" name="note" class="u-full-width" placeholder="Escribe tu nota…">{{ old('note') }}</textarea>
						
						<input class="button-primary" type="submit" value="Crear nota">			

					</form>
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