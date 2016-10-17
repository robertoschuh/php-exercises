@foreach ($lessons as $lesson)
	<p>Category: {{ $lesson['category'] }}

	</p>
	<h3>{{ $lesson['title'] }}</h3>
	<p>{!! $lesson['body'] !!}</p>
	<p>{!! $lesson['solution'] !!}</p>
	<p>
	<a href="/admin/lesson/edit/{{ $lesson['id'] }}"> Edit</a>
	</p>
@endforeach