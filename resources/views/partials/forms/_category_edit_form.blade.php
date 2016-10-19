
  <div class="form-group">
    
    <?php if (isset($category)) { 
      $defaultName = $category['name'];
      $defaultDescription = $category['description'];

     } 
     else { 
      $defaultName = '';
      $defaultDescription = '';


     } ?> 

     {!! Form::label('name', 'Name :') !!}
     {!! Form::text('name', $defaultName, ['class' => 'form-control']) !!} 
  </div>
  <div class="form-group">
    <label for="body">Description:</label>
    <textarea class="form-control" style="width:auto"  name="description" 
    id="description">
      {{ $defaultDescription }}
    </textarea>

  </div>
 
  <?php if (isset($lesson)) { ?>
    <input type="hidden" name="id" value="{{ $category['id'] }}">
  <?php } ?> 
  <button type="submit" class="btn btn-default">{{ $submitButton }}</button>

@section('scripts')

  <script src="{!!asset('/js/summernote.min.js')!!}"></script> 

 <script type="text/javascript">
        $(document).ready(function() {
            $('#description').summernote({
              height:300,
            
            });
        
        });
    </script>
@endsection