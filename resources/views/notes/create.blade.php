@extends('layout')


		@section('content')			
			<div class="row">
				
				<div class="eight columns">
					
					<h2>Crea una Notas</h2>

					<form method="post" >

						{{ csrf_field() }}

						<label for="nota">Nota</label>

						<textarea id="nota" name="nota" class="u-full-width" placeholder="Escribe tu nota…"></textarea>
						
						<input class="button-primary" type="submit" value="Submit">			

					</form>
				</div>

				<div class="four columns">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempor, nibh sed placerat vulputate, mauris risus tristique nulla, eu elementum lorem arcu quis nibh. Aenean at quam lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat sapien quis cursus semper. Cras rutrum nunc luctus nibh consectetur, id porta ante vulputate. Aliquam metus nisl, tempus quis aliquam eget, congue non dui. Pellentesque pulvinar nec dolor et lobortis. Nulla pellentesque metus vel dolor viverra pulvinar. Suspendisse tempus ultrices elit, sed commodo elit eleifend ac. Phasellus varius libero ac sapien mollis, at tristique augue iaculis. Duis vel rhoncus metus, nec dictum mi. Morbi bibendum eget est in fermentum. Nullam consequat et velit ut placerat.</p>
				</div>

			</div>

		@endsection