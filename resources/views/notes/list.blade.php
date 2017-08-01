@extends('layout')


		@section('content')			
			<div class="row">
				
				<div class="eight columns">
					<h2>Listado de notas</h2>
					<p>
						<a href="{{ url('notes/create') }}">Nueva nota</a>
					</p>
					<ul class="list-group">
						@foreach ($notes as $note)

						<li class="list-group-item">
							@if ($note->category)
								<span class="label label-info">{{ $note->category->name }}</span>
							@else
								<span class="label label-info">Otras</span>
							@endif
							{{ str_limit($note->note, $limit = 50, $end = '...') }}
							 <small><a href="{{ url('notes/'.$note->id) }}">Ver nota</a></small>
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