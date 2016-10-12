@foreach ($exercises as $exercise)
	<p>Category: {{ $exercise['category'] }}

	</p>
	<h3>{{ $exercise['title'] }}</h3>
	<p>{{ $exercise['body'] }}</p>
	<p>{{ $exercise['solution'] }}</p>
	<p>
	<a href="/exercise/edit/{{ $exercise['id'] }}"> Edit</a>
	</p>
@endforeach