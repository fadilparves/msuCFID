<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://v40.pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">  -->
  <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
  <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/tinymce/js/tinymce/jquery.tinymce.min.js') }}"></script>
  <link href="{{ asset('css/video-js.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('js/videojs-ie8.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/video.js') }}"></script>
  <link href="{{ asset('css/app.scss') }}" rel="stylesheet">
</head>

<body class="" background="https://preview.ibb.co/bNSQjm/photo_2017_12_20_03_17_32.jpg" style="background-repeat: no-repeat; background-size: 1500px 7000px;">
  <img class="text-center w-100" src="{{ URL::to('/') }}/msu1.jpg"/>
  <nav class="navbar navbar-expand-md navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand pull-left" href="#"><b>MSU</b> Content Management System</a>
      <div class="collapse navbar-collapse text-right justify-content-end" id="navbar2SupportedContent">
        @if (Auth::guest())
        <ul class="navbar-nav"></ul>
        <a href="{{ route('login') }}" class="btn navbar-btn ml-2 text-white btn-secondary"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</a>
        <a href="{{ route('register') }}" class="btn navbar-btn ml-2 text-white btn-secondary"><i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;Sign Up</a>
        @else
        <div class="btn-group">
          <button class="btn btn-outline-dark dropdown-toggle pull-right" data-toggle="dropdown">{{ Auth::user()->email }}</button>
          <div class="dropdown-menu pull-right">
            <a class="dropdown-item" href="{{ route('courses.index') }}">Courses</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();"">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
            </form>
          </div>
        </div>
      </div>
      @endif
    </div>
  </nav>
  <div id="app">
    @yield('content')
  </div>
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript">
    tinymce.init({
      selector : "textarea",
      plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
      toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | imageupload"
    });

  </script>
</body>

</html>

