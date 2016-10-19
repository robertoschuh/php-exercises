@inject('Lessons', 'App\Lesson')

<?php $lessons = $Lessons::all();

//print dd($lessons);
if(empty($lessons)) {
	print 'no lessons yet';
}

print 'Lessons '.count($lessons);
?>
<ul>
@foreach($lessons as $lesson)

    <li><a href="/{{ $lesson['category'] }}/{{ $lesson['title'] }}">{{ $lesson['title'] }}</a></li>
  
@endforeach
</ul>