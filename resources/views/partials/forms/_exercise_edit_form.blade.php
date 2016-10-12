
  <div class="form-group">
    {!! Form::label('category', 'Category :') !!}
    {!! Form::text('category', $exercise['category'], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label for="title">Title:</label>
    {!! Form::label('title', 'Title :') !!}
    {!! Form::text('title', $exercise['title'], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label for="body">Description:</label>
    <textarea class="form-control" rows="5" name="body">
    {{$exercise['body']}}
    </textarea>

  </div>
   <div class="form-group">
    <label for="solution">Solution:</label>
    <textarea class="form-control" rows="5" name="solution">
    {{$exercise['solution']}}
    </textarea>

  </div>
  <input type="hidden" name="id" value="{{ $exercise['id'] }}">
  <button type="submit" class="btn btn-default">{{ $submitButton }}</button>
