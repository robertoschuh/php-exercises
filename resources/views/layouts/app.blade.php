<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    {!! Html::style('css/bootstrap.css') !!}

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
   {!! Html::style('css/app.css') !!}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="/admin/exercise/new">Create new</a>

                @yield('header')
            </div>
        </div>
<div class="row">
    <div class="col-md-2 container-fluid" style="float:left">
        <div id="sidebar">
            <!-- aqui el partial -->
           <!-- @yield('sidebar') -->
           @yield('sidebar')
        </div>
    </div>

    <div class="col-md-10 container-fluid">
        <div id="content">
            @yield('content')
          
        </div>
    </div>


</div>
 
    <!-- Jquery CDN -->
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

    </div>

      <div id="footer">
       
          @yield('footer')
        </div>
    </div>
</div>

</body>
</html>