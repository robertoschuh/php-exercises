
  <div class="form-group">
    {!! Form::label('category', 'Category :') !!}
    <?php if (isset($exercise)) { 
      $defaultCategory = $exercise['category'];
      $defaultTitle = $exercise['title'];
      $defaultBody = $exercise['body'];
      $defaultSolution = $exercise['solution'];
     } 
     else { 
      $defaultCategory = '';
      $defaultTitle = '';
      $defaultBody = '';
      $defaultSolution = '';
     } ?> 
     {!! Form::text('category', $defaultCategory, ['class' => 'form-control']) !!} 
  </div>
  <div class="form-group">
    <label for="title">Title:</label>
    {!! Form::label('title', 'Title :') !!}
    {!! Form::text('title', $defaultTitle, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label for="body">Description:</label>
    <textarea class="form-control" rows="5" name="body">
      {{ $defaultBody }}
    </textarea>

  </div>
   <div class="form-group">
    <label for="solution">Solution:</label>
    <textarea class="form-control" rows="5" name="solution">
    
      {{ $defaultSolution }}
    
    </textarea>

  </div>
  <?php if (isset($exercise)) { ?>
    <input type="hidden" name="id" value="{{ $exercise['id'] }}">
  <?php } ?> 
  <button type="submit" class="btn btn-default">{{ $submitButton }}</button>
