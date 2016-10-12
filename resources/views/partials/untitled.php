@foreach ($exercises as $exercise)
	<p>Category: {{ $exercise['category'] }}
	<span>
	<a href="/exercise/{{ $exercise['title'] }}/edit" Edit</a>
	</span>
	</p>
	<h3>{{ $exercise['title'] }}</h3>
	<p>{{ $exercise['body'] }}</p>
	<p>{{ $exercise['solution'] }}</p>
@endforeach