
  <div class="form-group">
    
    <?php if (isset($lesson)) { 
      $defaultLevel = $lesson['level'];
      $defaultExplanation = $lesson['explanation'];
      $defaultResources = $lesson['resources'];
      $defaultCategory = $lesson['category'];
     } 
     else { 
      $defaultLevel = '';
      $defaultExplanation = '';
      $defaultResources = '';
      $defaultCategory = '';

     } ?> 
     {!! Form::label('category', 'Category :') !!}
     {!! Form::text('category', $defaultCategory, ['class' => 'form-control']) !!} 
     {!! Form::label('level', 'Level :') !!}
     {!! Form::text('level', $defaultLevel, ['class' => 'form-control']) !!} 
  </div>
  <div class="form-group">
    <label for="body">Explanation:</label>
    <textarea class="form-control" style="width:auto"  name="explanation" 
    id="explanation">
      {{ $defaultExplanation }}
    </textarea>

  </div>
  <div class="form-group">
    <label for="body">Resources:</label>
    <textarea class="form-control" style="width:auto"  name="resources" 
    id="resources">
      {{ $defaultResources }}
    </textarea>

  </div>

  <?php if (isset($lesson)) { ?>
    <input type="hidden" name="id" value="{{ $lesson['id'] }}">
  <?php } ?> 
  <button type="submit" class="btn btn-default">{{ $submitButton }}</button>

@section('scripts')

  <script src="{!!asset('/js/summernote.min.js')!!}"></script> 

 <script type="text/javascript">
        $(document).ready(function() {
            $('#explanation').summernote({
              height:300,
            
            });
            $('#resources').summernote({
              height:300,
            
            });
        });
    </script>
@endsection


@section('scripts')

  <script src="{!!asset('/js/summernote.min.js')!!}"></script> 

 <script type="text/javascript">
        $(document).ready(function() {
            $('#body').summernote({
              height:300,
            
            });
            $('#solution').summernote({
              height:300,
            
            });
        });
    </script>
@endsection