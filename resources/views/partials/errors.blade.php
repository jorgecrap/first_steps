@if (!$errors->isEmpty())
<div class="alerta">
	<p><strong>Upsss...</strong> hay algún error</p>
	<ul>
	@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
</div>
@endif