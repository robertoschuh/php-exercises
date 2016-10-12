@inject('exercises', 'App\Exercise')

<ul>
@foreach($exercises::all() as $exercise)

    <li><a href="/{{ $exercise['category'] }}/{{ $exercise['title'] }}">{{ $exercise['title'] }}</a></li>
  
@endforeach
</ul>